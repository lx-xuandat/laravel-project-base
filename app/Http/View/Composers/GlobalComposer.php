<?php

namespace App\Http\View\Composers;

use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\View\View;

class GlobalComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $users;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(UserRepositoryInterface $users)
    {
        // Dependencies are automatically resolved by the service container...
        $this->users = $users;
    }

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('full_name', 'Luu Xuan Dat');
    }
}
