<?php
/**
 * Tools
 *
 * Copyright 2011 by Romain Tripault // Melting Media <romain@melting-media.com>
 *
 * Tools is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Tools is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Tools; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package tools
 */
/**
 * Properties for the Tools snippet.
 *
 * @package tools
 * @subpackage build
 */
$properties = array(
    array(
        'name' => 'tElementClass',
        'desc' => 'Object class (modSnippet or modChunk currently supported)',
        'type' => 'list',
        'options' => array(
            array('name' => 'Snippet','modSnippet'),
            array('name' => 'Chunk','modChunk'),
        ),
        'value' => 'modSnippet',
        //'lexicon' => 'tools:properties',
    ),
    array(
        'name' => 'tElement',
        'desc' => 'Snippet of chunk name',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        //'lexicon' => 'tools:properties',
    ),
);

return $properties;