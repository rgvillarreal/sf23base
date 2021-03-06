<?php

/**
 * This file is part of the <name> project.
 *
 * (c) Rodrigo G. Villarreal <rodrigodj2000@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Application\Sonata\UserBundle\Entity;

use Sonata\UserBundle\Entity\BaseUser as BaseUser;

/**
 * This file has been generated by the Sonata EasyExtends bundle ( http://sonata-project.org/bundles/easy-extends )
 *
 * References :
 *   working with object : http://www.doctrine-project.org/projects/orm/2.0/docs/reference/working-with-objects/en
 *
 * @author Rodrigo G. Villarreal <rodrigodj2000@gmail.com>
 */
class User extends BaseUser
{
    /**
     * @var integer $id
     */
    protected $id;

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @var string $nombre
     */
    protected $nombre;
    
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
 
    public function getNombre()
    {
        return $this->nombre;
    }        
    
    /**
     * @var string $apellido
     */
    protected $apellido;
    
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }
 
    public function getApellido()
    {
        return $this->apellido;
    } 
    
    /**
     * @var string $name
     */
    protected $telefono;
    
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }
 
    public function getTelefono()
    {
        return $this->telefono;
    }     
}