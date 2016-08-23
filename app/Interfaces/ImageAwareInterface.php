<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

interface ImageAwareInterface
{
    function image(): BelongsTo;

    function delete();
}