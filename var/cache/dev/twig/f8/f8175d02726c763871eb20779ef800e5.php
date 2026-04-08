<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* succes.html.twig */
class __TwigTemplate_80b1d95e87cdf693fa2f62dcfed7f58a extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "succes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "succes.html.twig"));

        // line 1
        yield "<link rel=\"stylesheet\" href=\"/css/style.css\">

<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Doctolibre</title>
</head>
<body>

    <div class=\"main\">   
        <u><b><h1>Page de connexion</h1></b></u>
        <u><h2>Site Doctolibre</h2></u>
    </div>  

    <div class=\"head\">   
        <p>Bienvenue cher / chère ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["login"]) || array_key_exists("login", $context) ? $context["login"] : (function () { throw new RuntimeError('Variable "login" does not exist.', 18, $this->source); })()), "html", null, true);
        yield "</p>
    </div>


</body>
</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "succes.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  67 => 18,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<link rel=\"stylesheet\" href=\"/css/style.css\">

<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Doctolibre</title>
</head>
<body>

    <div class=\"main\">   
        <u><b><h1>Page de connexion</h1></b></u>
        <u><h2>Site Doctolibre</h2></u>
    </div>  

    <div class=\"head\">   
        <p>Bienvenue cher / chère {{ login }}</p>
    </div>


</body>
</html>

", "succes.html.twig", "/home/lucilegl/Coding/Doctolibre/templates/succes.html.twig");
    }
}
