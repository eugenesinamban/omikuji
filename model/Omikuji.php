<?php

class Omikuji {

    protected $omikuji = [
        "大吉です！運がとてもいいですね！", 
        "吉です！運がいいですね！", 
        "中吉です！運がまあまあですね.", 
        "小吉です！運が小さいですね.", 
        "末吉です！運は悪くないですね.", 
        "凶です！運は悪いです！！"
    ];

    public function hit($hit = false) {
        if (false === $hit) {
            return "ボタンを押してください.";
        }
        
        return $this->omikuji[random_int(0, count($this->omikuji) - 1)];

    }

}