<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arTemplateParameters = array(
	"SHOW_ANGLE" => array(
		"NAME" => GetMessage("CPT_BCSL_VIEW_MODE"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
    "SKIP_SECTION" => array(
        "NAME" => GetMessage("CPT_SKIP_CATEGORY"),
        "TYPE" => "LIST",
    ),
);