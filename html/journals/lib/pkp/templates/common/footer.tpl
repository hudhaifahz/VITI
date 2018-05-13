{**
 * templates/common/footer.tpl
 *
 * Copyright (c) 2013-2016 Simon Fraser University Library
 * Copyright (c) 2000-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site footer.
 *
 *}
{if $displayCreativeCommons}
	{translate key="common.ccLicense"}
{/if}
</div><!-- content -->
</div><!-- main -->
</div><!-- body -->
</div><!-- container -->
<div class="w-section footer-section">
    <div class="copyright">© Vancouver International Trade Institute. 2015-2017</div>
</div>
{get_debug_info}
{if $enableDebugStats}{include file=$pqpTemplate}{/if}
</body>
</html>
