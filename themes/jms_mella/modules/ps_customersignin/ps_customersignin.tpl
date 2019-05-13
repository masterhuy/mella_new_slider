{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<div id="_desktop_user_info">
	<div class="user-info menu-collapse btn-group compact-hidden type-1">
		{if $logged} 
			<a href="#login-1" class="account" title="{l s='View my customer account' d='Shop.Theme.CustomerAccount'}" data-toggle="collapse">      
				<i class="icon-user-1"></i>
		  	</a>
			<div id="login-1" class="collapse">
				<ul>
					<li>{$customerName}</li>
					<li><a href="{$link->getPageLink('my-account', true)}" title="{l s='View my customer account' d='Shop.Theme.CustomerAccount'}" class="account" rel="nofollow">{l s='My Account' d='Shop.Theme.CustomerAccount'} </a></li>		
					<li><a href="{$link->getPageLink('order', true)}" title="{l s='Checkout' d='Shop.Theme.CustomerAccount'}" class="account" rel="nofollow">{l s='Checkout' d='Shop.Theme.CustomerAccount'} </a></li>
					<li><a class="logout" href="{$logout_url}" rel="nofollow" >{l s='Log out' d='Shop.Theme.Actions'}</a></li>
				</ul>
			</div>
		{else}   
			<a href="#login" class="account" title="{l s='View my customer account' d='Shop.Theme.CustomerAccount'}" data-toggle="collapse">
				<i class="icon-user-1"></i>
			</a>
			<div id="login" class="collapse">
				<ul>
					<li><a href="{$link->getPageLink('my-account', true)}" title="{l s='View my customer account' d='Shop.Theme.CustomerAccount'}" class="account" rel="nofollow">{l s='My Account' d='Shop.Theme.CustomerAccount'} </a></li>		
					<li><a href="{$link->getPageLink('order', true)}" title="{l s='Checkout' d='Shop.Theme.CustomerAccount'}" class="account" rel="nofollow">{l s='Checkout' d='Shop.Theme.CustomerAccount'} </a></li>
					<li><a class="logout" href="{$link->getPageLink('my-account', true)}" title="{l s='Login' d='Shop.Theme.CustomerAccount'}" rel="nofollow" >{l s='Log In' d='Shop.Theme.Actions'}</a></li>
				</ul>
			</div>
		{/if}
	</div>
</div>

<div id="_desktop_user_info">
	<div class="user-info menu-collapse btn-group compact-hidden type-2">
		{if $logged} 
			<a href="#login-2" class="account" title="{l s='View my customer account' d='Shop.Theme.CustomerAccount'}" data-toggle="collapse">      
				<i class="fa fa-user"></i>
				{$customerName}
		  	</a>
			<div id="login-2" class="collapse">
				<ul>
					<li><a href="{$link->getPageLink('my-account', true)}" title="{l s='View my customer account' d='Shop.Theme.CustomerAccount'}" class="account" rel="nofollow">{l s='My Account' d='Shop.Theme.CustomerAccount'} </a></li>		
					<li><a href="{$link->getPageLink('order', true)}" title="{l s='Checkout' d='Shop.Theme.CustomerAccount'}" class="account" rel="nofollow">{l s='Checkout' d='Shop.Theme.CustomerAccount'} </a></li>
					<li><a class="logout" href="{$logout_url}" rel="nofollow" >{l s='Log out' d='Shop.Theme.Actions'}</a></li>
				</ul>
			</div>
		{else}   
			<a href="#login-2" class="account" title="{l s='View my customer account' d='Shop.Theme.CustomerAccount'}" data-toggle="collapse">
				<i class="fa fa-user"></i>
				{l s='My account' d='Shop.Theme.Actions'}
			</a>
			<div id="login-2" class="collapse">
				<ul>		
					<li><a href="{$link->getPageLink('order', true)}" title="{l s='Checkout' d='Shop.Theme.CustomerAccount'}" class="account" rel="nofollow">{l s='Checkout' d='Shop.Theme.CustomerAccount'} </a></li>
					<li><a class="logout" href="{$link->getPageLink('my-account', true)}" title="{l s='Login' d='Shop.Theme.CustomerAccount'}" rel="nofollow" >{l s='Log In' d='Shop.Theme.Actions'}</a></li>
				</ul>
			</div>
		{/if}
	</div>
</div>

