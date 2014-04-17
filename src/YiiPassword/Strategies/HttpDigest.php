<?php
/**
 * A Http Digest strategy used based on Http Digest authentification.
 * It is provided to allow systems using this standard to upgrade to a more
 * secure strategy.
 *
 * @author Arnaud Fabre
 * @package packages.Strategy
 */
namespace YiiPassword\Strategies;

use YiiPassword\Strategy;

class HttpDigest extends Strategy {
	/**
	 * The realm used for this strategy
	 * @var string
	 */
	public $realm;

	/**
	 * Encode a plain text password.
	 * @param string $password the plain text password to encode
	 * @return string the encoded password
	 */
	public function encode($password)
	{
		return md5($this->getUsername() . ':' . $this->realm . ':' . $password);
	}

}
