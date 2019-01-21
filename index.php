<?php
/**
 * Index
 *
 * Startscript for project
 *
 * @license Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 * @copyright Copyright © 2019-present Evertz-IT. All rights reserved.
 *
 * @link  http://evertz-it.de/
 *
 * @author  Florian Evertz
 *
 * @package  TwigTest
 * @category Test
 */

require_once 'vendor/autoload.php';

try {
    $loader = new Twig_Loader_Filesystem('templates');
} catch (Twig_Error_Loader $e) {
}
$twig = new Twig_Environment($loader);

try {
    echo $twig->render('base.twig', ['name' => 'Hallo Welt']);
} catch (Twig_Error_Loader $e) {
} catch (Twig_Error_Runtime $e) {
} catch (Twig_Error_Syntax $e) {
}