<?php 

class Admin
{
  private string $email;
  private string $password;
  private string $role;

  public function getEmail(): string

  {
      return $this->email;
  }
  public function getPassword(): string

  {
      return $this->password;
  }

  public function getRole(): string

  {
      return $this->role;
  }

}