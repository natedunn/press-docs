<?php

return [
  'Press Theme' => [
    'url' => 'docs/theme/about',
    'children' => [
      'About' => 'docs/theme/about',
      'Getting Started' => 'docs/theme/getting-started',
      'Components' => [
        'url' => 'docs/theme/components/about',
        'children' => [
          'Logo' => 'docs/theme/components/logo',
          'Storycard' => 'docs/theme/components/storycard',
          'Alert' => 'docs/theme/components/alert'
        ]
      ],
      'Templates' => 'docs/theme/templates',
      'Directives' => 'docs/theme/directives',
      'Deployment' => 'docs/theme/deployment'
    ]
  ],
  'Press CSS' => [
    'url' => 'docs/css/about',
    'children' => [
      'About' => 'docs/css/about'
    ]
  ]
];
