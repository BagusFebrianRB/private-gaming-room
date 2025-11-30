<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CreateAdminCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new admin account';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('=== Create Admin Account ===');
        $this->newLine();

        // Ask for input
        $name = $this->ask('Name');
        $email = $this->ask('Email');
        $phone = $this->ask('Phone');
        $password = $this->secret('Password');
        $passwordConfirmation = $this->secret('Confirm Password');

        // Validate input
        $validator = Validator::make([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'password' => $password,
        ], [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'phone' => ['required', 'string', 'max:20'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        if ($validator->fails()) {
            $this->error('Validation failed:');
            foreach ($validator->errors()->all() as $error) {
                $this->error('- ' . $error);
            }
            return Command::FAILURE;
        }

        // Check password confirmation
        if ($password !== $passwordConfirmation) {
            $this->error('Password confirmation does not match!');
            return Command::FAILURE;
        }

        // Create admin
        $this->info('Creating admin account...');

        try {
            $admin = User::create([
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'password' => Hash::make($password),
                'role' => 'admin',
                'status' => 'active',
                'email_verified_at' => now(),
            ]);

            $this->newLine();
            $this->info('✅ Admin account created successfully!');
            $this->newLine();
            $this->info('Admin Details:');
            $this->info('- Name: ' . $admin->name);
            $this->info('- Email: ' . $admin->email);
            $this->info('- Phone: ' . $admin->phone);
            $this->info('- Role: ' . $admin->role);
            $this->newLine();

            return Command::SUCCESS;
        } catch (\Exception $e) {
            $this->error('Failed to create admin account!');
            $this->error('Error: ' . $e->getMessage());
            return Command::FAILURE;
        }
    }
}
