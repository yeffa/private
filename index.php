class Car {

  public function get($key): string
  {
    return $this->{$key};
  }

  public function set(string $key, string $value): void
  {
    $this->{$key} = value
  }

}

class Mercedes extends Car {
  private int $a;
  private int $b;
  private int $c;
}

class Lada extends Car {
  private int $d;
  private int $e;
  private int $f;
}

$mercedes = new Mercedes();
$mercedes->set('a', 100);

$lada = new Lada();
$lada->set('d', 200);

echo $mercedes->get('a');
echo $lada->get('d');
