<?php

namespace HelioNetworks\FileManagerBundle\Form\Type;

use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\AbstractType;

class CreateFileRequestType extends AbstractType
{
	public function buildForm(FormBuilder $builder, array $options)
	{
		$builder->add('path');
	}

	public function getDefaultOptions(array $options)
	{
		return array(
			'data_class' => 'HelioNetworks\FileManagerBundle\Form\Model\FileRequest',
		);
	}

	public function getName()
	{
		return 'create_file_request';
	}
}