<?php

namespace Tests\Fixtures\Modules\Probe\Livewire;

use Livewire\Component;

final class ProbeCounter extends Component
{
    public int $count = 0;

    public function increment(): void
    {
        $this->count++;
    }

    public function render()
    {
        return view('probe::counter', ['count' => $this->count]);
    }
}
