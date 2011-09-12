<?php
namespace TYPO3\FLOW3\AOP;

/*                                                                        *
 * This script belongs to the FLOW3 framework.                            *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License as published by the *
 * Free Software Foundation, either version 3 of the License, or (at your *
 * option) any later version.                                             *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser       *
 * General Public License for more details.                               *
 *                                                                        *
 * You should have received a copy of the GNU Lesser General Public       *
 * License along with the script.                                         *
 * If not, see http://www.gnu.org/licenses/lgpl.html                      *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

/**
 * Contract and marker interface for the AOP Proxy classes
 *
 * @author Robert Lemke <robert@typo3.org>
 */
interface ProxyInterface extends \TYPO3\FLOW3\Object\Proxy\ProxyInterface {

	/**
	 * Invokes the joinpoint - calls the target methods.
	 *
	 * @param \TYPO3\FLOW3\AOP\JoinPointInterface $joinPoint The join point
	 * @return mixed Result of the target (ie. original) method
	 */
	public function FLOW3_AOP_Proxy_invokeJoinPoint(\TYPO3\FLOW3\AOP\JoinPointInterface $joinPoint);

}

?>