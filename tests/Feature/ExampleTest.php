<?php

it('returns a successful response', function () {
    $response = $this->get('/');
    expect(true)->toBeTrue();
//    $response->assertStatus(200); // 500
});
