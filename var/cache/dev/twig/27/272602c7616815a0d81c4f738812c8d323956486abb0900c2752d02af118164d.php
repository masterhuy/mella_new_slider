<?php

/* @Product/ProductPage/Forms/form_seo.html.twig */
class __TwigTemplate_a49073a1d6589866fc0f9f9abe9ea285c2d42cbcc7ba195297bb743b0fcafab1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'product_catalog_tool_serp' => array($this, 'block_product_catalog_tool_serp'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_seo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_seo.html.twig"));

        // line 25
        echo "<div class=\"col-md-12\">

  <h2>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search Engine Optimization", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
  <p class=\"subtitle\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Improve your ranking and how your product page will appear in search engines results.", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>

  ";
        // line 30
        $this->displayBlock('product_catalog_tool_serp', $context, $blocks);
        // line 35
        echo "  
  <div class=\"row\">
    <div class=\"col-md-9\">
      <fieldset class=\"form-group\">
        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? $this->getContext($context, "seoForm")), "meta_title", array()), 'label');
        echo "
        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? $this->getContext($context, "seoForm")), "meta_title", array()), 'errors');
        echo "
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? $this->getContext($context, "seoForm")), "meta_title", array()), 'widget');
        echo "
      </fieldset>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-9\">
      <fieldset class=\"form-group\">
        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? $this->getContext($context, "seoForm")), "meta_description", array()), 'label');
        echo "
        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? $this->getContext($context, "seoForm")), "meta_description", array()), 'errors');
        echo "
        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? $this->getContext($context, "seoForm")), "meta_description", array()), 'widget');
        echo "
      </fieldset>
    </div>
  </div>
  <fieldset class=\"form-group\">
    <label class=\"form-control-label\">
      ";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["seoForm"] ?? $this->getContext($context, "seoForm")), "link_rewrite", array()), "vars", array()), "label", array()), "html", null, true);
        echo "
      <span class=\"help-box\" data-toggle=\"popover\"
        data-content=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This is the human-readable URL, as generated from the product's name. You can change it if you want.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
    </label>
    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? $this->getContext($context, "seoForm")), "link_rewrite", array()), 'errors');
        echo "
    <div class=\"row\">
      <div class=\"col-md-7\">
        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? $this->getContext($context, "seoForm")), "link_rewrite", array()), 'widget');
        echo "
      </div>
      <div class=\"col-md-2\">
        <button type=\"button\" class=\"btn btn-block btn-outline-secondary\" id=\"seo-url-regenerate\">";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset URL", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </fieldset>

  <div class=\"row\">
    <div class=\"col-md-9\">
      <div class=\"alert alert-info\" role=\"alert\">
        <p class=\"alert-text\">
          ";
        // line 76
        if (($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_REWRITING_SETTINGS") == 0)) {
            // line 77
            echo "            <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Friendly URLs are currently disabled.", array(), "Admin.Catalog.Notification"), "html", null, true);
            echo "</strong>
            ";
            // line 78
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To enable it, go to [1]SEO and URLs[/1]", array(), "Admin.Catalog.Notification"), array("[1]" => (("<a href=\"" . $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminMeta")) . "#meta_fieldset_general\">"), "[/1]" => "</a>"));
            echo "
          ";
        } else {
            // line 80
            echo "            <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Friendly URLs are currently enabled.", array(), "Admin.Catalog.Notification"), "html", null, true);
            echo "</strong>
            ";
            // line 81
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To disable it, go to [1]SEO and URLs[/1]", array(), "Admin.Catalog.Notification"), array("[1]" => (("<a href=\"" . $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminMeta")) . "#meta_fieldset_general\">"), "[/1]" => "</a>"));
            echo "
          ";
        }
        // line 83
        echo "        </p>
        <p class=\"alert-text\">
          ";
        // line 85
        if (($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_FORCE_FRIENDLY_PRODUCT") == 1)) {
            // line 86
            echo "            <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The \"Force update of friendly URL\" option is currently enabled.", array(), "Admin.Catalog.Notification"), "html", null, true);
            echo "</strong>
            ";
            // line 88
            echo "            ";
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To disable it, go to [1]Product Settings[/1]", array(), "Admin.Catalog.Notification"), array("[1]" => (("<a href=\"" . $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminPPreferences")) . "#configuration_fieldset_products\">"), "[/1]" => "</a>"));
            echo "
          ";
        }
        // line 90
        echo "        </p>
      </div>
    </div>
  </div>

  <h2 class=\"mt-4\">
    ";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Redirection page", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
    <span class=\"help-box\" data-toggle=\"popover\"
      data-content=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("When your product is disabled, choose to which page you’d like to redirect the customers visiting its page by typing the product or category name.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
  </h2>

  <div class=\"row\">

    <div class=\"col-md-4\">
      <fieldset class=\"form-group\">
        <label class=\"form-control-label\">";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["seoForm"] ?? $this->getContext($context, "seoForm")), "redirect_type", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
        ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? $this->getContext($context, "seoForm")), "redirect_type", array()), 'errors');
        echo "
        ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? $this->getContext($context, "seoForm")), "redirect_type", array()), 'widget');
        echo "
      </fieldset>
    </div>

    <div class=\"col-md-5\" id=\"id-product-redirected\">
      <fieldset class=\"form-group\">
        <label class=\"form-control-label\">";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["seoForm"] ?? $this->getContext($context, "seoForm")), "id_type_redirected", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>
        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? $this->getContext($context, "seoForm")), "id_type_redirected", array()), 'errors');
        echo "
        ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["seoForm"] ?? $this->getContext($context, "seoForm")), "id_type_redirected", array()), 'widget');
        echo "
      </fieldset>

    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-md-9\">
      <div class=\"alert alert-info\" role=\"alert\">
        <p class=\"alert-text\">
          ";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No redirection (404) = Do not redirect anywhere and display a 404 \"Not Found\" page.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "<br>
          ";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Permanent redirection (301) = Permanently display another product or category instead.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "<br>
          ";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Temporary redirection (302) = Temporarily display another product or category instead.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "
        </p>
      </div>
    </div>
  </div>

  ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["seoForm"] ?? $this->getContext($context, "seoForm")), 'rest');
        echo "

  ";
        // line 134
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsSeoStepBottom", array("id_product" => ($context["productId"] ?? $this->getContext($context, "productId"))));
        echo "
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_product_catalog_tool_serp($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_catalog_tool_serp"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "product_catalog_tool_serp"));

        // line 31
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Here is a preview of your search engine result, play with it!", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>
    ";
        // line 33
        echo "    <div id=\"serp-app\"></div>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Forms/form_seo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 33,  260 => 31,  251 => 30,  238 => 134,  233 => 132,  224 => 126,  220 => 125,  216 => 124,  204 => 115,  200 => 114,  196 => 113,  187 => 107,  183 => 106,  179 => 105,  169 => 98,  164 => 96,  156 => 90,  150 => 88,  145 => 86,  143 => 85,  139 => 83,  134 => 81,  129 => 80,  124 => 78,  119 => 77,  117 => 76,  105 => 67,  99 => 64,  93 => 61,  88 => 59,  83 => 57,  74 => 51,  70 => 50,  66 => 49,  55 => 41,  51 => 40,  47 => 39,  41 => 35,  39 => 30,  34 => 28,  30 => 27,  26 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
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
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
<div class=\"col-md-12\">

  <h2>{{ 'Search Engine Optimization'|trans({}, 'Admin.Catalog.Feature') }}</h2>
  <p class=\"subtitle\">{{ 'Improve your ranking and how your product page will appear in search engines results.'|trans({}, 'Admin.Catalog.Feature') }}</p>

  {% block product_catalog_tool_serp %}
    <p>{{ \"Here is a preview of your search engine result, play with it!\"|trans({}, 'Admin.Catalog.Feature') }}</p>
    {# Div targetted by the SERP component in VueJs. It displays a Google search result preview. #}
    <div id=\"serp-app\"></div>
  {% endblock %}
  
  <div class=\"row\">
    <div class=\"col-md-9\">
      <fieldset class=\"form-group\">
        {{ form_label(seoForm.meta_title) }}
        {{ form_errors(seoForm.meta_title) }}
        {{ form_widget(seoForm.meta_title) }}
      </fieldset>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-9\">
      <fieldset class=\"form-group\">
        {{ form_label(seoForm.meta_description) }}
        {{ form_errors(seoForm.meta_description) }}
        {{ form_widget(seoForm.meta_description) }}
      </fieldset>
    </div>
  </div>
  <fieldset class=\"form-group\">
    <label class=\"form-control-label\">
      {{ seoForm.link_rewrite.vars.label }}
      <span class=\"help-box\" data-toggle=\"popover\"
        data-content=\"{{ \"This is the human-readable URL, as generated from the product's name. You can change it if you want.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
    </label>
    {{ form_errors(seoForm.link_rewrite) }}
    <div class=\"row\">
      <div class=\"col-md-7\">
        {{ form_widget(seoForm.link_rewrite) }}
      </div>
      <div class=\"col-md-2\">
        <button type=\"button\" class=\"btn btn-block btn-outline-secondary\" id=\"seo-url-regenerate\">{{ 'Reset URL'|trans({}, 'Admin.Catalog.Feature') }}</button>
      </div>
    </div>
  </fieldset>

  <div class=\"row\">
    <div class=\"col-md-9\">
      <div class=\"alert alert-info\" role=\"alert\">
        <p class=\"alert-text\">
          {% if 'PS_REWRITING_SETTINGS'|configuration == 0 %}
            <strong>{{ 'Friendly URLs are currently disabled.'|trans({}, 'Admin.Catalog.Notification') }}</strong>
            {{ 'To enable it, go to [1]SEO and URLs[/1]'|trans({}, 'Admin.Catalog.Notification')|replace({'[1]': '<a href=\"' ~ getAdminLink(\"AdminMeta\") ~ '#meta_fieldset_general\">', '[/1]': '</a>'})|raw }}
          {% else %}
            <strong>{{ 'Friendly URLs are currently enabled.'|trans({}, 'Admin.Catalog.Notification') }}</strong>
            {{ 'To disable it, go to [1]SEO and URLs[/1]'|trans({}, 'Admin.Catalog.Notification')|replace({'[1]': '<a href=\"' ~ getAdminLink(\"AdminMeta\") ~ '#meta_fieldset_general\">', '[/1]': '</a>'})|raw }}
          {% endif %}
        </p>
        <p class=\"alert-text\">
          {% if 'PS_FORCE_FRIENDLY_PRODUCT'|configuration == 1 %}
            <strong>{{ 'The \"Force update of friendly URL\" option is currently enabled.'|trans({}, 'Admin.Catalog.Notification') }}</strong>
            {# \"It\" refers to the option \"Force update of friendly URL\" #}
            {{ 'To disable it, go to [1]Product Settings[/1]'|trans({}, 'Admin.Catalog.Notification')|replace({'[1]': '<a href=\"' ~ getAdminLink(\"AdminPPreferences\") ~ '#configuration_fieldset_products\">', '[/1]': '</a>'})|raw }}
          {% endif %}
        </p>
      </div>
    </div>
  </div>

  <h2 class=\"mt-4\">
    {{ 'Redirection page'|trans({}, 'Admin.Catalog.Feature') }}
    <span class=\"help-box\" data-toggle=\"popover\"
      data-content=\"{{ \"When your product is disabled, choose to which page you’d like to redirect the customers visiting its page by typing the product or category name.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
  </h2>

  <div class=\"row\">

    <div class=\"col-md-4\">
      <fieldset class=\"form-group\">
        <label class=\"form-control-label\">{{ seoForm.redirect_type.vars.label }}</label>
        {{ form_errors(seoForm.redirect_type) }}
        {{ form_widget(seoForm.redirect_type) }}
      </fieldset>
    </div>

    <div class=\"col-md-5\" id=\"id-product-redirected\">
      <fieldset class=\"form-group\">
        <label class=\"form-control-label\">{{ seoForm.id_type_redirected.vars.label }}</label>
        {{ form_errors(seoForm.id_type_redirected) }}
        {{ form_widget(seoForm.id_type_redirected) }}
      </fieldset>

    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-md-9\">
      <div class=\"alert alert-info\" role=\"alert\">
        <p class=\"alert-text\">
          {{ 'No redirection (404) = Do not redirect anywhere and display a 404 \"Not Found\" page.'|trans({}, 'Admin.Catalog.Help') }}<br>
          {{ 'Permanent redirection (301) = Permanently display another product or category instead.'|trans({}, 'Admin.Catalog.Help') }}<br>
          {{ 'Temporary redirection (302) = Temporarily display another product or category instead.'|trans({}, 'Admin.Catalog.Help') }}
        </p>
      </div>
    </div>
  </div>

  {{ form_rest(seoForm) }}

  {{ renderhook('displayAdminProductsSeoStepBottom', { 'id_product': productId }) }}
</div>
", "@Product/ProductPage/Forms/form_seo.html.twig", "D:\\xamppp\\htdocs\\jms_mella\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\ProductPage\\Forms\\form_seo.html.twig");
    }
}
