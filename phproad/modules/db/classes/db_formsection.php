<?php

	/**
	 * Represents a form section. 
	 * Form sections have a title and description.
	 * Objects of this class are created by {@link Db_ActiveRecord::add_form_section() add_form_section()} method 
	 * the {@link Db_ActiveRecord} class.
	 * @documentable
	 * @author LemonStand eCommerce Inc.
	 * @package core.classes
	 */
	class Db_FormSection extends Db_FormElement
	{
		/**
		 * @var string Specifies the section title
		 * @documentable
		 */
		public $title;

		/**
		 * @var string Specifies the section description
		 * @documentable
		 */
		public $description;

		/**
		 * @var string Specifies the id for the html element the form section will be rendered in on the form.
		 * @documentable
		*/
		public $html_id;
		
		public function __construct($title, $description, $html_id = null)
		{
			$this->title = $title;
			$this->description = $description;
			$this->html_id = $html_id;
		}
	}

?>