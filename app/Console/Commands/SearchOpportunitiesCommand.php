<?php

namespace App\Console\Commands;

use App\Models\Interest;
use App\Models\Opportunity;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class SearchOpportunitiesCommand extends Command
{
    protected $signature = 'app:search-opportunities-command';

    protected $description = 'Search for transfer opportunities for all users';

    public function handle()
    {
        if (Storage::disk('local')->missing('search_opportunity_unique_id.txt')) {
            Storage::disk('local')->put('search_opportunity_unique_id.txt', '0');
        }
        $commandId = Storage::get('search_opportunity_unique_id.txt');

        $interests = Interest::where('id', '>', $commandId)->get();
        foreach ($interests as $interest) {
            $users = User::where('organization_id', $interest->organization_id)
                ->where('city_id', $interest->city_id)
                ->where('id', '!=', $interest->user_id)
                ->get();

            $users = $users->filter(function (User $user) use ($interest) {
                $cities = $user->interests->map(function(Interest $interest) {
                    return $interest->city_id;
                })->toArray();
                return in_array($interest->user->city_id, $cities);
            });

            foreach ($users as $user) {
                Opportunity::create([
                    'user_id' => $interest->user_id,
                    'interesting_user_id' => $user->id,
                ]);
            }
        }

        Storage::disk('local')->put('search_opportunity_unique_id.txt', $interests->last()->id);
    }
}
