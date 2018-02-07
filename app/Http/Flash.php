<?php

namespace App\Http;

class Flash
{
    /**
     * flash a success a message.
     *
     * @param string $message The message
     */
    public function success($message)
    {
        $this->run($message, 'success');
    }

    /**
     * flash an error message.
     *
     * @param string $message The message
     */
    public function error($message)
    {
        $this->run($message, 'error');
    }

    /**
     * flash an info message.
     *
     * @param string $message
     */
    public function info($message)
    {
        $this->run($message, 'info');
    }

    protected function run($message, $type)
    {
        session()->flash('flash_message', json_encode(compact('message', 'type')));
    }
}
