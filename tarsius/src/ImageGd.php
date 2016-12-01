<?php
/**
 * @author Tiago Mazzarollo <tmazza@email.com>
 */

namespace Tarsius;

use Tarsius\Image;

class ImageGd extends Image
{
    /**
     * @throws Exception Caso o arquivo não exista ou a extensão seja inválida
     *      ou o processo não tenha permissão de leitura no arquivo.
     */
    public function load(): Image
    {
        $extension = pathinfo($this->name,PATHINFO_EXTENSION);
        if ($extension !== 'jpg') {
            throw new \Exception("Imagem deve ser jpg.");
        }
        if (is_readable($this->name)) {
            $this->image = @imagecreatefromjpeg($this->name);
            if (is_null($this->image)) {
                throw new \Exception("Erro desconhecido ao carregar imagem '{$this->name}'.");
            }
        } elseif (file_exists($this->name)) {
            throw new \Exception("Sem permissão de leitura na imagem '{$this->name}'.");
        } else {
            throw new \Exception("Imagem '{$this->name}' não encontrada ou não existe.");
        }
        return $this;
    }

    /**
     * @todo o que fazer quando pixel não pode ser avaliado?
     */
    public function isBlack(int $x, int $y): bool
    {
        $rgb = imagecolorat($this->image, $x, $y);
        if (is_numeric($rgb)) {
            $rgb = [
                ($rgb >> 16) & 0xFF,
                ($rgb >>  8) & 0xFF,
                ($rgb >>  0) & 0xFF,
            ];
        } else {
            $rgb = [255, 255, 255];
        }

        list($r, $g, $b) = $rgb;
        return ceil(0.299*$r) + ceil(0.587*$g) + ceil(0.114*$b) < Image::THRESHOLD;
    }
}