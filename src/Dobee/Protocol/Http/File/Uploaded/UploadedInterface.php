<?php
/**
 * Created by PhpStorm.
 * User: janhuang
 * Date: 15/6/13
 * Time: 下午12:15
 * Github: https://www.github.com/janhuang 
 * Coding: https://www.coding.net/janhuang
 * SegmentFault: http://segmentfault.com/u/janhuang
 * Blog: http://segmentfault.com/blog/janhuang
 * Gmail: bboyjanhuang@gmail.com
 */

namespace Dobee\Protocol\Http\File\Uploaded;

/**
 * Interface UploadedInterface
 *
 * @package Dobee\Protocol\Http\File\Uploaded
 */
interface UploadedInterface
{
    /**
     * @param array $config
     */
    public function __construct(array $config);

    /**
     * @return bool
     */
    public function upload();

    /**
     * @return array
     */
    public function getUploadInfo();

    /**
     * @return array
     */
    public function getErrorInfo();

    /**
     * @return bool
     */
    public function verify();
}