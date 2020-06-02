<?php

class Omikuji {

    protected $kuji;

    protected $omikuji = [
        "大吉です！運がとてもいいですね！", 
        "吉です！運がいいですね！", 
        "中吉です！運が普通すね.", 
        "小吉です！運がまぁまぁですね.", 
        "末吉です！運は悪くないですね.", 
        "凶です！運は悪いです！！"
    ];

    public function __construct($request = null)
    {
        $this->kuji = $request;
    }

    public function hit() : string {
        if (null === $this->kuji) {
            return "ボタンを押してください.";
        }

        $count = count($this->omikuji);
        $ranInt = random_int(0, $count - 1);
        
        return $this->omikuji[$ranInt];

    }

}