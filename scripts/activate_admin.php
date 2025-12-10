<?php
require __DIR__ . '/../vendor/autoload.php';
$app = require __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\User;

$email = 'admin@prueba.com';
$user = User::where('email', $email)->first();
if (!$user) {
    echo "Usuario {$email} no encontrado.\n";
    exit(1);
}
$user->activo = 1;
$user->save();

echo "Usuario actualizado: id={$user->id}, email={$user->email}, activo={$user->activo}\n";
