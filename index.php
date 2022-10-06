<style type="text/css">
	html, body, div, h1 {
      font-family: nikosh;
    }

    h1 {
	   font-family: nikosh;
	   color: transparent;
	   white-space: pre;
	   cursor: text;
	   transform-origin: 0% 0%;
	 }
</style>

<?php

require_once __DIR__ . '/vendor/autoload.php';

$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];

$mpdf = new \Mpdf\Mpdf([
		'fontdata' => $fontData + [ // lowercase letters only in font key
        'nikosh' => [
            'R' => 'Nikosh.ttf',
            'I' => 'Nikosh.ttf',
            'useOTL' => 0xFF,
        	'useKashida' => 75
        ]
    ],
    'default_font' => 'nikosh',
    'mode' => 'utf-8'
]
);

$mpdf->WriteHTML('<div style="font-family:nikosh">যাদের ডাউনলোড করতে সমস্যা হচ্ছে তাদের জন্য

ডাউনলোড কোন প্রবলেম নেই তাও অনেকই ডাউনলোড করতে পারেনা তাদের জন্য এইটা যদি করুন ডাউনলোড করতে সমস্যা হচ্ছে তারা তাদের Email id আমাদের সাথে শেয়ার করুন। 24hr মধ্যে ফন্ট জিপ ফাইলটা শেয়ার করে দেওয়া হবে আপনার Email id তে।

Impotent Note:- আপনার Email id আমরা স্টোরে করে রাখবেনা আপনাকে ফন্ট জিপ ফাইলটা শেয়ার করে অটোমেটিক ডিলিট হয়ে যাবে। আমাদের এই Email id  sharezip@bengalifont.com থেকে আপনাদের ফন্ট জিপ ফাইল শেয়ার করবে।

কীভাবে Email id শেয়ার করবে?

যে ফন্টটি ডাউনলোড করার সময় সমস্যা হবে সেই পোস্টটি নিচে কমেন্ট বাক্স দেখতে পাবেন সেই কমেন্ট বাক্সে Email id বাক্সে দিতে হবে।

আমাদের Email id অন্য কোন সমস্যার জন্য বিজ্ঞান</div>');
$mpdf->Output();