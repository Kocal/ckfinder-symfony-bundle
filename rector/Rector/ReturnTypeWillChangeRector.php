<?php

namespace CKSource\Bundle\CKFinderBundle\Rector\Rector;

use PhpParser\Node;
use Rector\BetterPhpDocParser\PhpDocInfo\PhpDocInfoFactory;
use Rector\Core\Application\ChangedNodeScopeRefresher;
use Rector\Core\Configuration\CurrentNodeProvider;
use Rector\Core\Configuration\Option;
use Rector\Core\Console\Output\RectorOutputStyle;
use Rector\Core\Contract\Rector\AllowEmptyConfigurableRectorInterface;
use Rector\Core\Exclusion\ExclusionManager;
use Rector\Core\FileSystem\FilePathHelper;
use Rector\Core\Logging\CurrentRectorProvider;
use Rector\Core\NodeDecorator\CreatedByRuleDecorator;
use Rector\Core\PhpParser\Comparing\NodeComparator;
use Rector\Core\PhpParser\Node\BetterNodeFinder;
use Rector\Core\PhpParser\Node\NodeFactory;
use Rector\Core\PhpParser\Node\Value\ValueResolver;
use Rector\Core\ProcessAnalyzer\RectifiedAnalyzer;
use Rector\Core\Provider\CurrentFileProvider;
use Rector\Core\Rector\AbstractRector;
use Rector\Core\Reflection\ReflectionResolver;
use Rector\Core\ValueObject\PhpVersion;
use Rector\NodeNameResolver\NodeNameResolver;
use Rector\NodeRemoval\NodeRemover;
use Rector\NodeTypeResolver\NodeTypeResolver;
use Rector\Php80\NodeAnalyzer\PhpAttributeAnalyzer;
use Rector\PhpAttribute\NodeFactory\PhpAttributeGroupFactory;
use Rector\PhpDocParser\NodeTraverser\SimpleCallableNodeTraverser;
use Rector\PostRector\Collector\NodesToRemoveCollector;
use Rector\Skipper\Skipper\Skipper;
use Rector\StaticTypeMapper\StaticTypeMapper;
use Rector\VersionBonding\Contract\MinPhpVersionInterface;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;

class ReturnTypeWillChangeRector extends AbstractRector implements AllowEmptyConfigurableRectorInterface, MinPhpVersionInterface
{
    private \Rector\Transform\Rector\ClassMethod\ReturnTypeWillChangeRector $decorated;

    public function __construct(PhpAttributeAnalyzer $phpAttributeAnalyzer, PhpAttributeGroupFactory $phpAttributeGroupFactory, ReflectionResolver $reflectionResolver)
    {
        $this->decorated = new \Rector\Transform\Rector\ClassMethod\ReturnTypeWillChangeRector(
            $phpAttributeAnalyzer,
            $phpAttributeGroupFactory,
            $reflectionResolver,
        );
    }

    public function autowire(NodesToRemoveCollector $nodesToRemoveCollector, NodeRemover $nodeRemover, NodeNameResolver $nodeNameResolver, NodeTypeResolver $nodeTypeResolver, SimpleCallableNodeTraverser $simpleCallableNodeTraverser, NodeFactory $nodeFactory, PhpDocInfoFactory $phpDocInfoFactory, ExclusionManager $exclusionManager, StaticTypeMapper $staticTypeMapper, CurrentRectorProvider $currentRectorProvider, CurrentNodeProvider $currentNodeProvider, Skipper $skipper, ValueResolver $valueResolver, BetterNodeFinder $betterNodeFinder, NodeComparator $nodeComparator, CurrentFileProvider $currentFileProvider, RectifiedAnalyzer $rectifiedAnalyzer, CreatedByRuleDecorator $createdByRuleDecorator, ChangedNodeScopeRefresher $changedNodeScopeRefresher, RectorOutputStyle $rectorOutputStyle, FilePathHelper $filePathHelper): void
    {
        parent::autowire(...func_get_args());
        $this->decorated->autowire(...func_get_args());
    }

    public function configure(array $configuration): void
    {
        $this->decorated->configure($configuration);
    }

    public function getRuleDefinition(): RuleDefinition
    {
        return $this->decorated->getRuleDefinition();
    }

    public function provideMinPhpVersion(): int
    {
        // #[ReturnTypeWillChange] can be added before PHP 8.1
        return PhpVersion::PHP_80;
    }

    public function getNodeTypes(): array
    {
        return $this->decorated->getNodeTypes();
    }

    public function refactor(Node $node)
    {
        return $this->decorated->refactor($node);
    }
}