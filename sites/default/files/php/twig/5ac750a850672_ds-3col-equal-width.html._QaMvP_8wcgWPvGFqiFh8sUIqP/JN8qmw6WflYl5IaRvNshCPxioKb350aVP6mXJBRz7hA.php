<?php

/* modules/ds/templates/ds-3col-equal-width.html.twig */
class __TwigTemplate_2418810f7d4f8ed1ae299c002faa927fc567b038c56f82e46c83ebc157a2cd9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 20
        echo "<";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["outer_wrapper"] ?? null), "html", null, true));
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "ds-3col-equal", 1 => "clearfix"), "method"), "html", null, true));
        echo ">

  ";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_suffix"] ?? null), "contextual_links", array()), "html", null, true));
        echo "

  <";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["left_wrapper"] ?? null), "html", null, true));
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["left_attributes"] ?? null), "addClass", array(0 => "group-left"), "method"), "html", null, true));
        echo ">
    ";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["left"] ?? null), "html", null, true));
        echo "
  </";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["left_wrapper"] ?? null), "html", null, true));
        echo ">

  <";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["middle_wrapper"] ?? null), "html", null, true));
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["middle_attributes"] ?? null), "addClass", array(0 => "group-middle"), "method"), "html", null, true));
        echo ">
    ";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["middle"] ?? null), "html", null, true));
        echo "
  </";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["middle_wrapper"] ?? null), "html", null, true));
        echo ">

  <";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["right_wrapper"] ?? null), "html", null, true));
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["right_attributes"] ?? null), "addClass", array(0 => "group-right"), "method"), "html", null, true));
        echo ">
    ";
        // line 33
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["right"] ?? null), "html", null, true));
        echo "
  </";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["right_wrapper"] ?? null), "html", null, true));
        echo ">

</";
        // line 36
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["outer_wrapper"] ?? null), "html", null, true));
        echo ">
";
    }

    public function getTemplateName()
    {
        return "modules/ds/templates/ds-3col-equal-width.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 36,  92 => 34,  88 => 33,  83 => 32,  78 => 30,  74 => 29,  69 => 28,  64 => 26,  60 => 25,  55 => 24,  50 => 22,  43 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Display Suite 3 column template.
 *
 * Available variables:
 * - outer_wrapper: outer wrapper element
 * - left_wrapper: wrapper element around left region
 * - middle_wrapper: wrapper element around middle region
 * - right_wrapper: wrapper element around right region
 * - attributes: layout attributes
 * - left_attributes: attributes for left region
 * - middle_attributes: attributes for middle region
 * - right_attributes: attributes for right region
 * - left: content of left region
 * - middle: content of middle region
 * - right: content of right region
 */
#}
<{{ outer_wrapper }}{{ attributes.addClass('ds-3col-equal', 'clearfix') }}>

  {{ title_suffix.contextual_links }}

  <{{ left_wrapper }}{{ left_attributes.addClass('group-left') }}>
    {{ left }}
  </{{ left_wrapper }}>

  <{{ middle_wrapper }}{{ middle_attributes.addClass('group-middle') }}>
    {{ middle }}
  </{{ middle_wrapper }}>

  <{{ right_wrapper }}{{ right_attributes.addClass('group-right') }}>
    {{ right }}
  </{{ right_wrapper }}>

</{{ outer_wrapper }}>
", "modules/ds/templates/ds-3col-equal-width.html.twig", "/var/www/html/drupal-8/modules/ds/templates/ds-3col-equal-width.html.twig");
    }
}
