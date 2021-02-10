<?php

namespace App\Console\Commands;

use App\Profile;
use App\User;
use Illuminate\Console\Command;

class UpdateUserIsNotActive extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:user {--day=3}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Убирает юзеров, которые не активны в течении X-дней из поиска';

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
        $res = Profile::whereHas('user', function ($q) {
                $q->whereDate('last_login', '<=', now()->subDays($this->option('day')));
            })
            ->update([
                'show_in_search' => false]
            );

        $this->info(sprintf('Обновлено пользователей: %s', $res));
    }
}
