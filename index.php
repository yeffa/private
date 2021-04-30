class Parent {
  // как перенести сюда методы get и set из дочерних классов
  // в дочерних классах эти методы роботают норм
  // если переношу в родительский класс сразу PHP ругается
  // что я хочу обратиться к приватным свойствам
}

class A extends Parent {

  private  $a;

  public function get(): string
  {
    return $this->a;
  }

  public function set(string $value): void
  {
    $this->a = value
  }

}

class B extends Parent {

  private  $b;

  public function get(): string
  {
    return $this->b;
  }

  public function set(string $value): void
  {
    $this->b = value
  }

}
