<?php

namespace Tests\Browser\Pages\Auth;

use Laravel\Dusk\Browser;
use Tests\Browser\Pages\Page;

class LoginPage extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/login';
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
            ->assertVisible('@email')
            ->assertVisible('@password')
            ->assertVisible('@remember')
            ->assertVisible('@sign_in')
            ->assertVisible('@not_registered')
            ->assertVisible('@password_reset');
    }

    /**
     * Get the element shortcuts for the page.
     *
     * @return array
     */
    public function elements()
    {
        return [
            '@email' => '#email',
            '@password' => '#password',
            '@remember' => '#remember',
            '@sign_in' => '#sign_in',
            '@not_registered' => '#not_registered',
            '@password_reset' => '#password_reset',
        ];
    }
}
