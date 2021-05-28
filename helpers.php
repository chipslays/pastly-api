<?php

use Pastly\Client;
use Pastly\Types\Paste;

if (! function_exists('pastly_get')) {
    /**
     * Returns information about the requested paste.
     *
     * @param string $paste Identifier of paste.
     * @param string|null $password Paste password. Required if paste have password protection.
     * @return Paste
     *
     * @throws RequestException
     */
    function pastly_get(string $paste, ?string $password = null): Paste {
        return (new Client)->get($paste, $password);
    }
}

if (! function_exists('pastly_create')) {
    /**
     * Creates a new paste.
     *
     * @param string $token Secret token.
     * @param string $text Paste text.
     * @param array $extra Array with `type`, `title`, `slug`, `syntax`, `password`
     * @return Paste
     *
     * @throws RequestException
     */
    function pastly_create(
        string $token,
        string $text,
        array $extra = [
            'syntax' => 'text',
            'title' => null,
            'slug' => null,
            'type' => 'public',
            'password' => null,
        ]
    ): Paste {
        return (new Client)->create($token, $text, $extra);
    }
}

if (! function_exists('pastly_edit')) {
    /**
     * Edit existing paste.
     *
     * @param string $token Must match the token used to create the paste.
     * @param string $paste Identifier of paste.
     * @param array $extra Array with `text`, `syntax`, `title`.
     * @return void
     *
     * @throws RequestException
     */
    function pastly_edit(
        string $token,
        string $paste,
        array $extra = [
            'syntax' => null,
            'title' => null,
            'text' => null,
        ]
    ): void {
        (new Client)->edit($token, $paste, $extra);
    }
}
