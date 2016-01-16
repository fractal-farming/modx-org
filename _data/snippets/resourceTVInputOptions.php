id: 70
name: resourceTVInputOptions
description: 'Generates input option values that can be used in TV''s, for creating resource selectors.'
category: f_resources
properties: 'a:0:{}'

-----

$parents = $modx->getOption('parents',$scriptProperties,true);

$output = $modx->runSnippet('getResources', (array(
    'parents' => $parents,
    'showHidden' => 1,
    'showUnpublished' => 1,
    'limit' => '99',
    'sortBy' => 'menuindex',
    'sortDir' => 'ASC',
    'tpl' => '@INLINE [[+pagetitle]]==[[+id]]',
    'outputSeparator' => '||'
)
));

return $output;