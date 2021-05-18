<?php
    interface iEntregador{
        public function tipoProduto();
        public function origem();
        public function destino();
        public function calculaFrete();
    }