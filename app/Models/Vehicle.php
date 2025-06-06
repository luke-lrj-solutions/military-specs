<?php

namespace App\Models;

class Vehicle extends Entity
{
    public function crewSize(): ?string
    {
        return get_field('crew_size', $this->id());
    }

    public function vehicleType(): ?string
    {
        return get_field('vehicle_type', $this->id());
    }

    // ... more vehicle-specific logic
}
