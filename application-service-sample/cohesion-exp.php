<?php

/**
 * 凝集度が低い方のサンプル（絶対的な尺度の話ではなく、ここでの相対的な話）
 */
class LowCohesion {
  private $val1;
  private $val2;
  private $val3;
  private $val4;

  /**
   * 1つのメソッドが 2/4のフィールドへアクセス
   */
  public function methodA() {
    return $this->val1 + $this->val2;
  }

  /**
   * 1つのメソッドが 2/4のフィールドへアクセス
   */
  public function methodB() {
    return $this->val3 + $this->val4;
  }
}


/**
 * 凝集度が高い方のサンプル - A
 */
class HighCohesionA {
  private $val1;
  private $val2;

  /**
   * 1つのメソッドが 2/2のフィールドへアクセス
   */
  public function methodA() {
    return $this->val1 + $this->val2;
  }
}


/**
 * 凝集度が高い方のサンプル - B
 */
class HighCohesionA {
  private $val3;
  private $val4;

  /**
   * 1つのメソッドが 2/2のフィールドへアクセス
   */
  public function methodB() {
    return $this->val3 + $this->val4;
  }
}