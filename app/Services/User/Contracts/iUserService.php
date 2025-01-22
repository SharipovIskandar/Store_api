<?php

namespace App\Services\User\Contracts;

use App\Http\UserRequest;

interface iUserService
{
    public function store(UserRequest $request);
    public function edit($id);
    public function update(UserRequest $request, $id);
    public function delete($id);
}
