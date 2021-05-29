<?php

namespace Pastly\Traits;

use Chipslays\Collection\Collection;
use Pastly\Exceptions\RequestException;
use Pastly\Types\Paste;

trait Methods
{
    /**
     * Returns information about the requested paste.
     *
     * @param string $paste Identifier of paste.
     * @param string|null $token If pass the token with which the paste was created, then paste will not be deleted if it is one-time. (Optional).
     * @param string $password Paste password. Required if paste have password protection.
     * @return Paste
     *
     * @throws RequestException
     */
    public function get(string $paste, ?string $token = null, string $password = null): Paste
    {
        $response = $this->api->post('getPaste', [
            'json' => $this->prepareRequestData(compact('paste', 'token', 'password')),
        ]);

        $data = $this->handleResponse($response);

        return new Paste($data);
    }

    /**
     * Creates a new paste.
     *
     * @param string $token Secret token.
     * @param string $text Paste text.
     * @param array $extra Array with `type`, `title`, `slug`, `syntax`, `password`, `expiration`.
     * @return Paste
     *
     * @throws RequestException
     */
    public function create(
        string $token,
        string $text,
        array $extra = [
            'syntax' => 'text',
            'title' => null,
            'slug' => null,
            'type' => 'public',
            'password' => null,
            'expiration' => null,
        ]
    ): Paste {
        $response = $this->api->post('createPaste', [
            'json' => $this->prepareRequestData(array_merge(compact('token', 'text'), $extra)),
        ]);

        $data = $this->handleResponse($response);

        return new Paste($data);
    }

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
    public function edit(
        string $token,
        string $paste,
        array $extra = [
            'syntax' => null,
            'title' => null,
            'text' => null,
        ]
    ): void {
        $response = $this->api->post('editPaste', [
            'json' => $this->prepareRequestData(array_merge(compact('token', 'paste'), $extra)),
        ]);

        $this->handleResponse($response);
    }

    /**
     * Returns a collection of available syntaxes highlights.
     *
     * @return Collection
     */
    public function getSyntaxes(): Collection
    {
        $response = $this->api->get('getSyntaxes');

        $data = $this->handleResponse($response);

        return collection($data->get('list'));
    }
}
