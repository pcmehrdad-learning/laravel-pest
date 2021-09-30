<?php

    it('can render Home page',function (){
        $this->get('/')
            ->assertSee('Laravel');
    });
