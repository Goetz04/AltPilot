import AjaxRequest from '@typo3/core/ajax/ajax-request.js';

const endpoint = TYPO3.settings.ajaxUrls['alt-tags'];

async function testAltTags() {

  // check if endpoint is there
  if (!endpoint) {
    console.error('Missing TYPO3 ajax route: alt-tags');
    return;
  }

  try {
    const response = await new AjaxRequest(endpoint).post({
      imagePath: 'fileadmin/test.jpg',
    });
    const data = await response.resolve();
    console.log('alt-tags response', data);
  } catch (error) {
    console.error('alt-tags request failed', error);
  }
}

testAltTags().then(r => console.log('testAltTags finished', r));
