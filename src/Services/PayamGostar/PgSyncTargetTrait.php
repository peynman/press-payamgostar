<?php

namespace Larapress\PayamGostar\Services\PayamGostar;

trait PgSyncTargetTrait {
    public function pg_sync_record() {
        return $this->hasOne(PgSyncRecord::class, 'id', 'link_id');
    }
}