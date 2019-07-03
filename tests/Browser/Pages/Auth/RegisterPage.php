<?php

namespace Tests\Browser\Pages\Auth;

use Laravel\Dusk\Browser;
use Tests\Browser\Pages\Page;

class RegisterPage extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/register';
    }

    /**
     * Assert that the browser is on the page.
     *
     * @param  \Laravel\Dusk\Browser  $browser
     * @return void
     */
    public function assert(Browser $browser)
    {
        $browser->assertPathIs($this->url())
            ->assertVisible('@first_name')
            ->assertVisible('@last_name')
            ->assertVisible('@email')
            ->assertVisible('@password')
            ->assertVisible('@password_confirmation')
            ->assertVisible('@agree_terms')
            ->assertVisible('@register')
            ->assertVisible('@already_registered')
            ->assertVisible('@terms');
    }

    /**
     * Get the element shortcuts for the page.
     *
     * @return array
     */
    public function elements()
    {
        return [
            '@first_name' => '#first_name',
            '@last_name' => '#last_name',
            '@email' => '#email',
            '@password' => '#password',
            '@password_confirmation' => '#password_confirmation',
            '@agree_terms' => '#agree_terms',
            '@register' => '#register',
            '@already_registered' => '#already_registered',
            '@terms' => '#terms',
        ];
    }
}
