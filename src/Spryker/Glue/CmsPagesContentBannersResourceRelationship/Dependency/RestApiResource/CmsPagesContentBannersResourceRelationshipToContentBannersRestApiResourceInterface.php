<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\CmsPagesContentBannersResourceRelationship\Dependency\RestApiResource;

interface CmsPagesContentBannersResourceRelationshipToContentBannersRestApiResourceInterface
{
    /**
     * @param array<string> $contentBannerKeys
     * @param string $localeName
     *
     * @return array<string, \Spryker\Glue\GlueApplication\Rest\JsonApi\RestResourceInterface>
     */
    public function getContentBannersByKeys(array $contentBannerKeys, string $localeName): array;
}
