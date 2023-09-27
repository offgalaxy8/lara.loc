<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __invoke() {
        return 'EMPTY';
    }

    public function index() {
        return 'Список постов';
    }

    public function create() {
        return 'Создание постов';
    }

    public function store() {
        return 'Запрос создания поста';
    }

    public function show() {
        return 'Просмотр поста';
    }

    public function edit() {
        return 'Ред поста';
    }

    public function update() {
        return 'Обновл поста';
    }

    public function delete() {
        return 'Удал поста';
    }

    public function like() {
        return 'Лайк поста';
    }
}
