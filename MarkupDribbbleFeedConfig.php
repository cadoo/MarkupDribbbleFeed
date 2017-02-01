<?php namespace ProcessWire;

/**
 * Dribbble Feed Config for Processwire
 * Copyright 2017 by Dusan Kitic
 * http://nvslbs.com
 *
 * ProcessWire 3.x, Copyright 2016 by Ryan Cramer
 * https://processwire.com
 *
 */

class MarkupDribbbleFeedConfig extends ModuleConfig {
	public function __construct() {
		$this->add(array(
			array(
				'name' => 'username',
				'label' => $this->_( 'Dribbble Username' ),
				'type' => 'text',
				'required' => true,
				'value' => '',
			),
			array(
				'name' => 'access_token',
				'label' => $this->_( 'Client Access Token' ),
				'type' => 'text',
				'required' => true,
				'value' => '',
				'description' => 'Create Dribbble application at https://dribbble.com/account/applications/new and then copy and paste Client Access Token here.',
			),
			array(
				'name' => 'per_page',
				'label' => $this->_( 'Number of Shots to Show' ),
				'type' => 'integer',
				'required' => true,
				'value' => '12',
			),
			array(
				'name' => 'team_account',
				'label' => $this->_( 'Team account?' ),
				'type' => 'checkbox',
				'required' => false,
				'value' => 0,
			),
			array(
				'name' => 'cache_enabled',
				'label' => $this->_( 'Enable Cache' ),
				'type' => 'checkbox',
				'required' => false,
				'value' => 1,
			),
			array(
				'name' => 'cache_time',
				'label' => $this->_( 'Cache Time in Seconds (3600)' ),
				'type' => 'integer',
				'required' => true,
				'value' => '3600',
			),
		));
	}
}
