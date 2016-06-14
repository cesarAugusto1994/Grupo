<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hino
 *
 * @ORM\Table(name="hino")
 * @ORM\Entity(repositoryClass="SiteBundle\Repository\HinoRepository")
 */
class Hino
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=120)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="categoria", type="string", length=100)
     */
    private $categoria;

    /**
     * @var string
     *
     * @ORM\Column(name="letra", type="text")
     */
    private $letra;

    /**
     * @var string
     *
     * @ORM\Column(name="tonalidade", type="string", length=5)
     */
    private $tonalidade;

    /**
     * @var string
     *
     * @ORM\Column(name="autor", type="string", length=120)
     */
    private $autor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cadastro", type="datetime")
     */
    private $cadastro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="atualizacao", type="datetime")
     */
    private $atualizacao;

    /**
     * @var int
     *
     * @ORM\Column(name="ativo", type="integer")
     */
    private $ativo;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Hino
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set categoria
     *
     * @param string $categoria
     *
     * @return Hino
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set letra
     *
     * @param string $letra
     *
     * @return Hino
     */
    public function setLetra($letra)
    {
        $this->letra = $letra;

        return $this;
    }

    /**
     * Get letra
     *
     * @return string
     */
    public function getLetra()
    {
        return $this->letra;
    }

    /**
     * Set tonalidade
     *
     * @param string $tonalidade
     *
     * @return Hino
     */
    public function setTonalidade($tonalidade)
    {
        $this->tonalidade = $tonalidade;

        return $this;
    }

    /**
     * Get tonalidade
     *
     * @return string
     */
    public function getTonalidade()
    {
        return $this->tonalidade;
    }

    /**
     * Set autor
     *
     * @param string $autor
     *
     * @return Hino
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get autor
     *
     * @return string
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set cadastro
     *
     * @param \DateTime $cadastro
     *
     * @return Hino
     */
    public function setCadastro($cadastro)
    {
        $this->cadastro = $cadastro;

        return $this;
    }

    /**
     * Get cadastro
     *
     * @return \DateTime
     */
    public function getCadastro()
    {
        return $this->cadastro;
    }

    /**
     * Set atualizacao
     *
     * @param \DateTime $atualizacao
     *
     * @return Hino
     */
    public function setAtualizacao($atualizacao)
    {
        $this->atualizacao = $atualizacao;

        return $this;
    }

    /**
     * Get atualizacao
     *
     * @return \DateTime
     */
    public function getAtualizacao()
    {
        return $this->atualizacao;
    }

    /**
     * Set ativo
     *
     * @param integer $ativo
     *
     * @return Hino
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;

        return $this;
    }

    /**
     * Get ativo
     *
     * @return int
     */
    public function getAtivo()
    {
        return $this->ativo;
    }
}

