<?php return array (
  'AD' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %REGION%\\n%COUNTRY%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'region',
    ),
    'region_name_type' => 'parish',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'AE' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city%\\n%country%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'AG' => 
  array (
    'require' => 
    array (
      0 => 'street',
    ),
    'format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'AM' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code%\\n%city%\\n%region%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%postal_code%\\n%city%\\n%region%\\n%country%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'AR' => 
  array (
    'format' => '%name%\\n%organization%\\n%STREET%\\n%POSTAL_CODE% %CITY%\\n%region%\\n%country%\\n%phone%',
    'region_name_type' => 'region',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'AS' => 
  array (
    'format' => '%NAME%\\n%ORGANIZATION%\\n%STREET%\\n%CITY% %REGION% %COUNTRY% %postal_code%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'region',
      3 => 'postal_code',
    ),
    'zip_name_type' => 'zip',
    'region_name_type' => 'region',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'AT' => 
  array (
    'format' => '%organization%\\n%name%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'AU' => 
  array (
    'format' => '%organization%\\n%name%\\n%street%\\n%CITY% %REGION% %COUNTRY% %postal_code%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'region',
      3 => 'postal_code',
    ),
    'region_name_type' => 'region',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'AX' => 
  array (
    'format' => '%organization%\\n%name%\\n%street%\\nAX-%postal_code% %city%\\n%country%\\nÅLAND',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'postprefix' => 'AX-',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'AZ' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\nAZ %postal_code% %city%\\n%country%\\n%phone%',
    'postprefix' => 'AZ ',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'BA' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'BB' => 
  array (
    'region_name_type' => 'parish',
    'format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'BD' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city% - %postal_code%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'BE' => 
  array (
    'format' => '%organization%\\n%name%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'BF' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'BG' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'BH' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city% %postal_code%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'BL' => 
  array (
    'format' => '%organization%\\n%name%\\n%STREET%\\n%postal_code% %CITY%\\n%COUNTRY%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'BM' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city% %postal_code%\\n%country%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'BN' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city% %postal_code%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'BR' => 
  array (
    'format' => '%organization%\\n%name%\\n%street%\\n%CITY%-%REGION%\\n%COUNTRY%\\n%postal_code%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'region',
      2 => 'city',
      3 => 'postal_code',
    ),
    'region_name_type' => 'region',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'BS' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city%, %region%\\n%country%\\n%phone%',
    'region_name_type' => 'island',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'BY' => 
  array (
    'format' => '%country%\\n%region%\\n%postal_code% %city% %street%\\n%organization%\\n%name%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'CA' => 
  array (
    'format' => '%NAME%\\n%ORGANIZATION%\\n%STREET%\\n%CITY% %REGION%, %COUNTRY% %POSTAL_CODE%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'region',
      3 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'CC' => 
  array (
    'format' => '%organization%\\n%name%\\n%street%\\n%CITY% %REGION% %COUNTRY% %postal_code%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'CD' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'CH' => 
  array (
    'format' => '%organization%\\n%name%\\n%street%\\nCH-%postal_code% %city%\\n%country%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'postprefix' => 'CH-',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'CI' => 
  array (
    'format' => '%name%\\n%organization% %street% %city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'CK' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city% %postal_code%\\n%country%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'CL' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%region%\\n%country%\\n%phone%',
    'region_name_type' => 'region',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'CN' => 
  array (
    'format' => '%postal_code%\\n%COUNTRY%\\n%REGION%%city%\\n%street%\\n%organization%\\n%name%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%, %city%\\n%REGION%, %COUNTRY% %postal_code%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'region',
      3 => 'postal_code',
    ),
    'has_disputed' => true,
    'format_charset' => 'GB2312',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
  ),
  'CO' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city%, %region%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'CR' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'CV' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%region%\\n%country%\\n%phone%',
    'region_name_type' => 'island',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'CX' => 
  array (
    'format' => '%organization%\\n%name%\\n%street%\\n%CITY% %REGION% %COUNTRY% %postal_code%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'CY' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'CZ' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'DE' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'DK' => 
  array (
    'format' => '%organization%\\n%name%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'DO' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'DZ' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'EC' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%POSTAL_CODE%\\n%CITY%\\n%COUNTRY%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'EE' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'EG' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city%\\n%region%\\n%country%\\n%postal_code%\\n%phone%',
    'direction' => 'rtl',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'ES' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %CITY% %REGION%\\n%COUNTRY%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'region',
      3 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'ET' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'FI' => 
  array (
    'format' => '%organization%\\n%name%\\n%street%\\nFI-%postal_code% %city%\\n%country%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'postprefix' => 'FI-',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'FK' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%\\n%POSTAL_CODE%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'FM' => 
  array (
    'format' => '%NAME%\\n%ORGANIZATION%\\n%STREET%\\n%CITY% %COUNTRY% %REGION% %postal_code%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'region',
      3 => 'postal_code',
    ),
    'zip_name_type' => 'zip',
    'region_name_type' => 'region',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'FO' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\nFO%postal_code% %city%\\n%country%',
    'postprefix' => 'FO',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'FR' => 
  array (
    'format' => '%organization%\\n%name%\\n%street%\\n%postal_code% %CITY%\\n%COUNTRY%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'GB' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%region%\\n%country%\\n%POSTAL_CODE%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'region_name_type' => 'county',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'GE' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'GF' => 
  array (
    'format' => '%organization%\\n%name%\\n%STREET%\\n%postal_code% %CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'GG' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%\\nGUERNSEY\\n%POSTAL_CODE%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'GI' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%country%',
    'require' => 
    array (
      0 => 'street',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'GL' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'GN' => 
  array (
    'format' => '%name%\\n%organization%\\n%postal_code% %street% %city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'GP' => 
  array (
    'format' => '%organization%\\n%name%\\n%STREET%\\n%postal_code% %CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'GR' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'GS' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%\\n%POSTAL_CODE%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'GT' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code%- %city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'GU' => 
  array (
    'format' => '%NAME%\\n%ORGANIZATION%\\n%STREET%\\n%CITY% %REGION% %COUNTRY% %postal_code%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'region',
      3 => 'postal_code',
    ),
    'zip_name_type' => 'zip',
    'region_name_type' => 'region',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'GW' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'HK' => 
  array (
    'format' => '%COUNTRY%\\n%REGION%\\n%street%\\n%organization%\\n%name%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%REGION%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'region',
    ),
    'region_name_type' => 'area',
    'format_charset' => 'Big5',
    'zip_name_type' => 'postal',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
  ),
  'HM' => 
  array (
    'format' => '%organization%\\n%name%\\n%street%\\n%CITY% %REGION% %COUNTRY% %postal_code%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'HN' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city%, %region%\\n%country%\\n%postal_code%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'region',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'HR' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\nHR-%postal_code% %city%\\n%country%\\n%phone%',
    'postprefix' => 'HR-',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'HT' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\nHT%postal_code% %city%\\n%country%\\n%phone%',
    'postprefix' => 'HT',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'HU' => 
  array (
    'format' => '%NAME%\\n%ORGANIZATION%\\n%CITY%\\n%STREET%\\n%COUNTRY%\\n%postal_code%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'ID' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city% %postal_code%\\n%region%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'IE' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city%\\n%region%\\n%country%\\n%phone%',
    'region_name_type' => 'county',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'IL' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city% %postal_code%\\n%country%\\n%phone%',
    'direction' => 'rtl',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'IM' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%\\n%POSTAL_CODE%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'IN' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city% %postal_code%\\n%region%\\n%country%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'region',
      3 => 'postal_code',
    ),
    'region_name_type' => 'region',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'IO' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%\\n%POSTAL_CODE%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'IQ' => 
  array (
    'format' => '%organization%\\n%name%\\n%street%\\n%CITY%, %REGION%\\n%COUNTRY%\\n%postal_code%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'region',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'IS' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'IT' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %CITY% %REGION%\\n%COUNTRY%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'region',
      3 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'JE' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%\\nJERSEY\\n%POSTAL_CODE%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'JM' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city%\\n%region%\\n%country%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'region',
    ),
    'region_name_type' => 'parish',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'JO' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city% %postal_code%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'JP' => 
  array (
    'format' => '〒%country%\\n%postal_code%\\n%REGION% %city%\\n%street%\\n%organization%\\n%name%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%city%, %REGION%\\n%COUNTRY%\\n%postal_code%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'region',
      3 => 'postal_code',
    ),
    'region_name_type' => 'prefecture',
    'format_charset' => 'ISO-2022-JP',
    'zip_name_type' => 'postal',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
  ),
  'KE' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city%\\n%country%\\n%postal_code%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'KG' => 
  array (
    'format' => '%postal_code% %country% %city% %street%\\n%organization%\\n%name%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'KH' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city% %postal_code%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'KI' => 
  array (
    'format' => '%NAME%\\n%ORGANIZATION%\\n%STREET%\\n%REGION%\\n%CITY%\\n%COUNTRY%\\n%phone%',
    'region_name_type' => 'island',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'KN' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city%, %region%\\n%country%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'region',
    ),
    'region_name_type' => 'island',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'KR' => 
  array (
    'format' => '%country%\\n%region% %city%\\n%street%\\n%organization%\\n%name%\\nSEOUL %POSTAL_CODE%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%city%\\n%region%\\n%country%\\nSEOUL %POSTAL_CODE%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'region',
      3 => 'postal_code',
    ),
    'region_name_type' => 'do_si',
    'format_charset' => 'EUC-KR',
    'zip_name_type' => 'postal',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
  ),
  'KW' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'KY' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%region%\\n%country%',
    'require' => 
    array (
      0 => 'street',
      1 => 'region',
    ),
    'region_name_type' => 'island',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'KZ' => 
  array (
    'format' => '%postal_code%\\n%country%\\n%region%\\n%city%\\n%street%\\n%organization%\\n%name%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'LA' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'LB' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city% %postal_code%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'LI' => 
  array (
    'format' => '%organization%\\n%name%\\n%street%\\nFL-%postal_code% %city%\\n%country%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'postprefix' => 'FL-',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'LK' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city%\\n%country%\\n%postal_code%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'LR' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'LS' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city% %postal_code%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'LT' => 
  array (
    'format' => '%organization%\\n%name%\\n%street%\\nLT-%postal_code% %city%\\n%country%\\n%phone%',
    'postprefix' => 'LT-',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'LU' => 
  array (
    'format' => '%organization%\\n%name%\\n%street%\\nL-%postal_code% %city%\\n%country%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'postprefix' => 'L-',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'LV' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city% %country%, %postal_code%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'MA' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'MC' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\nMC-%postal_code% %city%\\n%country%',
    'postprefix' => 'MC-',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'MD' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\nMD-%postal_code% %city%\\n%country%\\n%phone%',
    'postprefix' => 'MD-',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'ME' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'MF' => 
  array (
    'format' => '%organization%\\n%name%\\n%STREET%\\n%postal_code% %CITY%\\n%COUNTRY%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'MG' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'MH' => 
  array (
    'format' => '%NAME%\\n%ORGANIZATION%\\n%STREET%\\n%CITY% %COUNTRY% %REGION% %postal_code%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'region',
      3 => 'postal_code',
    ),
    'zip_name_type' => 'zip',
    'region_name_type' => 'region',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'MK' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'MN' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%region% %city%\\n%country%\\n%postal_code%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'MO' => 
  array (
    'format' => '%street%\\n%organization%\\n%name%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%country%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'MP' => 
  array (
    'format' => '%NAME%\\n%ORGANIZATION%\\n%STREET%\\n%CITY% %COUNTRY% %REGION% %postal_code%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'region',
      3 => 'postal_code',
    ),
    'zip_name_type' => 'zip',
    'region_name_type' => 'region',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'MQ' => 
  array (
    'format' => '%organization%\\n%name%\\n%STREET%\\n%postal_code% %CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'MT' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%CITY% %POSTAL_CODE%\\n%COUNTRY%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'MU' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%POSTAL_CODE%\\n%CITY%\\n%COUNTRY%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'MV' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city% %postal_code%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'MW' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'MX' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%POSTAL_CODE% %CITY%, %REGION%\\n%COUNTRY%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'region_name_type' => 'region',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'MY' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %CITY%, %REGION%\\n%COUNTRY%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'region_name_type' => 'region',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'MZ' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'NC' => 
  array (
    'format' => '%organization%\\n%name%\\n%STREET%\\n%postal_code% %CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'NE' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'NF' => 
  array (
    'format' => '%organization%\\n%name%\\n%street%\\n%CITY% %REGION% %postal_code%\\n%COUNTRY%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'NG' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%CITY% %postal_code%\\n%REGION%\\n%COUNTRY%\\n%phone%',
    'region_name_type' => 'region',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'NI' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code%\\n%CITY%, %REGION%\\n%COUNTRY%\\n%phone%',
    'region_name_type' => 'department',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'NL' => 
  array (
    'format' => '%organization%\\n%name%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'NO' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'NP' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city% %postal_code%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'NR' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%region%\\n%country%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'region',
    ),
    'region_name_type' => 'district',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'NZ' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city% %postal_code%\\n%country%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'OM' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code%\\n%city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'PA' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%REGION%\\n%COUNTRY%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'PF' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %CITY% %REGION%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'region',
      3 => 'postal_code',
    ),
    'region_name_type' => 'island',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'PG' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city% %postal_code% %region%\\n%country%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'region',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'PH' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%region%\\n%country%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'PK' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city%-%postal_code%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'PL' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'PM' => 
  array (
    'format' => '%organization%\\n%name%\\n%STREET%\\n%postal_code% %CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'PN' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%\\n%POSTAL_CODE%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'PR' => 
  array (
    'format' => '%NAME%\\n%ORGANIZATION%\\n%STREET%\\n%CITY% PR %postal_code%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'zip_name_type' => 'zip',
    'postprefix' => 'PR',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'PT' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'PW' => 
  array (
    'format' => '%NAME%\\n%ORGANIZATION%\\n%STREET%\\n%CITY% %COUNTRY% %REGION% %postal_code%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'region',
      3 => 'postal_code',
    ),
    'zip_name_type' => 'zip',
    'region_name_type' => 'region',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'PY' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'RE' => 
  array (
    'format' => '%organization%\\n%name%\\n%STREET%\\n%postal_code% %CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'RO' => 
  array (
    'format' => '%name%\\n%organization%\\n%STREET%\\n%postal_code% %CITY%\\n%COUNTRY%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'RS' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'RU' => 
  array (
    'format' => '%postal_code% %COUNTRY% %CITY%\\n%STREET%\\n%organization%\\n%name%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'SA' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city% %postal_code%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'SC' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city%\\n%REGION%\\n%COUNTRY%\\n%phone%',
    'region_name_type' => 'island',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'SE' => 
  array (
    'format' => '%organization%\\n%name%\\n%street%\\nSE-%postal_code% %city%\\n%country%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'postprefix' => 'SE-',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'SG' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\nSINGAPORE %postal_code%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'SH' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%\\n%POSTAL_CODE%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'SI' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\nSI- %postal_code% %city%\\n%country%\\n%phone%',
    'postprefix' => 'SI-',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'SJ' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'SK' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'SM' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'SN' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'SO' => 
  array (
    'format' => '%name%\\n%organization%\\n%STREET%\\n%CITY%, %REGION% %COUNTRY% %postal_code%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'region',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'SR' => 
  array (
    'format' => '%name%\\n%organization%\\n%STREET%\\n%city% %REGION%\\n%COUNTRY%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'ST' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'SV' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%POSTAL_CODE%-%CITY%\\n%REGION%\\n%COUNTRY%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'region',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'SZ' => 
  array (
    'format' => '%name%\\n%organization%\\n%STREET%\\n%CITY%\\n%COUNTRY%\\n%POSTAL_CODE%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'TC' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%\\n%POSTAL_CODE%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'TH' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city%\\n%REGION% %COUNTRY% %postal_code%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%city%\\n%REGION% %COUNTRY% %postal_code%\\n%phone%',
    'format_charset' => 'TIS-620',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
  ),
  'TJ' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'TM' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'TN' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'TR' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%/%region%\\n%country%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'TV' => 
  array (
    'format' => '%name%\\n%organization%\\n%STREET%\\n%CITY%\\n%REGION%\\n%COUNTRY%\\n%phone%',
    'region_name_type' => 'island',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'TW' => 
  array (
    'format' => '%postal_code%\\n%country%\\n%region%%city%\\n%street%\\n%organization%\\n%name%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%city%, %region% %country% %postal_code%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'region',
      3 => 'postal_code',
    ),
    'region_name_type' => 'county',
    'format_charset' => 'Big5',
    'zip_name_type' => 'postal',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
  ),
  'UA' => 
  array (
    'format' => '%postal_code% %country% %city%\\n%street%\\n%organization%\\n%name%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'UM' => 
  array (
    'format' => '%NAME%\\n%ORGANIZATION%\\n%STREET%\\n%CITY% %REGION% %COUNTRY% %postal_code%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'region',
    ),
    'zip_name_type' => 'zip',
    'region_name_type' => 'region',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'US' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%CITY% %REGION_CODE% %COUNTRY_ISO2% %postal_code%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'region',
      3 => 'postal_code',
    ),
    'zip_name_type' => 'zip',
    'region_name_type' => 'region',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'UY' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %CITY% %REGION%\\n%COUNTRY%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'UZ' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %CITY%\\n%REGION%\\n%COUNTRY%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'VA' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'VE' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%CITY% %postal_code%, %REGION%\\n%COUNTRY%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'region',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'VG' => 
  array (
    'require' => 
    array (
      0 => 'street',
    ),
    'format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'VI' => 
  array (
    'format' => '%NAME%\\n%ORGANIZATION%\\n%STREET%\\n%CITY% %REGION% %COUNTRY% %postal_code%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'region',
      3 => 'postal_code',
    ),
    'zip_name_type' => 'zip',
    'region_name_type' => 'region',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'VN' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city%\\n%region%\\n%country%\\n%phone%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%city%\\n%region%\\n%country%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'WF' => 
  array (
    'format' => '%organization%\\n%name%\\n%STREET%\\n%postal_code% %CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'YE' => 
  array (
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'YT' => 
  array (
    'format' => '%organization%\\n%name%\\n%STREET%\\n%postal_code% %CITY%\\n%COUNTRY%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'ZA' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%city%\\n%country%\\n%postal_code%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
      2 => 'postal_code',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
  'ZM' => 
  array (
    'format' => '%name%\\n%organization%\\n%street%\\n%postal_code% %city%\\n%country%\\n%phone%',
    'require' => 
    array (
      0 => 'street',
      1 => 'city',
    ),
    'latin_format' => '%name%\\n%organization%\\n%street%\\n%CITY%\\n%COUNTRY%',
    'zip_name_type' => 'postal',
    'region_name_type' => 'province',
    'direction' => 'ltr',
    'postprefix' => NULL,
    'has_disputed' => false,
    'format_charset' => 'UTF-8',
  ),
);