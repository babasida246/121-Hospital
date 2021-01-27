<?php

namespace App\Console\Commands;

use App\Models\Team;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Laravel\Fortify\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Validator;

class CreateAccount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:account {username} {email} {role}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new account';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Artisan::call('migrate:refresh');
        /**
         * Create a newly registered user.
         *
         * @param  array  $input
         * @return \App\Models\User
         */

        /* Password rule */
        $this->info('The password must:');
        $this->info('   * At least 8 characters');
        $this->info('   * Contain one uppercase character');
        $this->info('   * Contain one numeric digit');
        $this->info('   * Contain one special character');

        /*  */
        $input = [
            'name' => $this->argument('username'),
            'email' => $this->argument('email'),
            'password' => $this->secret('Password: '),
            'password_confirmation' => $this->secret('Confirm password: ')
        ];

        /*  */
        $validator = Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', new Password, 'confirmed'],
        ]);

        /*  */
        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                //
                echo "* " . $error . "\n";
            }
        } else {
            DB::transaction(function () use ($input) {
                $user = User::create([
                    'name' => $input['name'],
                    'email' => $input['email'],
                    'password' => Hash::make($input['password']),
                ]);
                $this->createTeam($user);
            });
            $this->info($input['name']. ' with email '. $input['email'] . ' has been created');
        }
    }

    /**
     * Create a personal team for the user.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    protected function createTeam(User $user)
    {
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => explode(' ', $user->name, 2)[0] . "'s Team",
            'personal_team' => true,
        ]));
    }
}
