<?php

namespace NS {
    class ClassName
    {
    }

    echo ClassName::class;
}

namespace {
    $c = new \NS\ClassName();
    print $c::class;
}
