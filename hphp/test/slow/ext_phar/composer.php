#!/usr/bin/env php
<?php
/*
 * This file is part of Composer.
 *
 * (c) Nils Adermann <naderman@naderman.de>
 *     Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view
 * the license that is located at the bottom of this file.
 */

Phar::mapPhar('composer.phar');
define('COMPOSER_DEV_WARNING_TIME', 1380296886);
require 'phar://composer.phar/bin/composer';

__HALT_COMPILER(); ?>
8b  1         composer.phar       src/bootstrap.php�  �R�  ��2��         src/Composer/IO/ConsoleIO.php  �R  �a�q�         src/Composer/IO/NullIO.php%  �R%  ~`��         src/Composer/IO/IOInterface.php�  �R�  A&�˶         src/Composer/IO/BaseIO.php�  �R�  k+�]�         src/Composer/IO/BufferIO.php+  �R+  ]��      )   src/Composer/Command/RunScriptCommand.phpk  �Rk   �߶      (   src/Composer/Command/DiagnoseCommand.php'  �R'  ģ
��      '   src/Composer/Command/ArchiveCommand.php{  �R{  oқ|�          src/Composer/Command/Command.php�  �R�  �L�v�      -   src/Composer/Command/CreateProjectCommand.phph,  �Rh,  W�ʶ      %   src/Composer/Command/AboutCommand.php�  �R�  �M�*�      $   src/Composer/Command/ShowCommand.php+  �R+  %�5�      &   src/Composer/Command/UpdateCommand.php�  �R�  3��      &   src/Composer/Command/ConfigCommand.php�'  �R�'  5Xq�      '   src/Composer/Command/InstallCommand.php�  �R�  ����      (   src/Composer/Command/ValidateCommand.phpG  �RG  �;r�      '   src/Composer/Command/DependsCommand.phpo	  �Ro	  T�.r�      &   src/Composer/Command/SearchCommand.php]  �R]  �7�2�      *   src/Composer/Command/SelfUpdateCommand.phpt	  �Rt	  �K�
�      (   src/Composer/Command/LicensesCommand.php�	  �R�	  ��nz�      '   src/Composer/Command/RequireCommand.php  �R  �U�$�      ,   src/Composer/Command/DumpAutoloadCommand.phpy  �Ry  R-=Ҷ      &   src/Composer/Command/GlobalCommand.php�  �R�  ��� �      ,   src/Composer/Command/Helper/DialogHelper.php�  �R�  ���&�      &   src/Composer/Command/StatusCommand.php�  �R�  w�tR�      $   src/Composer/Command/InitCommand.php;1  �R;1  ��T��      )   src/Composer/Downloader/VcsDownloader.phpM  �RM  -E&ʶ      *   src/Composer/Downloader/FileDownloader.php�  �R�  ?�[�      )   src/Composer/Downloader/SvnDownloader.phpx  �Rx  �N[�      0   src/Composer/Downloader/PearPackageExtractor.phpe  �Re  סP��      +   src/Composer/Downloader/DownloadManager.php�  �R�  ��Ŷ      /   src/Composer/Downloader/DownloaderInterface.php�  �R�  gs!l�      .   src/Composer/Downloader/TransportException.php�   �R�   �8͊�      *   src/Composer/Downloader/PharDownloader.php�   �R�   ���      )   src/Composer/Downloader/TarDownloader.php�   �R�   ͒X?�      (   src/Composer/Downloader/HgDownloader.php$  �R$  �c��      1   src/Composer/Downloader/ChangeReportInterface.php�   �R�   �ਿ�      -   src/Composer/Downloader/ArchiveDownloader.php�  �R�  ��|��      /   src/Composer/Downloader/FilesystemException.php  �R  ]T���      )   src/Composer/Downloader/ZipDownloader.php"
  �R"
  ���3�      )   src/Composer/Downloader/GitDownloader.php�2  �R�2  Ӿ��      6   src/Composer/Repository/InvalidRepositoryException.phpn   �Rn   ��똶      +   src/Composer/Repository/ArrayRepository.php  �R  k�b�      0   src/Composer/Repository/FilesystemRepository.php�  �R�  �Y�z�      7   src/Composer/Repository/WritableRepositoryInterface.php�  �R�  �/s�      *   src/Composer/Repository/PearRepository.php  �R  b�E��      -   src/Composer/Repository/RepositoryManager.php�  �R�  r�_��      3   src/Composer/Repository/WritableArrayRepository.php  �R  �G*�      ,   src/Composer/Repository/Vcs/GitHubDriver.phpf"  �Rf"  �7�8�      2   src/Composer/Repository/Vcs/GitBitbucketDriver.php�  �R�  ��DѶ      )   src/Composer/Repository/Vcs/GitDriver.php�  �R�  b��¶      )   src/Composer/Repository/Vcs/SvnDriver.php  �R  �@��      2   src/Composer/Repository/Vcs/VcsDriverInterface.phpC  �RC  �F���      (   src/Composer/Repository/Vcs/HgDriver.php�  �R�  M�A�      )   src/Composer/Repository/Vcs/VcsDriver.php�  �R�  �xK:�      1   src/Composer/Repository/Vcs/HgBitbucketDriver.php�  �R�  1�Ӷ      4   src/Composer/Repository/InstalledArrayRepository.php�   �R�   /�~>�      7   src/Composer/Repository/RepositorySecurityException.phpo   �Ro   pի��      9   src/Composer/Repository/StreamableRepositoryInterface.php�  �R�  8���      )   src/Composer/Repository/VcsRepository.php�  �R�  �/ʖ�      .   src/Composer/Repository/PlatformRepository.php  �R  ��|�      9   src/Composer/Repository/InstalledFilesystemRepository.php�   �R�   V
�_�      /   src/Composer/Repository/CompositeRepository.php	  �R	  4�E�      8   src/Composer/Repository/InstalledRepositoryInterface.php�   �R�   �9p�      .   src/Composer/Repository/ComposerRepository.php8  �R8  �<�      /   src/Composer/Repository/Pear/DependencyInfo.phpq  �Rq  f�T�      8   src/Composer/Repository/Pear/PackageDependencyParser.php!  �R!  =��F�      ,   src/Composer/Repository/Pear/ChannelInfo.php�  �R�  :T*ɶ      .   src/Composer/Repository/Pear/ChannelReader.phpn  �Rn  �8�      ,   src/Composer/Repository/Pear/PackageInfo.php�  �R�  ���      5   src/Composer/Repository/Pear/DependencyConstraint.phpq  �Rq  9=�      4   src/Composer/Repository/Pear/ChannelRest11Reader.php&	  �R&	  �Ub�      ,   src/Composer/Repository/Pear/ReleaseInfo.php�  �R�  o��ö      2   src/Composer/Repository/Pear/BaseChannelReader.php6  �R6  .fi!�      4   src/Composer/Repository/Pear/ChannelRest10Reader.php�	  �R�	  O��      /   src/Composer/Repository/RepositoryInterface.php�  �R�  �ɶ      .   src/Composer/Repository/ArtifactRepository.phpF  �RF  �8��      -   src/Composer/Repository/PackageRepository.phpG  �RG  �:k�      (   src/Composer/Package/CompletePackage.php�  �R�  8Gl]�      +   src/Composer/Package/Dumper/ArrayDumper.phpe
  �Re
  �����      7   src/Composer/Package/Loader/InvalidPackageException.phpE  �RE  xb��      *   src/Composer/Package/Loader/JsonLoader.php�  �R�  !~�{�      /   src/Composer/Package/Loader/LoaderInterface.php�   �R�   �}�ζ      +   src/Composer/Package/Loader/ArrayLoader.php�  �R�  �� 0�      5   src/Composer/Package/Loader/ValidatingArrayLoader.php0)  �R0)  �_�Ӷ      1   src/Composer/Package/Loader/RootPackageLoader.php~  �R~  �#�         src/Composer/Package/Locker.php�  �R�  �ӬJ�      )   src/Composer/Package/PackageInterface.phpg  �Rg  `�XĶ      $   src/Composer/Package/BasePackage.php[
  �R[
  $�Ҷ      .   src/Composer/Package/Version/VersionParser.php�$  �R�$  8I��      1   src/Composer/Package/CompletePackageInterface.php�  �R�  ��2��      -   src/Composer/Package/RootPackageInterface.php�  �R�  �qKж      $   src/Composer/Package/RootPackage.phpn  �Rn  �ACO�      3   src/Composer/Package/Archiver/ArchiverInterface.php�   �R�   <ʸ�      7   src/Composer/Package/Archiver/ComposerExcludeFilter.php  �R  �SZ0�      .   src/Composer/Package/Archiver/PharArchiver.php[  �R[  �5���      3   src/Composer/Package/Archiver/BaseExcludeFilter.php�  �R�  ��#&�      2   src/Composer/Package/Archiver/GitExcludeFilter.phpw  �Rw  LgU��      7   src/Composer/Package/Archiver/ArchivableFilesFinder.phpe  �Re  T�z�      0   src/Composer/Package/Archiver/ArchiveManager.php
  �R
  ��Ӷ      1   src/Composer/Package/Archiver/HgExcludeFilter.php  �R  ~���      )   src/Composer/Package/RootAliasPackage.php�  �R�  �>�          src/Composer/Package/Package.php�  �R�  Z��ζ      %   src/Composer/Package/AliasPackage.phpE  �RE  Vn���         src/Composer/Package/Link.phpQ  �RQ  ��9�      7   src/Composer/Package/LinkConstraint/EmptyConstraint.php�  �R�   ���      7   src/Composer/Package/LinkConstraint/MultiConstraint.phpg  �Rg  x�8�      9   src/Composer/Package/LinkConstraint/VersionConstraint.php�  �R�  l�`C�      :   src/Composer/Package/LinkConstraint/SpecificConstraint.phpq  �Rq  �S���      ?   src/Composer/Package/LinkConstraint/LinkConstraintInterface.php  �R  �����         src/Composer/Cache.php<  �R<  ]�ꍶ      3   src/Composer/DependencyResolver/PolicyInterface.php�  �R�  B���      +   src/Composer/DependencyResolver/RuleSet.php�	  �R�	  Jy��      6   src/Composer/DependencyResolver/SolverBugException.php�  �R�  "qN�      1   src/Composer/DependencyResolver/DefaultPolicy.php�  �R�  1��L�      -   src/Composer/DependencyResolver/Decisions.phpQ  �RQ  ?��$�      1   src/Composer/DependencyResolver/RuleWatchNode.php�  �R�  Z��      ;   src/Composer/DependencyResolver/SolverProblemsException.php%  �R%  T�P�      /   src/Composer/DependencyResolver/Transaction.php  �R  ��އ�      @   src/Composer/DependencyResolver/Operation/UninstallOperation.phpI  �RI  F��ɶ      =   src/Composer/DependencyResolver/Operation/UpdateOperation.phph  �Rh  �S�]�      I   src/Composer/DependencyResolver/Operation/MarkAliasInstalledOperation.php�  �R�  xUZa�      >   src/Composer/DependencyResolver/Operation/InstallOperation.phpC  �RC  �\�*�      =   src/Composer/DependencyResolver/Operation/SolverOperation.php�  �R�  ħݔ�      K   src/Composer/DependencyResolver/Operation/MarkAliasUninstalledOperation.php�  �R�  _iǫ�      @   src/Composer/DependencyResolver/Operation/OperationInterface.php�   �R�   ��&�      (   src/Composer/DependencyResolver/Pool.php&  �R&  *�c�      (   src/Composer/DependencyResolver/Rule.php�  �R�  �e�      4   src/Composer/DependencyResolver/RuleSetGenerator.phpO  �RO  _<�=�      /   src/Composer/DependencyResolver/DebugSolver.php�  �R�  �ҭ��      3   src/Composer/DependencyResolver/RuleSetIterator.php  �R  }����      2   src/Composer/DependencyResolver/RuleWatchChain.phpi  �Ri  h�,�      *   src/Composer/DependencyResolver/Solver.php�5  �R�5  ���      +   src/Composer/DependencyResolver/Request.php�  �R�  1�I�      +   src/Composer/DependencyResolver/Problem.php�  �R�  t�G�      2   src/Composer/DependencyResolver/RuleWatchGraph.php�  �R�  �r�v�      -   src/Composer/Config/ConfigSourceInterface.php�  �R�  !�p�      (   src/Composer/Config/JsonConfigSource.php  �R  �d�b�         src/Composer/Factory.php�$  �R�$  ��+t�          src/Composer/Util/Filesystem.php�  �R�  %gSw�         src/Composer/Util/GitHub.php�	  �R�	  ~)��      %   src/Composer/Util/ProcessExecutor.phpW  �RW  � ��         src/Composer/Util/Git.phpa  �Ra  ���      &   src/Composer/Util/RemoteFilesystem.php�  �R�  bU��      *   src/Composer/Util/StreamContextFactory.phpU  �RU  ��[j�      %   src/Composer/Util/ConfigValidator.phph
  �Rh
  E�.1�      "   src/Composer/Util/ErrorHandler.php  �R  �@��      +   src/Composer/Util/SpdxLicenseIdentifier.php6
  �R6
  �6�o�      $   src/Composer/Util/NoProxyPattern.php�  �R�  �2��         src/Composer/Util/Svn.php.  �R.  �;Iݶ         src/Composer/Composer.php�  �R�  ��5��      %   src/Composer/Json/JsonManipulator.php�  �R�  a�!#�         src/Composer/Json/JsonFile.php�  �R�  ��Q�      -   src/Composer/Json/JsonValidationException.php2  �R2  9b�1�         src/Composer/Config.php�  �R�  U��         src/Composer/Script/Event.phpu  �Ru  7��      $   src/Composer/Script/ScriptEvents.php�  �R�  (qPE�      $   src/Composer/Script/CommandEvent.phpo   �Ro   �y�      $   src/Composer/Script/PackageEvent.php�  �R�  a�	�      '   src/Composer/Script/EventDispatcher.phpx  �Rx  iiu�      (   src/Composer/Installer/NoopInstaller.php+  �R+  ��M}�      /   src/Composer/Installer/MetapackageInstaller.php�  �R�  ��!�      (   src/Composer/Installer/PearInstaller.php  �R  W�u�      +   src/Composer/Installer/ProjectInstaller.php�  �R�  �Q�      +   src/Composer/Installer/LibraryInstaller.php  �R  �T�V�      .   src/Composer/Installer/InstallationManager.phpK  �RK  8�~b�      -   src/Composer/Installer/InstallerInterface.php�  �R�  HS���      -   src/Composer/Installer/InstallerInstaller.php�	  �R�	  5i��      $   src/Composer/Console/Application.php  �R  7����      ,   src/Composer/Console/HtmlOutputFormatter.php�  �R�  �F��      +   src/Composer/Autoload/AutoloadGenerator.php&:  �R&:   7�Z�      +   src/Composer/Autoload/ClassMapGenerator.php�
  �R�
  ���_�         src/Composer/Installer.phpo_  �Ro_  �s�R�      %   src/Composer/Autoload/ClassLoader.php  �R  q���         res/spdx-identifier.jsoni  �Ri  �R�         res/composer-schema.jsonB  �RB  �Et�         src/Composer/IO/hiddeninput.exe $  �R $  ���v�      ?   vendor/symfony/process/Symfony/Component/Process/PhpProcess.php  �R  8ZԷ�      E   vendor/symfony/process/Symfony/Component/Process/ExecutableFinder.php�  �R�  	J      <   vendor/symfony/process/Symfony/Component/Process/Process.php:E  �R:E  �\��      C   vendor/symfony/process/Symfony/Component/Process/ProcessBuilder.php�  �R�  �����      A   vendor/symfony/process/Symfony/Component/Process/ProcessUtils.phpH  �RH  ��
4�      Q   vendor/symfony/process/Symfony/Component/Process/Exception/ExceptionInterface.phpf   �Rf   ]�>T�      O   vendor/symfony/process/Symfony/Component/Process/Exception/RuntimeException.php�   �R�   ��:�      M   vendor/symfony/process/Symfony/Component/Process/Exception/LogicException.php�   �R�    ���      U   vendor/symfony/process/Symfony/Component/Process/Exception/ProcessFailedException.php�  �R�  |�窶      W   vendor/symfony/process/Symfony/Component/Process/Exception/InvalidArgumentException.php�   �R�   ��+_�      H   vendor/symfony/process/Symfony/Component/Process/PhpExecutableFinder.php�  �R�  �� �      5   vendor/symfony/yaml/Symfony/Component/Yaml/Parser.php!2  �R!2  �����      8   vendor/symfony/yaml/Symfony/Component/Yaml/Unescaper.php  �R  "��G�      3   vendor/symfony/yaml/Symfony/Component/Yaml/Yaml.php�  �R�  ���      5   vendor/symfony/yaml/Symfony/Component/Yaml/Dumper.php	  �R	  ��Ƕ      G   vendor/symfony/yaml/Symfony/Component/Yaml/Exception/ParseException.php  �R  �E��      K   vendor/symfony/yaml/Symfony/Component/Yaml/Exception/ExceptionInterface.phpe   �Re   �c��      I   vendor/symfony/yaml/Symfony/Component/Yaml/Exception/RuntimeException.php�   �R�   ����      F   vendor/symfony/yaml/Symfony/Component/Yaml/Exception/DumpException.phpu   �Ru   e*n�      6   vendor/symfony/yaml/Symfony/Component/Yaml/Escaper.php�  �R�  �.�Ƕ      5   vendor/symfony/yaml/Symfony/Component/Yaml/Inline.php�!  �R�!  4V��      H   vendor/symfony/console/Symfony/Component/Console/Command/HelpCommand.php
  �R
  �71X�      D   vendor/symfony/console/Symfony/Component/Console/Command/Command.phpe  �Re  �+�      H   vendor/symfony/console/Symfony/Component/Console/Command/ListCommand.phpy  �Ry  �>{Զ      M   vendor/symfony/console/Symfony/Component/Console/Tester/ApplicationTester.phpg  �Rg  7-Gƶ      I   vendor/symfony/console/Symfony/Component/Console/Tester/CommandTester.php�  �R�  S��m�      X   vendor/symfony/console/Symfony/Component/Console/Formatter/OutputFormatterStyleStack.php  �R  yI'�      S   vendor/symfony/console/Symfony/Component/Console/Formatter/OutputFormatterStyle.phpU  �RU  z����      \   vendor/symfony/console/Symfony/Component/Console/Formatter/OutputFormatterStyleInterface.php�  �R�  ���=�      N   vendor/symfony/console/Symfony/Component/Console/Formatter/OutputFormatter.php�  �R�  >W���      W   vendor/symfony/console/Symfony/Component/Console/Formatter/OutputFormatterInterface.php�  �R�  3l~��      @   vendor/symfony/console/Symfony/Component/Console/Application.php�L  �R�L  �D�l�      H   vendor/symfony/console/Symfony/Component/Console/Input/InputArgument.php�  �R�  K]�i�      @   vendor/symfony/console/Symfony/Component/Console/Input/Input.php4
  �R4
  ��ݮ�      F   vendor/symfony/console/Symfony/Component/Console/Input/StringInput.php�  �R�  �]th�      F   vendor/symfony/console/Symfony/Component/Console/Input/InputOption.php�  �R�  ���1�      D   vendor/symfony/console/Symfony/Component/Console/Input/ArgvInput.phpV  �RV   �.۶      I   vendor/symfony/console/Symfony/Component/Console/Input/InputInterface.php   �R   9��Ƕ      E   vendor/symfony/console/Symfony/Component/Console/Input/ArrayInput.php�	  �R�	  �"9�      J   vendor/symfony/console/Symfony/Component/Console/Input/InputDefinition.php�  �R�  I ��      :   vendor/symfony/console/Symfony/Component/Console/Shell.phpt  �Rt  ��-�      B   vendor/symfony/console/Symfony/Component/Console/Output/Output.phpf  �Rf  /�W�      F   vendor/symfony/console/Symfony/Component/Console/Output/NullOutput.php  �R  �(���      R   vendor/symfony/console/Symfony/Component/Console/Output/ConsoleOutputInterface.php  �R  ���      H   vendor/symfony/console/Symfony/Component/Console/Output/StreamOutput.php�  �R�  ���      K   vendor/symfony/console/Symfony/Component/Console/Output/OutputInterface.phpI  �RI  ���B�      I   vendor/symfony/console/Symfony/Component/Console/Output/ConsoleOutput.phpF  �RF  �a�      S   vendor/symfony/console/Symfony/Component/Console/Descriptor/DescriptorInterface.php�   �R�   ��e�      N   vendor/symfony/console/Symfony/Component/Console/Descriptor/TextDescriptor.phpi  �Ri  ���ȶ      M   vendor/symfony/console/Symfony/Component/Console/Descriptor/XmlDescriptor.php4  �R4  ��[�      R   vendor/symfony/console/Symfony/Component/Console/Descriptor/MarkdownDescriptor.php�  �R�  �)�      V   vendor/symfony/console/Symfony/Component/Console/Descriptor/ApplicationDescription.php�  �R�  )I��      J   vendor/symfony/console/Symfony/Component/Console/Descriptor/Descriptor.php  �R  
n��      N   vendor/symfony/console/Symfony/Component/Console/Descriptor/JsonDescriptor.php*  �R*  �E�      K   vendor/symfony/console/Symfony/Component/Console/Helper/HelperInterface.php�   �R�   =e�      G   vendor/symfony/console/Symfony/Component/Console/Helper/TableHelper.php�  �R�  l�Zζ      L   vendor/symfony/console/Symfony/Component/Console/Helper/DescriptorHelper.php�  �R�  �~ж      K   vendor/symfony/console/Symfony/Component/Console/Helper/FormatterHelper.php  �R  �I���      E   vendor/symfony/console/Symfony/Component/Console/Helper/HelperSet.php�  �R�  �^9t�      H   vendor/symfony/console/Symfony/Component/Console/Helper/DialogHelper.phph  �Rh  ���&�      B   vendor/symfony/console/Symfony/Component/Console/Helper/Helper.php"  �R"  ��U�      J   vendor/symfony/console/Symfony/Component/Console/Helper/ProgressHelper.php.  �R.  e
I�      G   vendor/symfony/console/Symfony/Component/Console/Event/ConsoleEvent.php�  �R�  �x�\�      P   vendor/symfony/console/Symfony/Component/Console/Event/ConsoleTerminateEvent.phpt  �Rt  ��~Ҷ      P   vendor/symfony/console/Symfony/Component/Console/Event/ConsoleExceptionEvent.php  �R  �r���      N   vendor/symfony/console/Symfony/Component/Console/Event/ConsoleCommandEvent.php�   �R�   ���-�      B   vendor/symfony/console/Symfony/Component/Console/ConsoleEvents.php�   �R�   R��e�      9   vendor/symfony/finder/Symfony/Component/Finder/Finder.php�   �R�   ��s�      @   vendor/symfony/finder/Symfony/Component/Finder/Shell/Command.php�
  �R�
  ��B�      >   vendor/symfony/finder/Symfony/Component/Finder/Shell/Shell.php�  �R�  D�A
�      C   vendor/symfony/finder/Symfony/Component/Finder/Expression/Regex.phpZ  �RZ  @��~�      B   vendor/symfony/finder/Symfony/Component/Finder/Expression/Glob.php�  �R�    V��      H   vendor/symfony/finder/Symfony/Component/Finder/Expression/Expression.php{  �R{  'ȼ�      L   vendor/symfony/finder/Symfony/Component/Finder/Expression/ValueInterface.php;  �R;  ��Ӷ      K   vendor/symfony/finder/Symfony/Component/Finder/Adapter/AdapterInterface.php�  �R�  ��ȶ      I   vendor/symfony/finder/Symfony/Component/Finder/Adapter/BsdFindAdapter.php{  �R{  Q,D2�      I   vendor/symfony/finder/Symfony/Component/Finder/Adapter/GnuFindAdapter.php^  �R^  �z�r�      J   vendor/symfony/finder/Symfony/Component/Finder/Adapter/AbstractAdapter.php�
  �R�
  �n��      N   vendor/symfony/finder/Symfony/Component/Finder/Adapter/AbstractFindAdapter.php  �R  �Y���      E   vendor/symfony/finder/Symfony/Component/Finder/Adapter/PhpAdapter.php+  �R+  &��Ҷ      7   vendor/symfony/finder/Symfony/Component/Finder/Glob.php  �R  z��
�      T   vendor/symfony/finder/Symfony/Component/Finder/Iterator/DepthRangeFilterIterator.php�  �R�  �0��      L   vendor/symfony/finder/Symfony/Component/Finder/Iterator/SortableIterator.php�  �R�  ��Ƕ      U   vendor/symfony/finder/Symfony/Component/Finder/Iterator/FilecontentFilterIterator.php#  �R#  �_VǶ      M   vendor/symfony/finder/Symfony/Component/Finder/Iterator/FilePathsIterator.php�  �R�  ���Q�      S   vendor/symfony/finder/Symfony/Component/Finder/Iterator/SizeRangeFilterIterator.phpg  �Rg  !ԗ�      Z   vendor/symfony/finder/Symfony/Component/Finder/Iterator/ExcludeDirectoryFilterIterator.php�  �R�  �z`.�      J   vendor/symfony/finder/Symfony/Component/Finder/Iterator/FilterIterator.php�  �R�  0��Զ      V   vendor/symfony/finder/Symfony/Component/Finder/Iterator/MultiplePcreFilterIterator.php  �R  S�C��      P   vendor/symfony/finder/Symfony/Component/Finder/Iterator/CustomFilterIterator.php]  �R]  t౵�      R   vendor/symfony/finder/Symfony/Component/Finder/Iterator/FilenameFilterIterator.php�  �R�  �B�Z�      S   vendor/symfony/finder/Symfony/Component/Finder/Iterator/DateRangeFilterIterator.phpg  �Rg  ��e �      R   vendor/symfony/finder/Symfony/Component/Finder/Iterator/FileTypeFilterIterator.php\  �R\  p�'��      V   vendor/symfony/finder/Symfony/Component/Finder/Iterator/RecursiveDirectoryIterator.php�  �R�  �����      N   vendor/symfony/finder/Symfony/Component/Finder/Iterator/PathFilterIterator.php�  �R�  _�A�      L   vendor/symfony/finder/Symfony/Component/Finder/Comparator/DateComparator.php&  �R&  �hd��      N   vendor/symfony/finder/Symfony/Component/Finder/Comparator/NumberComparator.phpy  �Ry  "`۶      H   vendor/symfony/finder/Symfony/Component/Finder/Comparator/Comparator.php�  �R�  w�T�      R   vendor/symfony/finder/Symfony/Component/Finder/Exception/AccessDeniedException.php�   �R�   ��s��      O   vendor/symfony/finder/Symfony/Component/Finder/Exception/ExceptionInterface.php�   �R�   Gz-�      Z   vendor/symfony/finder/Symfony/Component/Finder/Exception/OperationNotPermitedException.php�   �R�   U88�      T   vendor/symfony/finder/Symfony/Component/Finder/Exception/AdapterFailureException.php  �R  m�_,�      Y   vendor/symfony/finder/Symfony/Component/Finder/Exception/ShellCommandFailureException.php$  �R$  C�sӶ      >   vendor/symfony/finder/Symfony/Component/Finder/SplFileInfo.php�  �R�  ��6�      4   vendor/seld/jsonlint/src/Seld/JsonLint/Undefined.php>   �R>   �q���      5   vendor/seld/jsonlint/src/Seld/JsonLint/JsonParser.php�,  �R�,  V�\�      0   vendor/seld/jsonlint/src/Seld/JsonLint/Lexer.php�  �R�  ��Y�      ;   vendor/seld/jsonlint/src/Seld/JsonLint/ParsingException.php  �R  ���      I   vendor/justinrainbow/json-schema/src/JsonSchema/Constraints/Undefined.phpx  �Rx  h��q�      D   vendor/justinrainbow/json-schema/src/JsonSchema/Constraints/Type.php�  �R�  ��+F�      F   vendor/justinrainbow/json-schema/src/JsonSchema/Constraints/Schema.php�  �R�  �:fM�      F   vendor/justinrainbow/json-schema/src/JsonSchema/Constraints/Number.phpW  �RW  .1��      F   vendor/justinrainbow/json-schema/src/JsonSchema/Constraints/Object.php�  �R�  c�Z��      S   vendor/justinrainbow/json-schema/src/JsonSchema/Constraints/ConstraintInterface.php$  �R$  g��      J   vendor/justinrainbow/json-schema/src/JsonSchema/Constraints/Constraint.php
  �R
  >��      J   vendor/justinrainbow/json-schema/src/JsonSchema/Constraints/Collection.phpV  �RV  �<���      D   vendor/justinrainbow/json-schema/src/JsonSchema/Constraints/Enum.php�  �R�  $(m��      F   vendor/justinrainbow/json-schema/src/JsonSchema/Constraints/String.php�  �R�  ���k�      =   vendor/justinrainbow/json-schema/src/JsonSchema/Validator.php[  �R[  8���         vendor/autoload.php�   �R�   ��>ٶ      '   vendor/composer/autoload_namespaces.php4  �R4  ����      %   vendor/composer/autoload_classmap.php�  �R�  � w@�      !   vendor/composer/autoload_real.phpk  �Rk  ��c�      !   vendor/composer/include_paths.php�  �R�  �̙ȶ         vendor/composer/ClassLoader.php�  �R�  sjX��         bin/composern  �Rn  ��W�         LICENSE3  �R3  �2�      <?php











function includeIfExists($file)
{
return file_exists($file) ? include $file : false;
}

if ((!$loader = includeIfExists(__DIR__.'/../vendor/autoload.php')) && (!$loader = includeIfExists(__DIR__.'/../../../autoload.php'))) {
echo 'You must set up the project dependencies, run the following commands:'.PHP_EOL.
'curl -sS https://getcomposer.org/installer | php'.PHP_EOL.
'php composer.phar install'.PHP_EOL;
exit(1);
}

return $loader;
<?php











namespace Composer\IO;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\HelperSet;







class ConsoleIO extends BaseIO
{
protected $input;
protected $output;
protected $helperSet;
protected $lastMessage;
private $startTime;








public function __construct(InputInterface $input, OutputInterface $output, HelperSet $helperSet)
{
$this->input = $input;
$this->output = $output;
$this->helperSet = $helperSet;
}

public function enableDebugging($startTime)
{
$this->startTime = $startTime;
}




public function isInteractive()
{
return $this->input->isInteractive();
}




public function isDecorated()
{
return $this->output->isDecorated();
}




public function isVerbose()
{
return $this->output->getVerbosity() >= OutputInterface::VERBOSITY_VERBOSE;
}




public function isVeryVerbose()
{
return $this->output->getVerbosity() >= 3; 
 }




public function isDebug()
{
return $this->output->getVerbosity() >= 4; 
 }




public function write($messages, $newline = true)
{
if (null !== $this->startTime) {
$messages = (array) $messages;
$messages[0] = sprintf(
'[%.1fMB/%.2fs] %s',
memory_get_usage() / 1024 / 1024,
microtime(true) - $this->startTime,
$messages[0]
);
}
$this->output->write($messages, $newline);
$this->lastMessage = join($newline ? "\n" : '', (array) $messages);
}




public function overwrite($messages, $newline = true, $size = null)
{

 $messages = join($newline ? "\n" : '', (array) $messages);


 if (!isset($size)) {

 $size = strlen(strip_tags($this->lastMessage));
}

 $this->write(str_repeat("\x08", $size), false);


 $this->write($messages, false);

$fill = $size - strlen(strip_tags($messages));
if ($fill > 0) {

 $this->write(str_repeat(' ', $fill), false);

 $this->write(str_repeat("\x08", $fill), false);
}

if ($newline) {
$this->write('');
}
$this->lastMessage = $messages;
}




public function ask($question, $default = null)
{
return $this->helperSet->get('dialog')->ask($this->output, $question, $default);
}




public function askConfirmation($question, $default = true)
{
return $this->helperSet->get('dialog')->askConfirmation($this->output, $question, $default);
}




public function askAndValidate($question, $validator, $attempts = false, $default = null)
{
return $this->helperSet->get('dialog')->askAndValidate($this->output, $question, $validator, $attempts, $default);
}




public function askAndHideAnswer($question)
{

 if (defined('PHP_WINDOWS_VERSION_BUILD')) {
$exe = __DIR__.'\\hiddeninput.exe';


 if ('phar:' === substr(__FILE__, 0, 5)) {
$tmpExe = sys_get_temp_dir().'/hiddeninput.exe';


 
 $source = fopen(__DIR__.'\\hiddeninput.exe', 'r');
$target = fopen($tmpExe, 'w+');
stream_copy_to_stream($source, $target);
fclose($source);
fclose($target);
unset($source, $target);

$exe = $tmpExe;
}

$this->write($question, false);
$value = rtrim(shell_exec($exe));
$this->write('');


 if (isset($tmpExe)) {
unlink($tmpExe);
}

return $value;
}

if (file_exists('/usr/bin/env')) {

 $test = "/usr/bin/env %s -c 'echo OK' 2> /dev/null";
foreach (array('bash', 'zsh', 'ksh', 'csh') as $sh) {
if ('OK' === rtrim(shell_exec(sprintf($test, $sh)))) {
$shell = $sh;
break;
}
}
if (isset($shell)) {
$this->write($question, false);
$readCmd = ($shell === 'csh') ? 'set mypassword = $<' : 'read -r mypassword';
$command = sprintf("/usr/bin/env %s -c 'stty -echo; %s; stty echo; echo \$mypassword'", $shell, $readCmd);
$value = rtrim(shell_exec($command));
$this->write('');

return $value;
}
}


 return $this->ask($question);
}
}
<?php











namespace Composer\IO;






class NullIO extends BaseIO
{



public function isInteractive()
{
return false;
}




public function isVerbose()
{
return false;
}




public function isVeryVerbose()
{
return false;
}




public function isDebug()
{
return false;
}




public function isDecorated()
{
return false;
}




public function write($messages, $newline = true)
{
}




public function overwrite($messages, $newline = true, $size = 80)
{
}




public function ask($question, $default = null)
{
return $default;
}




public function askConfirmation($question, $default = true)
{
return $default;
}




public function askAndValidate($question, $validator, $attempts = false, $default = null)
{
return $default;
}




public function askAndHideAnswer($question)
{
return null;
}
}
<?php











namespace Composer\IO;

use Composer\Config;






interface IOInterface
{





public function isInteractive();






public function isVerbose();






public function isVeryVerbose();






public function isDebug();






public function isDecorated();







public function write($messages, $newline = true);








public function overwrite($messages, $newline = true, $size = 80);











public function ask($question, $default = null);











public function askConfirmation($question, $default = true);

















public function askAndValidate($question, $validator, $attempts = false, $default = null);








public function askAndHideAnswer($question);






public function getAuthentications();








public function hasAuthentication($repositoryName);








public function getAuthentication($repositoryName);








public function setAuthentication($repositoryName, $username, $password = null);






public function loadConfiguration(Config $config);
}
<?php











namespace Composer\IO;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\HelperSet;
use Composer\Config;

abstract class BaseIO implements IOInterface
{
protected $authentications = array();




public function getAuthentications()
{
return $this->authentications;
}




public function hasAuthentication($repositoryName)
{
return isset($this->authentications[$repositoryName]);
}




public function getAuthentication($repositoryName)
{
if (isset($this->authentications[$repositoryName])) {
return $this->authentications[$repositoryName];
}

return array('username' => null, 'password' => null);
}




public function setAuthentication($repositoryName, $username, $password = null)
{
$this->authentications[$repositoryName] = array('username' => $username, 'password' => $password);
}




public function loadConfiguration(Config $config)
{

 if ($tokens = $config->get('github-oauth')) {
foreach ($tokens as $domain => $token) {
if (!preg_match('{^[a-z0-9]+$}', $token)) {
throw new \UnexpectedValueException('Your github oauth token for '.$domain.' contains invalid characters: "'.$token.'"');
}
$this->setAuthentication($domain, $token, 'x-oauth-basic');
}
}
}
}
<?php











namespace Composer\IO;

use Symfony\Component\Console\Output\StreamOutput;
use Symfony\Component\Console\Formatter\OutputFormatterInterface;
use Symfony\Component\Console\Input\StringInput;
use Symfony\Component\Console\Helper\HelperSet;




class BufferIO extends ConsoleIO
{





public function __construct($input = '', $verbosity = null, OutputFormatterInterface $formatter = null)
{
$input = new StringInput($input);
$input->setInteractive(false);

$output = new StreamOutput(fopen('php://memory', 'rw'), $verbosity === null ? StreamOutput::VERBOSITY_NORMAL : $verbosity, !empty($formatter), $formatter);

parent::__construct($input, $output, new HelperSet(array()));
}

public function getOutput()
{
fseek($this->output->getStream(), 0);

$output = stream_get_contents($this->output->getStream());

$output = preg_replace_callback("{(?<=^|\n|\x08)(.+?)(\x08+)}", function ($matches) {
$pre = strip_tags($matches[1]);

if (strlen($pre) === strlen($matches[2])) {
return '';
}


 return rtrim($matches[1])."\n";
}, $output);

return $output;
}
}
<?php











namespace Composer\Command;

use Composer\Script\ScriptEvents;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;




class RunScriptCommand extends Command
{
protected function configure()
{
$this
->setName('run-script')
->setDescription('Run the scripts defined in composer.json.')
->setDefinition(array(
new InputArgument('script', InputArgument::REQUIRED, 'Script name to run.'),
new InputOption('dev', null, InputOption::VALUE_NONE, 'Sets the dev mode.'),
new InputOption('no-dev', null, InputOption::VALUE_NONE, 'Disables the dev mode.'),
))
->setHelp(<<<EOT
The <info>run-script</info> command runs scripts defined in composer.json:

<info>php composer.phar run-script post-update-cmd</info>
EOT
)
;
}

protected function execute(InputInterface $input, OutputInterface $output)
{
$script = $input->getArgument('script');
if (!in_array($script, array(
ScriptEvents::PRE_INSTALL_CMD,
ScriptEvents::POST_INSTALL_CMD,
ScriptEvents::PRE_UPDATE_CMD,
ScriptEvents::POST_UPDATE_CMD,
ScriptEvents::PRE_STATUS_CMD,
ScriptEvents::POST_STATUS_CMD,
))) {
if (defined('Composer\Script\ScriptEvents::'.str_replace('-', '_', strtoupper($script)))) {
throw new \InvalidArgumentException(sprintf('Script "%s" cannot be run with this command', $script));
}

throw new \InvalidArgumentException(sprintf('Script "%s" does not exist', $script));
}

$this->getComposer()->getEventDispatcher()->dispatchCommandEvent($script, $input->getOption('dev') || !$input->getOption('no-dev'));
}
}
<?php











namespace Composer\Command;

use Composer\Composer;
use Composer\Factory;
use Composer\Downloader\TransportException;
use Composer\Util\ConfigValidator;
use Composer\Util\RemoteFilesystem;
use Composer\Util\StreamContextFactory;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;




class DiagnoseCommand extends Command
{
protected $rfs;
protected $failures = 0;

protected function configure()
{
$this
->setName('diagnose')
->setDescription('Diagnoses the system to identify common errors.')
->setHelp(<<<EOT
The <info>diagnose</info> command checks common errors to help debugging problems.

EOT
)
;
}

protected function execute(InputInterface $input, OutputInterface $output)
{
$this->rfs = new RemoteFilesystem($this->getIO());

$output->write('Checking platform settings: ');
$this->outputResult($output, $this->checkPlatform());

$output->write('Checking http connectivity: ');
$this->outputResult($output, $this->checkHttp());

$opts = stream_context_get_options(StreamContextFactory::getContext('http://example.org'));
if (!empty($opts['http']['proxy'])) {
$output->write('Checking HTTP proxy: ');
$this->outputResult($output, $this->checkHttpProxy());
$output->write('Checking HTTP proxy support for request_fulluri: ');
$this->outputResult($output, $this->checkHttpProxyFullUriRequestParam());
$output->write('Checking HTTPS proxy support for request_fulluri: ');
$this->outputResult($output, $this->checkHttpsProxyFullUriRequestParam());
}

$composer = $this->getComposer(false);
if ($composer) {
$output->write('Checking composer.json: ');
$this->outputResult($output, $this->checkComposerSchema());
}

if ($composer) {
$config = $composer->getConfig();
} else {
$config = Factory::createConfig();
}

if ($oauth = $config->get('github-oauth')) {
foreach ($oauth as $domain => $token) {
$output->write('Checking '.$domain.' oauth access: ');
$this->outputResult($output, $this->checkGithubOauth($domain, $token));
}
}

$output->write('Checking disk free space: ');
$this->outputResult($output, $this->checkDiskSpace($config));

$output->write('Checking composer version: ');
$this->outputResult($output, $this->checkVersion());

return $this->failures;
}

private function checkComposerSchema()
{
$validator = new ConfigValidator($this->getIO());
list($errors, $publishErrors, $warnings) = $validator->validate(Factory::getComposerFile());

if ($errors || $publishErrors || $warnings) {
$messages = array(
'error' => array_merge($errors, $publishErrors),
'warning' => $warnings,
);

$output = '';
foreach ($messages as $style => $msgs) {
foreach ($msgs as $msg) {
$output .= '<' . $style . '>' . $msg . '</' . $style . '>' . PHP_EOL;
}
}

return rtrim($output);
}

return true;
}

private function checkHttp()
{
$protocol = extension_loaded('openssl') ? 'https' : 'http';
try {
$json = $this->rfs->getContents('packagist.org', $protocol . '://packagist.org/packages.json', false);
} catch (\Exception $e) {
return $e;
}

return true;
}

private function checkHttpProxy()
{
$protocol = extension_loaded('openssl') ? 'https' : 'http';
try {
$json = json_decode($this->rfs->getContents('packagist.org', $protocol . '://packagist.org/packages.json', false), true);
$hash = reset($json['provider-includes']);
$hash = $hash['sha256'];
$path = str_replace('%hash%', $hash, key($json['provider-includes']));
$provider = $this->rfs->getContents('packagist.org', $protocol . '://packagist.org/'.$path, false);

if (hash('sha256', $provider) !== $hash) {
return 'It seems that your proxy is modifying http traffic on the fly';
}
} catch (\Exception $e) {
return $e;
}

return true;
}








private function checkHttpProxyFullUriRequestParam()
{
$url = 'http://packagist.org/packages.json';
try {
$this->rfs->getContents('packagist.org', $url, false);
} catch (TransportException $e) {
try {
$this->rfs->getContents('packagist.org', $url, false, array('http' => array('request_fulluri' => false)));
} catch (TransportException $e) {
return 'Unable to assert the situation, maybe packagist.org is down ('.$e->getMessage().')';
}

return 'It seems there is a problem with your proxy server, try setting the "HTTP_PROXY_REQUEST_FULLURI" and "HTTPS_PROXY_REQUEST_FULLURI" environment variables to "false"';
}

return true;
}








private function checkHttpsProxyFullUriRequestParam()
{
if (!extension_loaded('openssl')) {
return 'You need the openssl extension installed for this check';
}

$url = 'https://api.github.com/repos/Seldaek/jsonlint/zipball/1.0.0';
try {
$rfcResult = $this->rfs->getContents('api.github.com', $url, false);
} catch (TransportException $e) {
try {
$this->rfs->getContents('api.github.com', $url, false, array('http' => array('request_fulluri' => false)));
} catch (TransportException $e) {
return 'Unable to assert the situation, maybe github is down ('.$e->getMessage().')';
}

return 'It seems there is a problem with your proxy server, try setting the "HTTPS_PROXY_REQUEST_FULLURI" environment variable to "false"';
}

return true;
}

private function checkGithubOauth($domain, $token)
{
$this->getIO()->setAuthentication($domain, $token, 'x-oauth-basic');
try {
$url = $domain === 'github.com' ? 'https://api.'.$domain.'/user/repos' : 'https://'.$domain.'/api/v3/user/repos';

return $this->rfs->getContents($domain, $url, false) ? true : 'Unexpected error';
} catch (\Exception $e) {
if ($e instanceof TransportException && $e->getCode() === 401) {
return '<warning>The oauth token for '.$domain.' seems invalid, run "composer config --global --unset github-oauth.'.$domain.'" to remove it</warning>';
}

return $e;
}
}

private function checkDiskSpace($config)
{
$minSpaceFree = 1024*1024;
if ((($df = @disk_free_space($dir = $config->get('home'))) !== false && $df < $minSpaceFree)
|| (($df = @disk_free_space($dir = $config->get('vendor-dir'))) !== false && $df < $minSpaceFree)
) {
return '<error>The disk hosting '.$dir.' is full</error>';
}

return true;
}

private function checkVersion()
{
$protocol = extension_loaded('openssl') ? 'https' : 'http';
$latest = trim($this->rfs->getContents('getcomposer.org', $protocol . '://getcomposer.org/version', false));

if (Composer::VERSION !== $latest && Composer::VERSION !== 'ef072ff8c008f35d90fe3460608bdb1365a8d7a7') {
return '<warning>Your are not running the latest version</warning>';
}

return true;
}

private function outputResult(OutputInterface $output, $result)
{
if (true === $result) {
$output->writeln('<info>OK</info>');
} else {
$this->failures++;
$output->writeln('<error>FAIL</error>');
if ($result instanceof \Exception) {
$output->writeln('['.get_class($result).'] '.$result->getMessage());
} elseif ($result) {
$output->writeln($result);
}
}
}

private function checkPlatform()
{
$output = '';
$out = function ($msg, $style) use (&$output) {
$output .= '<'.$style.'>'.$msg.'</'.$style.'>';
};


 $errors = array();
$warnings = array();

$iniPath = php_ini_loaded_file();
$displayIniMessage = false;
if ($iniPath) {
$iniMessage = PHP_EOL.PHP_EOL.'The php.ini used by your command-line PHP is: ' . $iniPath;
} else {
$iniMessage = PHP_EOL.PHP_EOL.'A php.ini file does not exist. You will have to create one.';
}
$iniMessage .= PHP_EOL.'If you can not modify the ini file, you can also run `php -d option=value` to modify ini values on the fly. You can use -d multiple times.';

if (!ini_get('allow_url_fopen')) {
$errors['allow_url_fopen'] = true;
}

if (version_compare(PHP_VERSION, '5.3.2', '<')) {
$errors['php'] = PHP_VERSION;
}

if (!isset($errors['php']) && version_compare(PHP_VERSION, '5.3.4', '<')) {
$warnings['php'] = PHP_VERSION;
}

if (!extension_loaded('openssl')) {
$warnings['openssl'] = true;
}

if (ini_get('apc.enable_cli')) {
$warnings['apc_cli'] = true;
}

ob_start();
phpinfo(INFO_GENERAL);
$phpinfo = ob_get_clean();
if (preg_match('{Configure Command(?: *</td><td class="v">| *=> *)(.*?)(?:</td>|$)}m', $phpinfo, $match)) {
$configure = $match[1];

if (false !== strpos($configure, '--enable-sigchild')) {
$warnings['sigchild'] = true;
}

if (false !== strpos($configure, '--with-curlwrappers')) {
$warnings['curlwrappers'] = true;
}
}

if (!empty($errors)) {
foreach ($errors as $error => $current) {
switch ($error) {
case 'php':
$text = PHP_EOL."Your PHP ({$current}) is too old, you must upgrade to PHP 5.3.2 or higher.";
break;

case 'allow_url_fopen':
$text = PHP_EOL."The allow_url_fopen setting is incorrect.".PHP_EOL;
$text .= "Add the following to the end of your `php.ini`:".PHP_EOL;
$text .= "    allow_url_fopen = On";
$displayIniMessage = true;
break;
}
$out($text, 'error');
}

$output .= PHP_EOL;
}

if (!empty($warnings)) {
foreach ($warnings as $warning => $current) {
switch ($warning) {
case 'apc_cli':
$text = PHP_EOL."The apc.enable_cli setting is incorrect.".PHP_EOL;
$text .= "Add the following to the end of your `php.ini`:".PHP_EOL;
$text .= "    apc.enable_cli = Off";
$displayIniMessage = true;
break;

case 'sigchild':
$text = PHP_EOL."PHP was compiled with --enable-sigchild which can cause issues on some platforms.".PHP_EOL;
$text .= "Recompile it without this flag if possible, see also:".PHP_EOL;
$text .= "    https://bugs.php.net/bug.php?id=22999";
break;

case 'curlwrappers':
$text = PHP_EOL."PHP was compiled with --with-curlwrappers which will cause issues with HTTP authentication and GitHub.".PHP_EOL;
$text .= "Recompile it without this flag if possible";
break;

case 'openssl':
$text = PHP_EOL."The openssl extension is missing, which will reduce the security and stability of Composer.".PHP_EOL;
$text .= "If possible you should enable it or recompile php with --with-openssl";
break;

case 'php':
$text = PHP_EOL."Your PHP ({$current}) is quite old, upgrading to PHP 5.3.4 or higher is recommended.".PHP_EOL;
$text .= "Composer works with 5.3.2+ for most people, but there might be edge case issues.";
break;
}
$out($text, 'warning');
}
}

if ($displayIniMessage) {
$out($iniMessage, 'warning');
}

return !$warnings && !$errors ? true : $output;
}
}
<?php











namespace Composer\Command;

use Composer\Factory;
use Composer\IO\IOInterface;
use Composer\DependencyResolver\Pool;
use Composer\Package\LinkConstraint\VersionConstraint;
use Composer\Repository\CompositeRepository;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;






class ArchiveCommand extends Command
{
protected function configure()
{
$this
->setName('archive')
->setDescription('Create an archive of this composer package')
->setDefinition(array(
new InputArgument('package', InputArgument::OPTIONAL, 'The package to archive instead of the current project'),
new InputArgument('version', InputArgument::OPTIONAL, 'The package version to archive'),
new InputOption('format', 'f', InputOption::VALUE_REQUIRED, 'Format of the resulting archive: tar or zip', 'tar'),
new InputOption('dir', false, InputOption::VALUE_REQUIRED, 'Write the archive to this directory', '.'),
))
->setHelp(<<<EOT
The <info>archive</info> command creates an archive of the specified format
containing the files and directories of the Composer project or the specified
package in the specified version and writes it to the specified directory.

<info>php composer.phar archive [--format=zip] [--dir=/foo] [package [version]]</info>

EOT
)
;
}

protected function execute(InputInterface $input, OutputInterface $output)
{
return $this->archive(
$this->getIO(),
$input->getArgument('package'),
$input->getArgument('version'),
$input->getOption('format'),
$input->getOption('dir')
);
}

protected function archive(IOInterface $io, $packageName = null, $version = null, $format = 'tar', $dest = '.')
{
$config = Factory::createConfig();
$factory = new Factory;
$downloadManager = $factory->createDownloadManager($io, $config);
$archiveManager = $factory->createArchiveManager($config, $downloadManager);

if ($packageName) {
$package = $this->selectPackage($io, $packageName, $version);

if (!$package) {
return 1;
}
} else {
$package = $this->getComposer()->getPackage();
}

$io->write('<info>Creating the archive.</info>');
$archiveManager->archive($package, $format, $dest);

return 0;
}

protected function selectPackage(IOInterface $io, $packageName, $version = null)
{
$io->write('<info>Searching for the specified package.</info>');

if ($composer = $this->getComposer(false)) {
$localRepo = $composer->getRepositoryManager()->getLocalRepository();
$repos = new CompositeRepository(array_merge(array($localRepo), $composer->getRepositoryManager()->getRepositories()));
} else {
$defaultRepos = Factory::createDefaultRepositories($this->getIO());
$io->write('No composer.json found in the current directory, searching packages from ' . implode(', ', array_keys($defaultRepos)));
$repos = new CompositeRepository($defaultRepos);
}

$pool = new Pool();
$pool->addRepository($repos);

$constraint = ($version) ? new VersionConstraint('>=', $version) : null;
$packages = $pool->whatProvides($packageName, $constraint);

if (count($packages) > 1) {
$package = $packages[0];
$io->write('<info>Found multiple matches, selected '.$package->getPrettyString().'.</info>');
$io->write('Alternatives were '.implode(', ', array_map(function ($p) { return $p->getPrettyString(); }, $packages)).'.');
$io->write('<comment>Please use a more specific constraint to pick a different package.</comment>');
} elseif ($packages) {
$package = $packages[0];
$io->write('<info>Found an exact match '.$package->getPrettyString().'.</info>');
} else {
$io->write('<error>Could not find a package matching '.$packageName.'.</error>');

return false;
}

return $package;
}
}
<?php











namespace Composer\Command;

use Composer\Composer;
use Composer\Console\Application;
use Composer\IO\IOInterface;
use Composer\IO\NullIO;
use Symfony\Component\Console\Command\Command as BaseCommand;







abstract class Command extends BaseCommand
{



private $composer;




private $io;






public function getComposer($required = true)
{
if (null === $this->composer) {
$application = $this->getApplication();
if ($application instanceof Application) {

$this->composer = $application->getComposer($required);
} elseif ($required) {
throw new \RuntimeException(
'Could not create a Composer\Composer instance, you must inject '.
'one if this command is not used with a Composer\Console\Application instance'
);
}
}

return $this->composer;
}




public function setComposer(Composer $composer)
{
$this->composer = $composer;
}




public function getIO()
{
if (null === $this->io) {
$application = $this->getApplication();
if ($application instanceof Application) {

$this->io = $application->getIO();
} else {
$this->io = new NullIO();
}
}

return $this->io;
}




public function setIO(IOInterface $io)
{
$this->io = $io;
}
}
<?php











namespace Composer\Command;

use Composer\Config;
use Composer\Factory;
use Composer\Installer;
use Composer\Installer\ProjectInstaller;
use Composer\Installer\InstallationManager;
use Composer\IO\IOInterface;
use Composer\Package\BasePackage;
use Composer\Package\LinkConstraint\VersionConstraint;
use Composer\DependencyResolver\Pool;
use Composer\DependencyResolver\Operation\InstallOperation;
use Composer\Repository\ComposerRepository;
use Composer\Repository\CompositeRepository;
use Composer\Repository\FilesystemRepository;
use Composer\Repository\InstalledFilesystemRepository;
use Composer\Script\ScriptEvents;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Finder\Finder;
use Composer\Json\JsonFile;
use Composer\Config\JsonConfigSource;
use Composer\Util\Filesystem;
use Composer\Util\RemoteFilesystem;
use Composer\Package\Version\VersionParser;








class CreateProjectCommand extends Command
{
protected function configure()
{
$this
->setName('create-project')
->setDescription('Create new project from a package into given directory.')
->setDefinition(array(
new InputArgument('package', InputArgument::OPTIONAL, 'Package name to be installed'),
new InputArgument('directory', InputArgument::OPTIONAL, 'Directory where the files should be created'),
new InputArgument('version', InputArgument::OPTIONAL, 'Version, will defaults to latest'),
new InputOption('stability', 's', InputOption::VALUE_REQUIRED, 'Minimum-stability allowed (unless a version is specified).', 'stable'),
new InputOption('prefer-source', null, InputOption::VALUE_NONE, 'Forces installation from package sources when possible, including VCS information.'),
new InputOption('prefer-dist', null, InputOption::VALUE_NONE, 'Forces installation from package dist even for dev versions.'),
new InputOption('repository-url', null, InputOption::VALUE_REQUIRED, 'Pick a different repository url to look for the package.'),
new InputOption('dev', null, InputOption::VALUE_NONE, 'Enables installation of require-dev packages (enabled by default, only present for BC).'),
new InputOption('no-dev', null, InputOption::VALUE_NONE, 'Disables installation of require-dev packages.'),
new InputOption('no-custom-installers', null, InputOption::VALUE_NONE, 'Whether to disable custom installers.'),
new InputOption('no-scripts', null, InputOption::VALUE_NONE, 'Whether to prevent execution of all defined scripts in the root package.'),
new InputOption('no-progress', null, InputOption::VALUE_NONE, 'Do not output download progress.'),
new InputOption('keep-vcs', null, InputOption::VALUE_NONE, 'Whether to prevent deletion vcs folder.'),
))
->setHelp(<<<EOT
The <info>create-project</info> command creates a new project from a given
package into a new directory. If executed without params and in a directory
with a composer.json file it installs the packages for the current project.

You can use this command to bootstrap new projects or setup a clean
version-controlled installation for developers of your project.

<info>php composer.phar create-project vendor/project target-directory [version]</info>

You can also specify the version with the package name using = or : as separator.

To install unstable packages, either specify the version you want, or use the
--stability=dev (where dev can be one of RC, beta, alpha or dev).

To setup a developer workable version you should create the project using the source
controlled code by appending the <info>'--prefer-source'</info> flag.

To install a package from another repository than the default one you
can pass the <info>'--repository-url=http://myrepository.org'</info> flag.

EOT
)
;
}

protected function execute(InputInterface $input, OutputInterface $output)
{
$config = Factory::createConfig();

$preferSource = false;
$preferDist = false;
switch ($config->get('preferred-install')) {
case 'source':
$preferSource = true;
break;
case 'dist':
$preferDist = true;
break;
case 'auto':
default:

 break;
}
if ($input->getOption('prefer-source') || $input->getOption('prefer-dist')) {
$preferSource = $input->getOption('prefer-source');
$preferDist = $input->getOption('prefer-dist');
}

return $this->installProject(
$this->getIO(),
$config,
$input->getArgument('package'),
$input->getArgument('directory'),
$input->getArgument('version'),
$input->getOption('stability'),
$preferSource,
$preferDist,
!$input->getOption('no-dev'),
$input->getOption('repository-url'),
$input->getOption('no-custom-installers'),
$input->getOption('no-scripts'),
$input->getOption('keep-vcs'),
$input->getOption('no-progress')
);
}

public function installProject(IOInterface $io, $config, $packageName, $directory = null, $packageVersion = null, $stability = 'stable', $preferSource = false, $preferDist = false, $installDevPackages = false, $repositoryUrl = null, $disableCustomInstallers = false, $noScripts = false, $keepVcs = false, $noProgress = false)
{
$oldCwd = getcwd();

if ($packageName !== null) {
$installedFromVcs = $this->installRootPackage($io, $config, $packageName, $directory, $packageVersion, $stability, $preferSource, $preferDist, $installDevPackages, $repositoryUrl, $disableCustomInstallers, $noScripts, $keepVcs, $noProgress);
} else {
$installedFromVcs = false;
}

$composer = Factory::create($io);

if ($noScripts === false) {

 $composer->getEventDispatcher()->dispatchCommandEvent(ScriptEvents::POST_ROOT_PACKAGE_INSTALL, $installDevPackages);
}


 $installer = Installer::create($io, $composer);
$installer->setPreferSource($preferSource)
->setPreferDist($preferDist)
->setDevMode($installDevPackages)
->setRunScripts( ! $noScripts);

if ($disableCustomInstallers) {
$installer->disableCustomInstallers();
}

if (!$installer->run()) {
return 1;
}

$hasVcs = $installedFromVcs;
if (!$keepVcs && $installedFromVcs
&& (
!$io->isInteractive()
|| $io->askConfirmation('<info>Do you want to remove the existing VCS (.git, .svn..) history?</info> [<comment>Y,n</comment>]? ', true)
)
) {
$finder = new Finder();
$finder->depth(0)->directories()->in(getcwd())->ignoreVCS(false)->ignoreDotFiles(false);
foreach (array('.svn', '_svn', 'CVS', '_darcs', '.arch-params', '.monotone', '.bzr', '.git', '.hg') as $vcsName) {
$finder->name($vcsName);
}

try {
$fs = new Filesystem();
$dirs = iterator_to_array($finder);
unset($finder);
foreach ($dirs as $dir) {
if (!$fs->removeDirectory($dir)) {
throw new \RuntimeException('Could not remove '.$dir);
}
}
} catch (\Exception $e) {
$io->write('<error>An error occurred while removing the VCS metadata: '.$e->getMessage().'</error>');
}

$hasVcs = false;
}


 if (!$hasVcs) {
$package = $composer->getPackage();
$configSource = new JsonConfigSource(new JsonFile('composer.json'));
foreach (BasePackage::$supportedLinkTypes as $type => $meta) {
foreach ($package->{'get'.$meta['method']}() as $link) {
if ($link->getPrettyConstraint() === 'self.version') {
$configSource->addLink($type, $link->getTarget(), $package->getPrettyVersion());
}
}
}
}

if ($noScripts === false) {

 $composer->getEventDispatcher()->dispatchCommandEvent(ScriptEvents::POST_CREATE_PROJECT_CMD, $installDevPackages);
}

chdir($oldCwd);
$vendorComposerDir = $composer->getConfig()->get('vendor-dir').'/composer';
if (is_dir($vendorComposerDir) && glob($vendorComposerDir.'/*') === array() && count(glob($vendorComposerDir.'/.*')) === 2) {
@rmdir($vendorComposerDir);
$vendorDir = $composer->getConfig()->get('vendor-dir');
if (is_dir($vendorDir) && glob($vendorDir.'/*') === array() && count(glob($vendorDir.'/.*')) === 2) {
@rmdir($vendorDir);
}
}

return 0;
}

protected function installRootPackage(IOInterface $io, $config, $packageName, $directory = null, $packageVersion = null, $stability = 'stable', $preferSource = false, $preferDist = false, $installDevPackages = false, $repositoryUrl = null, $disableCustomInstallers = false, $noScripts = false, $keepVcs = false, $noProgress = false)
{
$stability = strtolower($stability);
if ($stability === 'rc') {
$stability = 'RC';
}
if (!isset(BasePackage::$stabilities[$stability])) {
throw new \InvalidArgumentException('Invalid stability provided ('.$stability.'), must be one of: '.implode(', ', array_keys(BasePackage::$stabilities)));
}

if (null === $repositoryUrl) {
$sourceRepo = new CompositeRepository(Factory::createDefaultRepositories($io, $config));
} elseif ("json" === pathinfo($repositoryUrl, PATHINFO_EXTENSION)) {
$sourceRepo = new FilesystemRepository(new JsonFile($repositoryUrl, new RemoteFilesystem($io)));
} elseif (0 === strpos($repositoryUrl, 'http')) {
$sourceRepo = new ComposerRepository(array('url' => $repositoryUrl), $io, $config);
} else {
throw new \InvalidArgumentException("Invalid repository url given. Has to be a .json file or an http url.");
}

$parser = new VersionParser();
$candidates = array();
$requirements = $parser->parseNameVersionPairs(array($packageName));
$name = strtolower($requirements[0]['name']);
if (!$packageVersion && isset($requirements[0]['version'])) {
$packageVersion = $requirements[0]['version'];
}

$pool = new Pool($packageVersion ? 'dev' : $stability);
$pool->addRepository($sourceRepo);

$constraint = $packageVersion ? new VersionConstraint('=', $parser->normalize($packageVersion)) : null;
$candidates = $pool->whatProvides($name, $constraint);
foreach ($candidates as $key => $candidate) {
if ($candidate->getName() !== $name) {
unset($candidates[$key]);
}
}

if (!$candidates) {
throw new \InvalidArgumentException("Could not find package $name" . ($packageVersion ? " with version $packageVersion." : " with stability $stability."));
}

if (null === $directory) {
$parts = explode("/", $name, 2);
$directory = getcwd() . DIRECTORY_SEPARATOR . array_pop($parts);
}


 $package = $candidates[0];
foreach ($candidates as $candidate) {
if (version_compare($package->getVersion(), $candidate->getVersion(), '<')) {
$package = $candidate;
}
}
unset($candidates);

$io->write('<info>Installing ' . $package->getName() . ' (' . VersionParser::formatVersion($package, false) . ')</info>');

if ($disableCustomInstallers) {
$io->write('<info>Custom installers have been disabled.</info>');
}

if (0 === strpos($package->getPrettyVersion(), 'dev-') && in_array($package->getSourceType(), array('git', 'hg'))) {
$package->setSourceReference(substr($package->getPrettyVersion(), 4));
}

$dm = $this->createDownloadManager($io, $config);
$dm->setPreferSource($preferSource)
->setPreferDist($preferDist)
->setOutputProgress(!$noProgress);

$projectInstaller = new ProjectInstaller($directory, $dm);
$im = $this->createInstallationManager();
$im->addInstaller($projectInstaller);
$im->install(new InstalledFilesystemRepository(new JsonFile('php://memory')), new InstallOperation($package));
$im->notifyInstalls();

$installedFromVcs = 'source' === $package->getInstallationSource();

$io->write('<info>Created project in ' . $directory . '</info>');
chdir($directory);

putenv('COMPOSER_ROOT_VERSION='.$package->getPrettyVersion());

return $installedFromVcs;
}

protected function createDownloadManager(IOInterface $io, Config $config)
{
$factory = new Factory();

return $factory->createDownloadManager($io, $config);
}

protected function createInstallationManager()
{
return new InstallationManager();
}
}
<?php











namespace Composer\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;




class AboutCommand extends Command
{
protected function configure()
{
$this
->setName('about')
->setDescription('Short information about Composer')
->setHelp(<<<EOT
<info>php composer.phar about</info>
EOT
)
;
}

protected function execute(InputInterface $input, OutputInterface $output)
{
$output->writeln(<<<EOT
<info>Composer - Package Management for PHP</info>
<comment>Composer is a dependency manager tracking local dependencies of your projects and libraries.
See http://getcomposer.org/ for more information.</comment>
EOT
);

}
}
<?php











namespace Composer\Command;

use Composer\Composer;
use Composer\DependencyResolver\Pool;
use Composer\DependencyResolver\DefaultPolicy;
use Composer\Factory;
use Composer\Package\CompletePackageInterface;
use Composer\Package\Version\VersionParser;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Composer\Repository\ArrayRepository;
use Composer\Repository\CompositeRepository;
use Composer\Repository\ComposerRepository;
use Composer\Repository\PlatformRepository;
use Composer\Repository\RepositoryInterface;





class ShowCommand extends Command
{
protected $versionParser;

protected function configure()
{
$this
->setName('show')
->setDescription('Show information about packages')
->setDefinition(array(
new InputArgument('package', InputArgument::OPTIONAL, 'Package to inspect'),
new InputArgument('version', InputArgument::OPTIONAL, 'Version or version constraint to inspect'),
new InputOption('installed', 'i', InputOption::VALUE_NONE, 'List installed packages only'),
new InputOption('platform', 'p', InputOption::VALUE_NONE, 'List platform packages only'),
new InputOption('available', 'a', InputOption::VALUE_NONE, 'List available packages only'),
new InputOption('self', 's', InputOption::VALUE_NONE, 'Show the root package information'),
new InputOption('name-only', 'N', InputOption::VALUE_NONE, 'List package names only'),
))
->setHelp(<<<EOT
The show command displays detailed information about a package, or
lists all packages available.

EOT
)
;
}

protected function execute(InputInterface $input, OutputInterface $output)
{
$this->versionParser = new VersionParser;


 $platformRepo = new PlatformRepository;

if ($input->getOption('self')) {
$package = $this->getComposer(false)->getPackage();
$repos = $installedRepo = new ArrayRepository(array($package));
} elseif ($input->getOption('platform')) {
$repos = $installedRepo = $platformRepo;
} elseif ($input->getOption('installed')) {
$repos = $installedRepo = $this->getComposer()->getRepositoryManager()->getLocalRepository();
} elseif ($input->getOption('available')) {
$installedRepo = $platformRepo;
if ($composer = $this->getComposer(false)) {
$repos = new CompositeRepository($composer->getRepositoryManager()->getRepositories());
} else {
$defaultRepos = Factory::createDefaultRepositories($this->getIO());
$repos = new CompositeRepository($defaultRepos);
$output->writeln('No composer.json found in the current directory, showing available packages from ' . implode(', ', array_keys($defaultRepos)));
}
} elseif ($composer = $this->getComposer(false)) {
$composer = $this->getComposer();
$localRepo = $composer->getRepositoryManager()->getLocalRepository();
$installedRepo = new CompositeRepository(array($localRepo, $platformRepo));
$repos = new CompositeRepository(array_merge(array($installedRepo), $composer->getRepositoryManager()->getRepositories()));
} else {
$defaultRepos = Factory::createDefaultRepositories($this->getIO());
$output->writeln('No composer.json found in the current directory, showing available packages from ' . implode(', ', array_keys($defaultRepos)));
$installedRepo = $platformRepo;
$repos = new CompositeRepository(array_merge(array($installedRepo), $defaultRepos));
}


 if ($input->getArgument('package') || !empty($package)) {
$versions = array();
if (empty($package)) {
list($package, $versions) = $this->getPackage($installedRepo, $repos, $input->getArgument('package'), $input->getArgument('version'));

if (!$package) {
throw new \InvalidArgumentException('Package '.$input->getArgument('package').' not found');
}
} else {
$versions = array($package->getPrettyVersion() => $package->getVersion());
}

$this->printMeta($input, $output, $package, $versions, $installedRepo, $repos);
$this->printLinks($input, $output, $package, 'requires');
$this->printLinks($input, $output, $package, 'devRequires', 'requires (dev)');
if ($package->getSuggests()) {
$output->writeln("\n<info>suggests</info>");
foreach ($package->getSuggests() as $suggested => $reason) {
$output->writeln($suggested . ' <comment>' . $reason . '</comment>');
}
}
$this->printLinks($input, $output, $package, 'provides');
$this->printLinks($input, $output, $package, 'conflicts');
$this->printLinks($input, $output, $package, 'replaces');

return;
}


 $packages = array();

if ($repos instanceof CompositeRepository) {
$repos = $repos->getRepositories();
} elseif (!is_array($repos)) {
$repos = array($repos);
}

foreach ($repos as $repo) {
if ($repo === $platformRepo) {
$type = '<info>platform</info>:';
} elseif (
$repo === $installedRepo
|| ($installedRepo instanceof CompositeRepository && in_array($repo, $installedRepo->getRepositories(), true))
) {
$type = '<info>installed</info>:';
} else {
$type = '<comment>available</comment>:';
}
if ($repo instanceof ComposerRepository && $repo->hasProviders()) {
foreach ($repo->getProviderNames() as $name) {
$packages[$type][$name] = $name;
}
} else {
foreach ($repo->getPackages() as $package) {
if (!isset($packages[$type][$package->getName()])
|| !is_object($packages[$type][$package->getName()])
|| version_compare($packages[$type][$package->getName()]->getVersion(), $package->getVersion(), '<')
) {
$packages[$type][$package->getName()] = $package;
}
}
}
}

$tree = !$input->getOption('platform') && !$input->getOption('installed') && !$input->getOption('available');
$indent = $tree ? '  ' : '';
foreach (array('<info>platform</info>:' => true, '<comment>available</comment>:' => false, '<info>installed</info>:' => true) as $type => $showVersion) {
if (isset($packages[$type])) {
if ($tree) {
$output->writeln($type);
}
ksort($packages[$type]);

$nameLength = $versionLength = 0;
foreach ($packages[$type] as $package) {
if (is_object($package)) {
$nameLength = max($nameLength, strlen($package->getPrettyName()));
$versionLength = max($versionLength, strlen($this->versionParser->formatVersion($package)));
} else {
$nameLength = max($nameLength, $package);
}
}
list($width) = $this->getApplication()->getTerminalDimensions();
if (defined('PHP_WINDOWS_VERSION_BUILD')) {
$width--;
}

$writeVersion = !$input->getOption('name-only') && $showVersion && ($nameLength + $versionLength + 3 <= $width);
$writeDescription = !$input->getOption('name-only') && ($nameLength + ($showVersion ? $versionLength : 0) + 24 <= $width);
foreach ($packages[$type] as $package) {
if (is_object($package)) {
$output->write($indent . str_pad($package->getPrettyName(), $nameLength, ' '), false);

if ($writeVersion) {
$output->write(' ' . str_pad($this->versionParser->formatVersion($package), $versionLength, ' '), false);
}

if ($writeDescription) {
$description = strtok($package->getDescription(), "\r\n");
$remaining = $width - $nameLength - $versionLength - 4;
if (strlen($description) > $remaining) {
$description = substr($description, 0, $remaining - 3) . '...';
}
$output->write(' ' . $description);
}
} else {
$output->write($indent . $package);
}
$output->writeln('');
}
if ($tree) {
$output->writeln('');
}
}
}
}











protected function getPackage(RepositoryInterface $installedRepo, RepositoryInterface $repos, $name, $version = null)
{
$name = strtolower($name);
$constraint = null;
if ($version) {
$constraint = $this->versionParser->parseConstraints($version);
}

$policy = new DefaultPolicy();
$pool = new Pool('dev');
$pool->addRepository($repos);

$matchedPackage = null;
$versions = array();
$matches = $pool->whatProvides($name, $constraint);
foreach ($matches as $index => $package) {

 if ($package->getName() !== $name) {
unset($matches[$index]);
continue;
}


 if (null === $version && $installedRepo->hasPackage($package)) {
$matchedPackage = $package;
}

$versions[$package->getPrettyVersion()] = $package->getVersion();
$matches[$index] = $package->getId();
}


 if (!$matchedPackage && $matches && $prefered = $policy->selectPreferedPackages($pool, array(), $matches)) {
$matchedPackage = $pool->literalToPackage($prefered[0]);
}

return array($matchedPackage, $versions);
}




protected function printMeta(InputInterface $input, OutputInterface $output, CompletePackageInterface $package, array $versions, RepositoryInterface $installedRepo, RepositoryInterface $repos)
{
$output->writeln('<info>name</info>     : ' . $package->getPrettyName());
$output->writeln('<info>descrip.</info> : ' . $package->getDescription());
$output->writeln('<info>keywords</info> : ' . join(', ', $package->getKeywords() ?: array()));
$this->printVersions($input, $output, $package, $versions, $installedRepo, $repos);
$output->writeln('<info>type</info>     : ' . $package->getType());
$output->writeln('<info>license</info>  : ' . implode(', ', $package->getLicense()));
$output->writeln('<info>source</info>   : ' . sprintf('[%s] <comment>%s</comment> %s', $package->getSourceType(), $package->getSourceUrl(), $package->getSourceReference()));
$output->writeln('<info>dist</info>     : ' . sprintf('[%s] <comment>%s</comment> %s', $package->getDistType(), $package->getDistUrl(), $package->getDistReference()));
$output->writeln('<info>names</info>    : ' . implode(', ', $package->getNames()));

if ($package->getSupport()) {
$output->writeln("\n<info>support</info>");
foreach ($package->getSupport() as $type => $value) {
$output->writeln('<comment>' . $type . '</comment> : '.$value);
}
}

if ($package->getAutoload()) {
$output->writeln("\n<info>autoload</info>");
foreach ($package->getAutoload() as $type => $autoloads) {
$output->writeln('<comment>' . $type . '</comment>');

if ($type === 'psr-0') {
foreach ($autoloads as $name => $path) {
$output->writeln(($name ?: '*') . ' => ' . ($path ?: '.'));
}
} elseif ($type === 'classmap') {
$output->writeln(implode(', ', $autoloads));
}
}
if ($package->getIncludePaths()) {
$output->writeln('<comment>include-path</comment>');
$output->writeln(implode(', ', $package->getIncludePaths()));
}
}
}




protected function printVersions(InputInterface $input, OutputInterface $output, CompletePackageInterface $package, array $versions, RepositoryInterface $installedRepo, RepositoryInterface $repos)
{
uasort($versions, 'version_compare');
$versions = array_keys(array_reverse($versions));


 if ($installedRepo->hasPackage($package)) {
$installedVersion = $package->getPrettyVersion();
$key = array_search($installedVersion, $versions);
if (false !== $key) {
$versions[$key] = '<info>* ' . $installedVersion . '</info>';
}
}

$versions = implode(', ', $versions);

$output->writeln('<info>versions</info> : ' . $versions);
}










protected function printLinks(InputInterface $input, OutputInterface $output, CompletePackageInterface $package, $linkType, $title = null)
{
$title = $title ?: $linkType;
if ($links = $package->{'get'.ucfirst($linkType)}()) {
$output->writeln("\n<info>" . $title . "</info>");

foreach ($links as $link) {
$output->writeln($link->getTarget() . ' <comment>' . $link->getPrettyConstraint() . '</comment>');
}
}
}
}
<?php











namespace Composer\Command;

use Composer\Installer;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;




class UpdateCommand extends Command
{
protected function configure()
{
$this
->setName('update')
->setDescription('Updates your dependencies to the latest version according to composer.json, and updates the composer.lock file.')
->setDefinition(array(
new InputArgument('packages', InputArgument::IS_ARRAY | InputArgument::OPTIONAL, 'Packages that should be updated, if not provided all packages are.'),
new InputOption('prefer-source', null, InputOption::VALUE_NONE, 'Forces installation from package sources when possible, including VCS information.'),
new InputOption('prefer-dist', null, InputOption::VALUE_NONE, 'Forces installation from package dist even for dev versions.'),
new InputOption('dry-run', null, InputOption::VALUE_NONE, 'Outputs the operations but will not execute anything (implicitly enables --verbose).'),
new InputOption('dev', null, InputOption::VALUE_NONE, 'Enables installation of require-dev packages (enabled by default, only present for BC).'),
new InputOption('no-dev', null, InputOption::VALUE_NONE, 'Disables installation of require-dev packages.'),
new InputOption('lock', null, InputOption::VALUE_NONE, 'Only updates the lock file hash to suppress warning about the lock file being out of date.'),
new InputOption('no-custom-installers', null, InputOption::VALUE_NONE, 'Disables all custom installers.'),
new InputOption('no-scripts', null, InputOption::VALUE_NONE, 'Skips the execution of all scripts defined in composer.json file.'),
new InputOption('no-progress', null, InputOption::VALUE_NONE, 'Do not output download progress.'),
new InputOption('verbose', 'v|vv|vvv', InputOption::VALUE_NONE, 'Shows more details including new commits pulled in when updating packages.'),
new InputOption('optimize-autoloader', 'o', InputOption::VALUE_NONE, 'Optimize autoloader during autoloader dump')
))
->setHelp(<<<EOT
The <info>update</info> command reads the composer.json file from the
current directory, processes it, and updates, removes or installs all the
dependencies.

<info>php composer.phar update</info>

To limit the update operation to a few packages, you can list the package(s)
you want to update as such:

<info>php composer.phar update vendor/package1 foo/mypackage [...]</info>
EOT
)
;
}

protected function execute(InputInterface $input, OutputInterface $output)
{
$composer = $this->getComposer();
$composer->getDownloadManager()->setOutputProgress(!$input->getOption('no-progress'));
$io = $this->getIO();
$install = Installer::create($io, $composer);

$preferSource = false;
$preferDist = false;
switch ($composer->getConfig()->get('preferred-install')) {
case 'source':
$preferSource = true;
break;
case 'dist':
$preferDist = true;
break;
case 'auto':
default:

 break;
}
if ($input->getOption('prefer-source') || $input->getOption('prefer-dist')) {
$preferSource = $input->getOption('prefer-source');
$preferDist = $input->getOption('prefer-dist');
}

$install
->setDryRun($input->getOption('dry-run'))
->setVerbose($input->getOption('verbose'))
->setPreferSource($preferSource)
->setPreferDist($preferDist)
->setDevMode(!$input->getOption('no-dev'))
->setRunScripts(!$input->getOption('no-scripts'))
->setOptimizeAutoloader($input->getOption('optimize-autoloader'))
->setUpdate(true)
->setUpdateWhitelist($input->getOption('lock') ? array('lock') : $input->getArgument('packages'))
;

if ($input->getOption('no-custom-installers')) {
$install->disableCustomInstallers();
}

return $install->run() ? 0 : 1;
}
}
<?php











namespace Composer\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Composer\Config;
use Composer\Config\JsonConfigSource;
use Composer\Factory;
use Composer\Json\JsonFile;





class ConfigCommand extends Command
{



protected $config;




protected $configFile;




protected $configSource;




protected function configure()
{
$this
->setName('config')
->setDescription('Set config options')
->setDefinition(array(
new InputOption('global', 'g', InputOption::VALUE_NONE, 'Apply command to the global config file'),
new InputOption('editor', 'e', InputOption::VALUE_NONE, 'Open editor'),
new InputOption('unset', null, InputOption::VALUE_NONE, 'Unset the given setting-key'),
new InputOption('list', 'l', InputOption::VALUE_NONE, 'List configuration settings'),
new InputOption('file', 'f', InputOption::VALUE_REQUIRED, 'If you want to choose a different composer.json or config.json', 'composer.json'),
new InputArgument('setting-key', null, 'Setting key'),
new InputArgument('setting-value', InputArgument::IS_ARRAY, 'Setting value'),
))
->setHelp(<<<EOT
This command allows you to edit some basic composer settings in either the
local composer.json file or the global config.json file.

To edit the global config.json file:

    <comment>%command.full_name% --global</comment>

To add a repository:

    <comment>%command.full_name% repositories.foo vcs http://bar.com</comment>

You can add a repository to the global config.json file by passing in the
<info>--global</info> option.

To edit the file in an external editor:

    <comment>%command.full_name% --editor</comment>

To choose your editor you can set the "EDITOR" env variable.

To get a list of configuration values in the file:

    <comment>%command.full_name% --list</comment>

You can always pass more than one option. As an example, if you want to edit the
global config.json file.

    <comment>%command.full_name% --editor --global</comment>
EOT
)
;
}




protected function initialize(InputInterface $input, OutputInterface $output)
{
if ($input->getOption('global') && 'composer.json' !== $input->getOption('file')) {
throw new \RuntimeException('--file and --global can not be combined');
}

$this->config = Factory::createConfig();


 
 $configFile = $input->getOption('global')
? ($this->config->get('home') . '/config.json')
: $input->getOption('file');

$this->configFile = new JsonFile($configFile);
$this->configSource = new JsonConfigSource($this->configFile);


 if ($input->getOption('global') && !$this->configFile->exists()) {
touch($this->configFile->getPath());
$this->configFile->write(array('config' => new \ArrayObject));
chmod($this->configFile->getPath(), 0600);
}

if (!$this->configFile->exists()) {
throw new \RuntimeException('No composer.json found in the current directory');
}
}




protected function execute(InputInterface $input, OutputInterface $output)
{

 if ($input->getOption('editor')) {
$editor = getenv('EDITOR');
if (!$editor) {
if (defined('PHP_WINDOWS_VERSION_BUILD')) {
$editor = 'notepad';
} else {
foreach (array('vim', 'vi', 'nano', 'pico', 'ed') as $candidate) {
if (exec('which '.$candidate)) {
$editor = $candidate;
break;
}
}
}
}

system($editor . ' ' . $this->configFile->getPath() . (defined('PHP_WINDOWS_VERSION_BUILD') ? '': ' > `tty`'));

return 0;
}

if (!$input->getOption('global')) {
$this->config->merge($this->configFile->read());
}


 if ($input->getOption('list')) {
$this->listConfiguration($this->config->all(), $this->config->raw(), $output);

return 0;
}

$settingKey = $input->getArgument('setting-key');
if (!$settingKey) {
return 0;
}


 if (array() !== $input->getArgument('setting-value') && $input->getOption('unset')) {
throw new \RuntimeException('You can not combine a setting value with --unset');
}


 if (array() === $input->getArgument('setting-value') && !$input->getOption('unset')) {
$data = $this->config->all();
if (preg_match('/^repos?(?:itories)?(?:\.(.+))?/', $settingKey, $matches)) {
if (empty($matches[1])) {
$value = isset($data['repositories']) ? $data['repositories'] : array();
} else {
if (!isset($data['repositories'][$matches[1]])) {
throw new \InvalidArgumentException('There is no '.$matches[1].' repository defined');
}

$value = $data['repositories'][$matches[1]];
}
} elseif (strpos($settingKey, '.')) {
$bits = explode('.', $settingKey);
$data = $data['config'];
foreach ($bits as $bit) {
if (isset($data[$bit])) {
$data = $data[$bit];
} elseif (isset($data[implode('.', $bits)])) {

 $data = $data[implode('.', $bits)];
break;
} else {
throw new \RuntimeException($settingKey.' is not defined');
}
array_shift($bits);
}

$value = $data;
} elseif (isset($data['config'][$settingKey])) {
$value = $data['config'][$settingKey];
} else {
throw new \RuntimeException($settingKey.' is not defined');
}

if (is_array($value)) {
$value = json_encode($value);
}

$output->writeln($value);

return 0;
}

$values = $input->getArgument('setting-value'); 


 if (preg_match('/^repos?(?:itories)?\.(.+)/', $settingKey, $matches)) {
if ($input->getOption('unset')) {
return $this->configSource->removeRepository($matches[1]);
}

if (2 !== count($values)) {
throw new \RuntimeException('You must pass the type and a url. Example: php composer.phar config repositories.foo vcs http://bar.com');
}

return $this->configSource->addRepository($matches[1], array(
'type' => $values[0],
'url' => $values[1],
));
}


 if (preg_match('/^github-oauth\.(.+)/', $settingKey, $matches)) {
if ($input->getOption('unset')) {
return $this->configSource->removeConfigSetting('github-oauth.'.$matches[1]);
}

if (1 !== count($values)) {
throw new \RuntimeException('Too many arguments, expected only one token');
}

return $this->configSource->addConfigSetting('github-oauth.'.$matches[1], $values[0]);
}

$booleanValidator = function ($val) { return in_array($val, array('true', 'false', '1', '0'), true); };
$booleanNormalizer = function ($val) { return $val !== 'false' && (bool) $val; };


 $uniqueConfigValues = array(
'process-timeout' => array('is_numeric', 'intval'),
'use-include-path' => array(
$booleanValidator,
$booleanNormalizer
),
'preferred-install' => array(
function ($val) { return in_array($val, array('auto', 'source', 'dist'), true); },
function ($val) { return $val; }
),
'notify-on-install' => array(
$booleanValidator,
$booleanNormalizer
),
'vendor-dir' => array('is_string', function ($val) { return $val; }),
'bin-dir' => array('is_string', function ($val) { return $val; }),
'cache-dir' => array('is_string', function ($val) { return $val; }),
'cache-files-dir' => array('is_string', function ($val) { return $val; }),
'cache-repo-dir' => array('is_string', function ($val) { return $val; }),
'cache-vcs-dir' => array('is_string', function ($val) { return $val; }),
'cache-ttl' => array('is_numeric', 'intval'),
'cache-files-ttl' => array('is_numeric', 'intval'),
'cache-files-maxsize' => array(
function ($val) { return preg_match('/^\s*([0-9.]+)\s*(?:([kmg])(?:i?b)?)?\s*$/i', $val) > 0; },
function ($val) { return $val; }
),
'discard-changes' => array(
function ($val) { return in_array($val, array('stash', 'true', 'false', '1', '0'), true); },
function ($val) {
if ('stash' === $val) {
return 'stash';
}

return $val !== 'false' && (bool) $val;
}
),
);
$multiConfigValues = array(
'github-protocols' => array(
function ($vals) {
if (!is_array($vals)) {
return 'array expected';
}

foreach ($vals as $val) {
if (!in_array($val, array('git', 'https'))) {
return 'valid protocols include: git, https';
}
}

return true;
},
function ($vals) {
return $vals;
}
),
);

foreach ($uniqueConfigValues as $name => $callbacks) {
if ($settingKey === $name) {
if ($input->getOption('unset')) {
return $this->configSource->removeConfigSetting($settingKey);
}

list($validator, $normalizer) = $callbacks;
if (1 !== count($values)) {
throw new \RuntimeException('You can only pass one value. Example: php composer.phar config process-timeout 300');
}

if (true !== $validation = $validator($values[0])) {
throw new \RuntimeException(sprintf(
'"%s" is an invalid value'.($validation ? ' ('.$validation.')' : ''),
$values[0]
));
}

return $this->configSource->addConfigSetting($settingKey, $normalizer($values[0]));
}
}

foreach ($multiConfigValues as $name => $callbacks) {
if ($settingKey === $name) {
if ($input->getOption('unset')) {
return $this->configSource->removeConfigSetting($settingKey);
}

list($validator, $normalizer) = $callbacks;
if (true !== $validation = $validator($values)) {
throw new \RuntimeException(sprintf(
'%s is an invalid value'.($validation ? ' ('.$validation.')' : ''),
json_encode($values)
));
}

return $this->configSource->addConfigSetting($settingKey, $normalizer($values));
}
}

throw new \InvalidArgumentException('Setting '.$settingKey.' does not exist or is not supported by this command');
}









protected function listConfiguration(array $contents, array $rawContents, OutputInterface $output, $k = null)
{
$origK = $k;
foreach ($contents as $key => $value) {
if ($k === null && !in_array($key, array('config', 'repositories'))) {
continue;
}

$rawVal = isset($rawContents[$key]) ? $rawContents[$key] : null;

if (is_array($value) && (!is_numeric(key($value)) || ($key === 'repositories' && null === $k))) {
$k .= preg_replace('{^config\.}', '', $key . '.');
$this->listConfiguration($value, $rawVal, $output, $k);

if (substr_count($k, '.') > 1) {
$k = str_split($k, strrpos($k, '.', -2));
$k = $k[0] . '.';
} else {
$k = $origK;
}

continue;
}

if (is_array($value)) {
$value = array_map(function ($val) {
return is_array($val) ? json_encode($val) : $val;
}, $value);

$value = '['.implode(', ', $value).']';
}

if (is_bool($value)) {
$value = var_export($value, true);
}

if (is_string($rawVal) && $rawVal != $value) {
$output->writeln('[<comment>' . $k . $key . '</comment>] <info>' . $rawVal . ' (' . $value . ')</info>');
} else {
$output->writeln('[<comment>' . $k . $key . '</comment>] <info>' . $value . '</info>');
}
}
}
}
<?php











namespace Composer\Command;

use Composer\Installer;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;






class InstallCommand extends Command
{
protected function configure()
{
$this
->setName('install')
->setDescription('Installs the project dependencies from the composer.lock file if present, or falls back on the composer.json.')
->setDefinition(array(
new InputOption('prefer-source', null, InputOption::VALUE_NONE, 'Forces installation from package sources when possible, including VCS information.'),
new InputOption('prefer-dist', null, InputOption::VALUE_NONE, 'Forces installation from package dist even for dev versions.'),
new InputOption('dry-run', null, InputOption::VALUE_NONE, 'Outputs the operations but will not execute anything (implicitly enables --verbose).'),
new InputOption('dev', null, InputOption::VALUE_NONE, 'Enables installation of require-dev packages (enabled by default, only present for BC).'),
new InputOption('no-dev', null, InputOption::VALUE_NONE, 'Disables installation of require-dev packages.'),
new InputOption('no-custom-installers', null, InputOption::VALUE_NONE, 'Disables all custom installers.'),
new InputOption('no-scripts', null, InputOption::VALUE_NONE, 'Skips the execution of all scripts defined in composer.json file.'),
new InputOption('no-progress', null, InputOption::VALUE_NONE, 'Do not output download progress.'),
new InputOption('verbose', 'v|vv|vvv', InputOption::VALUE_NONE, 'Shows more details including new commits pulled in when updating packages.'),
new InputOption('optimize-autoloader', 'o', InputOption::VALUE_NONE, 'Optimize autoloader during autoloader dump')
))
->setHelp(<<<EOT
The <info>install</info> command reads the composer.lock file from
the current directory, processes it, and downloads and installs all the
libraries and dependencies outlined in that file. If the file does not
exist it will look for composer.json and do the same.

<info>php composer.phar install</info>

EOT
)
;
}

protected function execute(InputInterface $input, OutputInterface $output)
{
$composer = $this->getComposer();
$composer->getDownloadManager()->setOutputProgress(!$input->getOption('no-progress'));
$io = $this->getIO();
$install = Installer::create($io, $composer);

$preferSource = false;
$preferDist = false;
switch ($composer->getConfig()->get('preferred-install')) {
case 'source':
$preferSource = true;
break;
case 'dist':
$preferDist = true;
break;
case 'auto':
default:

 break;
}
if ($input->getOption('prefer-source') || $input->getOption('prefer-dist')) {
$preferSource = $input->getOption('prefer-source');
$preferDist = $input->getOption('prefer-dist');
}

$install
->setDryRun($input->getOption('dry-run'))
->setVerbose($input->getOption('verbose'))
->setPreferSource($preferSource)
->setPreferDist($preferDist)
->setDevMode(!$input->getOption('no-dev'))
->setRunScripts(!$input->getOption('no-scripts'))
->setOptimizeAutoloader($input->getOption('optimize-autoloader'))
;

if ($input->getOption('no-custom-installers')) {
$install->disableCustomInstallers();
}

return $install->run() ? 0 : 1;
}
}
<?php











namespace Composer\Command;

use Composer\Util\ConfigValidator;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;







class ValidateCommand extends Command
{



protected function configure()
{
$this
->setName('validate')
->setDescription('Validates a composer.json')
->setDefinition(array(
new InputArgument('file', InputArgument::OPTIONAL, 'path to composer.json file', './composer.json')
))
->setHelp(<<<EOT
The validate command validates a given composer.json

EOT
);
}







protected function execute(InputInterface $input, OutputInterface $output)
{
$file = $input->getArgument('file');

if (!file_exists($file)) {
$output->writeln('<error>' . $file . ' not found.</error>');

return 1;
}
if (!is_readable($file)) {
$output->writeln('<error>' . $file . ' is not readable.</error>');

return 1;
}

$validator = new ConfigValidator($this->getIO());
list($errors, $publishErrors, $warnings) = $validator->validate($file);


 if (!$errors && !$publishErrors && !$warnings) {
$output->writeln('<info>' . $file . ' is valid</info>');
} elseif (!$errors && !$publishErrors) {
$output->writeln('<info>' . $file . ' is valid, but with a few warnings</info>');
$output->writeln('<warning>See http://getcomposer.org/doc/04-schema.md for details on the schema</warning>');
} elseif (!$errors) {
$output->writeln('<info>' . $file . ' is valid for simple usage with composer but has</info>');
$output->writeln('<info>strict errors that make it unable to be published as a package:</info>');
$output->writeln('<warning>See http://getcomposer.org/doc/04-schema.md for details on the schema</warning>');
} else {
$output->writeln('<error>' . $file . ' is invalid, the following errors/warnings were found:</error>');
}

$messages = array(
'error' => array_merge($errors, $publishErrors),
'warning' => $warnings,
);

foreach ($messages as $style => $msgs) {
foreach ($msgs as $msg) {
$output->writeln('<' . $style . '>' . $msg . '</' . $style . '>');
}
}

return $errors || $publishErrors ? 1 : 0;
}
}
<?php











namespace Composer\Command;

use Composer\DependencyResolver\Pool;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;





class DependsCommand extends Command
{
protected $linkTypes = array(
'require' => array('requires', 'requires'),
'require-dev' => array('devRequires', 'requires (dev)'),
);

protected function configure()
{
$this
->setName('depends')
->setDescription('Shows which packages depend on the given package')
->setDefinition(array(
new InputArgument('package', InputArgument::REQUIRED, 'Package to inspect'),
new InputOption('link-type', '', InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY, 'Link types to show (require, require-dev)', array_keys($this->linkTypes)),
))
->setHelp(<<<EOT
Displays detailed information about where a package is referenced.

<info>php composer.phar depends composer/composer</info>

EOT
)
;
}

protected function execute(InputInterface $input, OutputInterface $output)
{
$repo = $this->getComposer()->getRepositoryManager()->getLocalRepository();
$needle = $input->getArgument('package');

$pool = new Pool();
$pool->addRepository($repo);

$packages = $pool->whatProvides($needle);
if (empty($packages)) {
throw new \InvalidArgumentException('Could not find package "'.$needle.'" in your project.');
}

$linkTypes = $this->linkTypes;

$types = array_map(function ($type) use ($linkTypes) {
$type = rtrim($type, 's');
if (!isset($linkTypes[$type])) {
throw new \InvalidArgumentException('Unexpected link type: '.$type.', valid types: '.implode(', ', array_keys($linkTypes)));
}

return $type;
}, $input->getOption('link-type'));

$messages = array();
$outputPackages = array();
foreach ($repo->getPackages() as $package) {
foreach ($types as $type) {
foreach ($package->{'get'.$linkTypes[$type][0]}() as $link) {
if ($link->getTarget() === $needle) {
if (!isset($outputPackages[$package->getName()])) {
$messages[] = '<info>'.$package->getPrettyName() . '</info> ' . $linkTypes[$type][1] . ' ' . $needle .' (<info>' . $link->getPrettyConstraint() . '</info>)';
$outputPackages[$package->getName()] = true;
}
}
}
}
}

if ($messages) {
sort($messages);
$output->writeln($messages);
} else {
$output->writeln('<info>There is no installed package depending on "'.$needle.'".</info>');
}
}
}
<?php











namespace Composer\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Composer\Repository\CompositeRepository;
use Composer\Repository\PlatformRepository;
use Composer\Repository\RepositoryInterface;
use Composer\Factory;




class SearchCommand extends Command
{
protected $matches;
protected $lowMatches = array();
protected $tokens;
protected $output;
protected $onlyName;

protected function configure()
{
$this
->setName('search')
->setDescription('Search for packages')
->setDefinition(array(
new InputOption('only-name', 'N', InputOption::VALUE_NONE, 'Search only in name'),
new InputArgument('tokens', InputArgument::IS_ARRAY | InputArgument::REQUIRED, 'tokens to search for'),
))
->setHelp(<<<EOT
The search command searches for packages by its name
<info>php composer.phar search symfony composer</info>

EOT
)
;
}

protected function execute(InputInterface $input, OutputInterface $output)
{

 $platformRepo = new PlatformRepository;
if ($composer = $this->getComposer(false)) {
$localRepo = $composer->getRepositoryManager()->getLocalRepository();
$installedRepo = new CompositeRepository(array($localRepo, $platformRepo));
$repos = new CompositeRepository(array_merge(array($installedRepo), $composer->getRepositoryManager()->getRepositories()));
} else {
$defaultRepos = Factory::createDefaultRepositories($this->getIO());
$output->writeln('No composer.json found in the current directory, showing packages from ' . implode(', ', array_keys($defaultRepos)));
$installedRepo = $platformRepo;
$repos = new CompositeRepository(array_merge(array($installedRepo), $defaultRepos));
}

$onlyName = $input->getOption('only-name');

$flags = $onlyName ? RepositoryInterface::SEARCH_NAME : RepositoryInterface::SEARCH_FULLTEXT;
$results = $repos->search(implode(' ', $input->getArgument('tokens')), $flags);

foreach ($results as $result) {
$output->writeln($result['name'] . (isset($result['description']) ? ' '. $result['description'] : ''));
}
}
}
<?php











namespace Composer\Command;

use Composer\Composer;
use Composer\Util\RemoteFilesystem;
use Composer\Downloader\FilesystemException;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;




class SelfUpdateCommand extends Command
{
protected function configure()
{
$this
->setName('self-update')
->setAliases(array('selfupdate'))
->setDescription('Updates composer.phar to the latest version.')
->setHelp(<<<EOT
The <info>self-update</info> command checks getcomposer.org for newer
versions of composer and if found, installs the latest.

<info>php composer.phar self-update</info>

EOT
)
;
}

protected function execute(InputInterface $input, OutputInterface $output)
{
$localFilename = realpath($_SERVER['argv'][0]) ?: $_SERVER['argv'][0];
$tempFilename = dirname($localFilename) . '/' . basename($localFilename, '.phar').'-temp.phar';


 if (!is_writable($tempDirectory = dirname($tempFilename))) {
throw new FilesystemException('Composer update failed: the "'.$tempDirectory.'" directory used to download the temp file could not be written');
}

if (!is_writable($localFilename)) {
throw new FilesystemException('Composer update failed: the "'.$localFilename. '" file could not be written');
}

$protocol = extension_loaded('openssl') ? 'https' : 'http';
$rfs = new RemoteFilesystem($this->getIO());
$latest = trim($rfs->getContents('getcomposer.org', $protocol . '://getcomposer.org/version', false));

if (Composer::VERSION !== $latest) {
$output->writeln(sprintf("Updating to version <info>%s</info>.", $latest));

$remoteFilename = $protocol . '://getcomposer.org/composer.phar';

$rfs->copy('getcomposer.org', $remoteFilename, $tempFilename);

if (!file_exists($tempFilename)) {
$output->writeln('<error>The download of the new composer version failed for an unexpected reason');

return 1;
}

try {
chmod($tempFilename, 0777 & ~umask());

 $phar = new \Phar($tempFilename);

 unset($phar);
rename($tempFilename, $localFilename);
} catch (\Exception $e) {
@unlink($tempFilename);
if (!$e instanceof \UnexpectedValueException && !$e instanceof \PharException) {
throw $e;
}
$output->writeln('<error>The download is corrupted ('.$e->getMessage().').</error>');
$output->writeln('<error>Please re-run the self-update command to try again.</error>');
}
} else {
$output->writeln("<info>You are using the latest composer version.</info>");
}
}
}
<?php











namespace Composer\Command;

use Composer\Package\PackageInterface;
use Composer\Json\JsonFile;
use Composer\Package\Version\VersionParser;
use Symfony\Component\Console\Helper\TableHelper;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;




class LicensesCommand extends Command
{
protected function configure()
{
$this
->setName('licenses')
->setDescription('Show information about licenses of dependencies')
->setDefinition(array(
new InputOption('format', 'f', InputOption::VALUE_REQUIRED, 'Format of the output: text or json', 'text'),
))
->setHelp(<<<EOT
The license command displays detailed information about the licenses of
the installed dependencies.

EOT
)
;
}

protected function execute(InputInterface $input, OutputInterface $output)
{
$composer = $this->getComposer();
$root = $composer->getPackage();
$repo = $composer->getRepositoryManager()->getLocalRepository();

$versionParser = new VersionParser;

foreach ($repo->getPackages() as $package) {
$packages[$package->getName()] = $package;
}

ksort($packages);

switch ($format = $input->getOption('format')) {
case 'text':
$output->writeln('Name: <comment>'.$root->getPrettyName().'</comment>');
$output->writeln('Version: <comment>'.$versionParser->formatVersion($root).'</comment>');
$output->writeln('Licenses: <comment>'.(implode(', ', $root->getLicense()) ?: 'none').'</comment>');
$output->writeln('Dependencies:');

$table = $this->getHelperSet()->get('table');
$table->setLayout(TableHelper::LAYOUT_BORDERLESS);
$table->setHorizontalBorderChar('');
foreach ($packages as $package) {
$table->addRow(array(
$package->getPrettyName(),
$versionParser->formatVersion($package),
implode(', ', $package->getLicense()) ?: 'none',
));
}
$table->render($output);
break;

case 'json':
foreach ($packages as $package) {
$dependencies[$package->getPrettyName()] = array(
'version' => $versionParser->formatVersion($package),
'license' => $package->getLicense(),
);
}

$output->writeln(JsonFile::encode(array(
'name' => $root->getPrettyName(),
'version' => $versionParser->formatVersion($root),
'license' => $root->getLicense(),
'dependencies' => $dependencies,
)));
break;

default:
throw new \RuntimeException(sprintf('Unsupported format "%s".  See help for supported formats.', $format));
}
}
}
<?php











namespace Composer\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Composer\Factory;
use Composer\Installer;
use Composer\Json\JsonFile;
use Composer\Json\JsonManipulator;
use Composer\Package\Version\VersionParser;





class RequireCommand extends InitCommand
{
protected function configure()
{
$this
->setName('require')
->setDescription('Adds required packages to your composer.json and installs them')
->setDefinition(array(
new InputArgument('packages', InputArgument::IS_ARRAY | InputArgument::OPTIONAL, 'Required package with a version constraint, e.g. foo/bar:1.0.0 or foo/bar=1.0.0 or "foo/bar 1.0.0"'),
new InputOption('dev', null, InputOption::VALUE_NONE, 'Add requirement to require-dev.'),
new InputOption('prefer-source', null, InputOption::VALUE_NONE, 'Forces installation from package sources when possible, including VCS information.'),
new InputOption('prefer-dist', null, InputOption::VALUE_NONE, 'Forces installation from package dist even for dev versions.'),
new InputOption('no-progress', null, InputOption::VALUE_NONE, 'Do not output download progress.'),
new InputOption('no-update', null, InputOption::VALUE_NONE, 'Disables the automatic update of the dependencies.'),
))
->setHelp(<<<EOT
The require command adds required packages to your composer.json and installs them

If you do not want to install the new dependencies immediately you can call it with --no-update

EOT
)
;
}

protected function execute(InputInterface $input, OutputInterface $output)
{
$file = Factory::getComposerFile();

if (!file_exists($file) && !file_put_contents($file, "{\n}\n")) {
$output->writeln('<error>'.$file.' could not be created.</error>');

return 1;
}
if (!is_readable($file)) {
$output->writeln('<error>'.$file.' is not readable.</error>');

return 1;
}
if (!is_writable($file)) {
$output->writeln('<error>'.$file.' is not writable.</error>');

return 1;
}

$json = new JsonFile($file);
$composer = $json->read();
$composerBackup = file_get_contents($json->getPath());

$requirements = $this->determineRequirements($input, $output, $input->getArgument('packages'));

$requireKey = $input->getOption('dev') ? 'require-dev' : 'require';
$baseRequirements = array_key_exists($requireKey, $composer) ? $composer[$requireKey] : array();
$requirements = $this->formatRequirements($requirements);


 $versionParser = new VersionParser();
foreach ($requirements as $constraint) {
$versionParser->parseConstraints($constraint);
}

if (!$this->updateFileCleanly($json, $baseRequirements, $requirements, $requireKey)) {
foreach ($requirements as $package => $version) {
$baseRequirements[$package] = $version;
}

$composer[$requireKey] = $baseRequirements;
$json->write($composer);
}

$output->writeln('<info>'.$file.' has been updated</info>');

if ($input->getOption('no-update')) {
return 0;
}


 $composer = $this->getComposer();
$composer->getDownloadManager()->setOutputProgress(!$input->getOption('no-progress'));
$io = $this->getIO();
$install = Installer::create($io, $composer);

$install
->setVerbose($input->getOption('verbose'))
->setPreferSource($input->getOption('prefer-source'))
->setPreferDist($input->getOption('prefer-dist'))
->setDevMode(true)
->setUpdate(true)
->setUpdateWhitelist(array_keys($requirements));
;

if (!$install->run()) {
$output->writeln("\n".'<error>Installation failed, reverting '.$file.' to its original content.</error>');
file_put_contents($json->getPath(), $composerBackup);

return 1;
}

return 0;
}

private function updateFileCleanly($json, array $base, array $new, $requireKey)
{
$contents = file_get_contents($json->getPath());

$manipulator = new JsonManipulator($contents);

foreach ($new as $package => $constraint) {
if (!$manipulator->addLink($requireKey, $package, $constraint)) {
return false;
}
}

file_put_contents($json->getPath(), $manipulator->getContents());

return true;
}

protected function interact(InputInterface $input, OutputInterface $output)
{
return;
}
}
<?php











namespace Composer\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;




class DumpAutoloadCommand extends Command
{
protected function configure()
{
$this
->setName('dump-autoload')
->setAliases(array('dumpautoload'))
->setDescription('Dumps the autoloader')
->setDefinition(array(
new InputOption('optimize', 'o', InputOption::VALUE_NONE, 'Optimizes PSR0 packages to be loaded with classmaps too, good for production.'),
))
->setHelp(<<<EOT
<info>php composer.phar dump-autoload</info>
EOT
)
;
}

protected function execute(InputInterface $input, OutputInterface $output)
{
$output->writeln('<info>Generating autoload files</info>');

$composer = $this->getComposer();
$installationManager = $composer->getInstallationManager();
$localRepo = $composer->getRepositoryManager()->getLocalRepository();
$package = $composer->getPackage();
$config = $composer->getConfig();

$composer->getAutoloadGenerator()->dump($config, $localRepo, $package, $installationManager, 'composer', $input->getOption('optimize'));
}
}
<?php











namespace Composer\Command;

use Composer\Installer;
use Composer\Factory;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\StringInput;
use Symfony\Component\Console\Output\OutputInterface;




class GlobalCommand extends Command
{
protected function configure()
{
$this
->setName('global')
->setDescription('Allows running commands in the global composer dir ($COMPOSER_HOME).')
->setDefinition(array(
new InputArgument('command-name', InputArgument::REQUIRED, ''),
new InputArgument('args', InputArgument::IS_ARRAY | InputArgument::OPTIONAL, ''),
))
->setHelp(<<<EOT
Use this command as a wrapper to run other Composer commands
within the global context of COMPOSER_HOME.

You can use this to install CLI utilities globally, all you need
is to add the COMPOSER_HOME/vendor/bin dir to your PATH env var.

COMPOSER_HOME is c:\Users\<user>\AppData\Roaming\Composer on Windows
and /home/<user>/.composer on unix systems.

Note: This path may vary depending on customizations to bin-dir in 
composer.json or the environmental variable COMPOSER_BIN_DIR.

EOT
)
;
}

public function run(InputInterface $input, OutputInterface $output)
{

 $tokens = preg_split('{\s+}', $input->__toString());
$args = array();
foreach ($tokens as $token) {
if ($token && $token[0] !== '-') {
$args[] = $token;
if (count($args) >= 2) {
break;
}
}
}


 if (count($args) < 2) {
return parent::run($input, $output);
}


 $config = Factory::createConfig();
chdir($config->get('home'));


 $input = new StringInput(preg_replace('{\bg(?:l(?:o(?:b(?:a(?:l)?)?)?)?)?\b}', '', $input->__toString(), 1));

return $this->getApplication()->run($input, $output);
}
}
<?php











namespace Composer\Command\Helper;

use Symfony\Component\Console\Helper\DialogHelper as BaseDialogHelper;

class DialogHelper extends BaseDialogHelper
{











public function getQuestion($question, $default = null, $sep = ':')
{
return $default !== null ?
sprintf('<info>%s</info> [<comment>%s</comment>]%s ', $question, $default, $sep) :
sprintf('<info>%s</info>%s ', $question, $sep);
}
}
<?php











namespace Composer\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Composer\Downloader\ChangeReportInterface;
use Composer\Downloader\VcsDownloader;
use Composer\Script\ScriptEvents;





class StatusCommand extends Command
{
protected function configure()
{
$this
->setName('status')
->setDescription('Show a list of locally modified packages')
->setDefinition(array(
new InputOption('verbose', 'v|vv|vvv', InputOption::VALUE_NONE, 'Show modified files for each directory that contains changes.'),
))
->setHelp(<<<EOT
The status command displays a list of dependencies that have
been modified locally.

EOT
)
;
}

protected function execute(InputInterface $input, OutputInterface $output)
{

 $composer = $this->getComposer();
$installedRepo = $composer->getRepositoryManager()->getLocalRepository();

$dm = $composer->getDownloadManager();
$im = $composer->getInstallationManager();


 $composer->getEventDispatcher()->dispatchCommandEvent(ScriptEvents::PRE_STATUS_CMD, true);

$errors = array();


 foreach ($installedRepo->getPackages() as $package) {
$downloader = $dm->getDownloaderForInstalledPackage($package);

if ($downloader instanceof ChangeReportInterface) {
$targetDir = $im->getInstallPath($package);

if ($changes = $downloader->getLocalChanges($package, $targetDir)) {
$errors[$targetDir] = $changes;
}
}
}


 if (!$errors) {
$output->writeln('<info>No local changes</info>');
} else {
$output->writeln('<error>You have changes in the following dependencies:</error>');
}

foreach ($errors as $path => $changes) {
if ($input->getOption('verbose')) {
$indentedChanges = implode("\n", array_map(function ($line) {
return '    ' . $line;
}, explode("\n", $changes)));
$output->writeln('<info>'.$path.'</info>:');
$output->writeln($indentedChanges);
} else {
$output->writeln($path);
}
}

if ($errors && !$input->getOption('verbose')) {
$output->writeln('Use --verbose (-v) to see modified files');
}


 $composer->getEventDispatcher()->dispatchCommandEvent(ScriptEvents::POST_STATUS_CMD, true);

return $errors ? 1 : 0;
}
}
<?php











namespace Composer\Command;

use Composer\Json\JsonFile;
use Composer\Factory;
use Composer\Package\BasePackage;
use Composer\Repository\CompositeRepository;
use Composer\Repository\PlatformRepository;
use Composer\Package\Version\VersionParser;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\ExecutableFinder;





class InitCommand extends Command
{
private $gitConfig;
private $repos;

public function parseAuthorString($author)
{
if (preg_match('/^(?P<name>[- \.,\p{L}\'’]+) <(?P<email>.+?)>$/u', $author, $match)) {
if ($this->isValidEmail($match['email'])) {
return array(
'name' => trim($match['name']),
'email' => $match['email']
);
}
}

throw new \InvalidArgumentException(
'Invalid author string.  Must be in the format: '.
'John Smith <john@example.com>'
);
}

protected function configure()
{
$this
->setName('init')
->setDescription('Creates a basic composer.json file in current directory.')
->setDefinition(array(
new InputOption('name', null, InputOption::VALUE_REQUIRED, 'Name of the package'),
new InputOption('description', null, InputOption::VALUE_REQUIRED, 'Description of package'),
new InputOption('author', null, InputOption::VALUE_REQUIRED, 'Author name of package'),

 new InputOption('homepage', null, InputOption::VALUE_REQUIRED, 'Homepage of package'),
new InputOption('require', null, InputOption::VALUE_IS_ARRAY | InputOption::VALUE_REQUIRED, 'Package to require with a version constraint, e.g. foo/bar:1.0.0 or foo/bar=1.0.0 or "foo/bar 1.0.0"'),
new InputOption('require-dev', null, InputOption::VALUE_IS_ARRAY | InputOption::VALUE_REQUIRED, 'Package to require for development with a version constraint, e.g. foo/bar:1.0.0 or foo/bar=1.0.0 or "foo/bar 1.0.0"'),
new InputOption('stability', 's', InputOption::VALUE_REQUIRED, 'Minimum stability (empty or one of: '.implode(', ', array_keys(BasePackage::$stabilities)).')'),
new InputOption('license', 'l', InputOption::VALUE_REQUIRED, 'License of package'),
))
->setHelp(<<<EOT
The <info>init</info> command creates a basic composer.json file
in the current directory.

<info>php composer.phar init</info>

EOT
)
;
}

protected function execute(InputInterface $input, OutputInterface $output)
{
$dialog = $this->getHelperSet()->get('dialog');

$whitelist = array('name', 'description', 'author', 'homepage', 'require', 'require-dev', 'stability', 'license');

$options = array_filter(array_intersect_key($input->getOptions(), array_flip($whitelist)));

if (isset($options['author'])) {
$options['authors'] = $this->formatAuthors($options['author']);
unset($options['author']);
}

if (isset($options['stability'])) {
$options['minimum-stability'] = $options['stability'];
unset($options['stability']);
}

$options['require'] = isset($options['require']) ? $this->formatRequirements($options['require']) : new \stdClass;
if (array() === $options['require']) {
$options['require'] = new \stdClass;
}

if (isset($options['require-dev'])) {
$options['require-dev'] = $this->formatRequirements($options['require-dev']) ;
if (array() === $options['require-dev']) {
$options['require-dev'] = new \stdClass;
}
}

$file = new JsonFile('composer.json');

$json = $file->encode($options);

if ($input->isInteractive()) {
$output->writeln(array(
'',
$json,
''
));
if (!$dialog->askConfirmation($output, $dialog->getQuestion('Do you confirm generation', 'yes', '?'), true)) {
$output->writeln('<error>Command aborted</error>');

return 1;
}
}

$file->write($options);

if ($input->isInteractive() && is_dir('.git')) {
$ignoreFile = realpath('.gitignore');

if (false === $ignoreFile) {
$ignoreFile = realpath('.') . '/.gitignore';
}

if (!$this->hasVendorIgnore($ignoreFile)) {
$question = 'Would you like the <info>vendor</info> directory added to your <info>.gitignore</info> [<comment>yes</comment>]?';

if ($dialog->askConfirmation($output, $question, true)) {
$this->addVendorIgnore($ignoreFile);
}
}
}
}

protected function interact(InputInterface $input, OutputInterface $output)
{
$git = $this->getGitConfig();

$dialog = $this->getHelperSet()->get('dialog');
$formatter = $this->getHelperSet()->get('formatter');
$output->writeln(array(
'',
$formatter->formatBlock('Welcome to the Composer config generator', 'bg=blue;fg=white', true),
''
));


 $output->writeln(array(
'',
'This command will guide you through creating your composer.json config.',
'',
));

$cwd = realpath(".");

if (!$name = $input->getOption('name')) {
$name = basename($cwd);
$name = preg_replace('{(?:([a-z])([A-Z])|([A-Z])([A-Z][a-z]))}', '\\1\\3-\\2\\4', $name);
$name = strtolower($name);
if (isset($git['github.user'])) {
$name = $git['github.user'] . '/' . $name;
} elseif (!empty($_SERVER['USERNAME'])) {
$name = $_SERVER['USERNAME'] . '/' . $name;
} elseif (get_current_user()) {
$name = get_current_user() . '/' . $name;
} else {

 $name = $name . '/' . $name;
}
} else {
if (!preg_match('{^[a-z0-9_.-]+/[a-z0-9_.-]+$}', $name)) {
throw new \InvalidArgumentException(
'The package name '.$name.' is invalid, it should be lowercase and have a vendor name, a forward slash, and a package name, matching: [a-z0-9_.-]+/[a-z0-9_.-]+'
);
}
}

$name = $dialog->askAndValidate(
$output,
$dialog->getQuestion('Package name (<vendor>/<name>)', $name),
function ($value) use ($name) {
if (null === $value) {
return $name;
}

if (!preg_match('{^[a-z0-9_.-]+/[a-z0-9_.-]+$}', $value)) {
throw new \InvalidArgumentException(
'The package name '.$value.' is invalid, it should be lowercase and have a vendor name, a forward slash, and a package name, matching: [a-z0-9_.-]+/[a-z0-9_.-]+'
);
}

return $value;
}
);
$input->setOption('name', $name);

$description = $input->getOption('description') ?: false;
$description = $dialog->ask(
$output,
$dialog->getQuestion('Description', $description)
);
$input->setOption('description', $description);

if (null === $author = $input->getOption('author')) {
if (isset($git['user.name']) && isset($git['user.email'])) {
$author = sprintf('%s <%s>', $git['user.name'], $git['user.email']);
}
}

$self = $this;
$author = $dialog->askAndValidate(
$output,
$dialog->getQuestion('Author', $author),
function ($value) use ($self, $author) {
if (null === $value) {
return $author;
}

$author = $self->parseAuthorString($value);

return sprintf('%s <%s>', $author['name'], $author['email']);
}
);
$input->setOption('author', $author);

$minimumStability = $input->getOption('stability') ?: '';
$minimumStability = $dialog->askAndValidate(
$output,
$dialog->getQuestion('Minimum Stability', $minimumStability),
function ($value) use ($self, $minimumStability) {
if (null === $value) {
return $minimumStability;
}

if (!isset(BasePackage::$stabilities[$value])) {
throw new \InvalidArgumentException(
'Invalid minimum stability "'.$value.'". Must be empty or one of: '.
implode(', ', array_keys(BasePackage::$stabilities))
);
}

return $value;
}
);
$input->setOption('stability', $minimumStability);

$license = $input->getOption('license') ?: false;
$license = $dialog->ask(
$output,
$dialog->getQuestion('License', $license)
);
$input->setOption('license', $license);

$output->writeln(array(
'',
'Define your dependencies.',
''
));

$requirements = array();
if ($dialog->askConfirmation($output, $dialog->getQuestion('Would you like to define your dependencies (require) interactively', 'yes', '?'), true)) {
$requirements = $this->determineRequirements($input, $output, $input->getOption('require'));
}
$input->setOption('require', $requirements);
$devRequirements = array();
if ($dialog->askConfirmation($output, $dialog->getQuestion('Would you like to define your dev dependencies (require-dev) interactively', 'yes', '?'), true)) {
$devRequirements = $this->determineRequirements($input, $output, $input->getOption('require-dev'));
}
$input->setOption('require-dev', $devRequirements);
}

protected function findPackages($name)
{
$packages = array();


 if (!$this->repos) {
$this->repos = new CompositeRepository(array_merge(
array(new PlatformRepository),
Factory::createDefaultRepositories($this->getIO())
));
}

return $this->repos->search($name);
}

protected function determineRequirements(InputInterface $input, OutputInterface $output, $requires = array())
{
$dialog = $this->getHelperSet()->get('dialog');
$prompt = $dialog->getQuestion('Search for a package', false, ':');

if ($requires) {
$requires = $this->normalizeRequirements($requires);
$result = array();

foreach ($requires as $key => $requirement) {
if (!isset($requirement['version']) && $input->isInteractive()) {
$question = $dialog->getQuestion('Please provide a version constraint for the '.$requirement['name'].' requirement');
if ($constraint = $dialog->ask($output, $question)) {
$requirement['version'] = $constraint;
}
}
if (!isset($requirement['version'])) {
throw new \InvalidArgumentException('The requirement '.$requirement['name'].' must contain a version constraint');
}

$result[] = $requirement['name'] . ' ' . $requirement['version'];
}

return $result;
}

while (null !== $package = $dialog->ask($output, $prompt)) {
$matches = $this->findPackages($package);

if (count($matches)) {
$output->writeln(array(
'',
sprintf('Found <info>%s</info> packages matching <info>%s</info>', count($matches), $package),
''
));

$exactMatch = null;
$choices = array();
foreach ($matches as $position => $package) {
$choices[] = sprintf(' <info>%5s</info> %s', "[$position]", $package['name']);
if ($package['name'] === $package) {
$exactMatch = true;
break;
}
}


 if (!$exactMatch) {
$output->writeln($choices);
$output->writeln('');

$validator = function ($selection) use ($matches) {
if ('' === $selection) {
return false;
}

if (!is_numeric($selection) && preg_match('{^\s*(\S+)\s+(\S.*)\s*$}', $selection, $matches)) {
return $matches[1].' '.$matches[2];
}

if (!isset($matches[(int) $selection])) {
throw new \Exception('Not a valid selection');
}

$package = $matches[(int) $selection];

return $package['name'];
};

$package = $dialog->askAndValidate($output, $dialog->getQuestion('Enter package # to add, or the complete package name if it is not listed', false, ':'), $validator, 3);
}


 if (false !== $package && false === strpos($package, ' ')) {
$validator = function ($input) {
$input = trim($input);

return $input ?: false;
};

$constraint = $dialog->askAndValidate($output, $dialog->getQuestion('Enter the version constraint to require', false, ':'), $validator, 3);
if (false === $constraint) {
continue;
}

$package .= ' '.$constraint;
}

if (false !== $package) {
$requires[] = $package;
}
}
}

return $requires;
}

protected function formatAuthors($author)
{
return array($this->parseAuthorString($author));
}

protected function formatRequirements(array $requirements)
{
$requires = array();
$requirements = $this->normalizeRequirements($requirements);
foreach ($requirements as $requirement) {
$requires[$requirement['name']] = $requirement['version'];
}

return $requires;
}

protected function getGitConfig()
{
if (null !== $this->gitConfig) {
return $this->gitConfig;
}

$finder = new ExecutableFinder();
$gitBin = $finder->find('git');

$cmd = new Process(sprintf('%s config -l', escapeshellarg($gitBin)));
$cmd->run();

if ($cmd->isSuccessful()) {
$this->gitConfig = array();
preg_match_all('{^([^=]+)=(.*)$}m', $cmd->getOutput(), $matches, PREG_SET_ORDER);
foreach ($matches as $match) {
$this->gitConfig[$match[1]] = $match[2];
}

return $this->gitConfig;
}

return $this->gitConfig = array();
}

















protected function hasVendorIgnore($ignoreFile, $vendor = 'vendor')
{
if (!file_exists($ignoreFile)) {
return false;
}

$pattern = sprintf('{^/?%s(/\*?)?$}', preg_quote($vendor));

$lines = file($ignoreFile, FILE_IGNORE_NEW_LINES);
foreach ($lines as $line) {
if (preg_match($pattern, $line)) {
return true;
}
}

return false;
}

protected function normalizeRequirements(array $requirements)
{
$parser = new VersionParser();

return $parser->parseNameVersionPairs($requirements);
}

protected function addVendorIgnore($ignoreFile, $vendor = '/vendor/')
{
$contents = "";
if (file_exists($ignoreFile)) {
$contents = file_get_contents($ignoreFile);

if ("\n" !== substr($contents, 0, -1)) {
$contents .= "\n";
}
}

file_put_contents($ignoreFile, $contents . $vendor. "\n");
}

protected function isValidEmail($email)
{

 if (!function_exists('filter_var')) {
return true;
}


 if (version_compare(PHP_VERSION, '5.3.3', '<')) {
return true;
}

return false !== filter_var($email, FILTER_VALIDATE_EMAIL);
}
}
<?php











namespace Composer\Downloader;

use Composer\Config;
use Composer\Package\PackageInterface;
use Composer\Package\Version\VersionParser;
use Composer\Util\ProcessExecutor;
use Composer\IO\IOInterface;
use Composer\Util\Filesystem;




abstract class VcsDownloader implements DownloaderInterface, ChangeReportInterface
{
protected $io;
protected $config;
protected $process;
protected $filesystem;

public function __construct(IOInterface $io, Config $config, ProcessExecutor $process = null, Filesystem $fs = null)
{
$this->io = $io;
$this->config = $config;
$this->process = $process ?: new ProcessExecutor($io);
$this->filesystem = $fs ?: new Filesystem;
}




public function getInstallationSource()
{
return 'source';
}




public function download(PackageInterface $package, $path)
{
if (!$package->getSourceReference()) {
throw new \InvalidArgumentException('Package '.$package->getPrettyName().' is missing reference information');
}

$this->io->write("  - Installing <info>" . $package->getName() . "</info> (<comment>" . VersionParser::formatVersion($package) . "</comment>)");
$this->filesystem->removeDirectory($path);
$this->doDownload($package, $path);
$this->io->write('');
}




public function update(PackageInterface $initial, PackageInterface $target, $path)
{
if (!$target->getSourceReference()) {
throw new \InvalidArgumentException('Package '.$target->getPrettyName().' is missing reference information');
}

$name = $target->getName();
if ($initial->getPrettyVersion() == $target->getPrettyVersion()) {
if ($target->getSourceType() === 'svn') {
$from = $initial->getSourceReference();
$to = $target->getSourceReference();
} else {
$from = substr($initial->getSourceReference(), 0, 7);
$to = substr($target->getSourceReference(), 0, 7);
}
$name .= ' '.$initial->getPrettyVersion();
} else {
$from = VersionParser::formatVersion($initial);
$to = VersionParser::formatVersion($target);
}

$this->io->write("  - Updating <info>" . $name . "</info> (<comment>" . $from . "</comment> => <comment>" . $to . "</comment>)");

$this->cleanChanges($initial, $path, true);
try {
$this->doUpdate($initial, $target, $path);
} catch (\Exception $e) {

 $this->reapplyChanges($path);

throw $e;
}
$this->reapplyChanges($path);


 if ($this->io->isVerbose()) {
$message = 'Pulling in changes:';
$logs = $this->getCommitLogs($initial->getSourceReference(), $target->getSourceReference(), $path);

if (!trim($logs)) {
$message = 'Rolling back changes:';
$logs = $this->getCommitLogs($target->getSourceReference(), $initial->getSourceReference(), $path);
}

if (trim($logs)) {
$logs = implode("\n", array_map(function ($line) {
return '      ' . $line;
}, explode("\n", $logs)));

$this->io->write('    '.$message);
$this->io->write($logs);
}
}

$this->io->write('');
}




public function remove(PackageInterface $package, $path)
{
$this->io->write("  - Removing <info>" . $package->getName() . "</info> (<comment>" . $package->getPrettyVersion() . "</comment>)");
$this->cleanChanges($package, $path, false);
if (!$this->filesystem->removeDirectory($path)) {

 if (!defined('PHP_WINDOWS_VERSION_BUILD') || (usleep(250) && !$this->filesystem->removeDirectory($path))) {
throw new \RuntimeException('Could not completely delete '.$path.', aborting.');
}
}
}





public function setOutputProgress($outputProgress)
{
return $this;
}










protected function cleanChanges(PackageInterface $package, $path, $update)
{

 if (null !== $this->getLocalChanges($package, $path)) {
throw new \RuntimeException('Source directory ' . $path . ' has uncommitted changes.');
}
}







protected function reapplyChanges($path)
{
}







abstract protected function doDownload(PackageInterface $package, $path);








abstract protected function doUpdate(PackageInterface $initial, PackageInterface $target, $path);









abstract protected function getCommitLogs($fromReference, $toReference, $path);
}
<?php











namespace Composer\Downloader;

use Composer\Config;
use Composer\Cache;
use Composer\IO\IOInterface;
use Composer\Package\PackageInterface;
use Composer\Package\Version\VersionParser;
use Composer\Util\Filesystem;
use Composer\Util\GitHub;
use Composer\Util\RemoteFilesystem;








class FileDownloader implements DownloaderInterface
{
private static $cacheCollected = false;
protected $io;
protected $config;
protected $rfs;
protected $filesystem;
protected $cache;
protected $outputProgress = true;










public function __construct(IOInterface $io, Config $config, Cache $cache = null, RemoteFilesystem $rfs = null, Filesystem $filesystem = null)
{
$this->io = $io;
$this->config = $config;
$this->rfs = $rfs ?: new RemoteFilesystem($io);
$this->filesystem = $filesystem ?: new Filesystem();
$this->cache = $cache;

if ($this->cache && !self::$cacheCollected && !mt_rand(0, 50)) {
$this->cache->gc($config->get('cache-ttl'), $config->get('cache-files-maxsize'));
}
self::$cacheCollected = true;
}




public function getInstallationSource()
{
return 'dist';
}




public function download(PackageInterface $package, $path)
{
$url = $package->getDistUrl();
if (!$url) {
throw new \InvalidArgumentException('The given package is missing url information');
}

$this->filesystem->ensureDirectoryExists($path);

$fileName = $this->getFileName($package, $path);

$this->io->write("  - Installing <info>" . $package->getName() . "</info> (<comment>" . VersionParser::formatVersion($package) . "</comment>)");

$processedUrl = $this->processUrl($package, $url);
$hostname = parse_url($processedUrl, PHP_URL_HOST);

if (strpos($hostname, '.github.com') === (strlen($hostname) - 11)) {
$hostname = 'github.com';
}

try {
try {
if (!$this->cache || !$this->cache->copyTo($this->getCacheKey($package), $fileName)) {
if (!$this->outputProgress) {
$this->io->write('    Downloading');
}


 $retries = 3;
while ($retries--) {
try {
$this->rfs->copy($hostname, $processedUrl, $fileName, $this->outputProgress);
break;
} catch (TransportException $e) {

 if ((0 !== $e->getCode() && 500 !== $e->getCode()) || !$retries) {
throw $e;
}
if ($this->io->isVerbose()) {
$this->io->write('    Download failed, retrying...');
}
usleep(500000);
}
}

if ($this->cache) {
$this->cache->copyFrom($this->getCacheKey($package), $fileName);
}
} else {
$this->io->write('    Loading from cache');
}
} catch (TransportException $e) {
if (in_array($e->getCode(), array(404, 403)) && 'github.com' === $hostname && !$this->io->hasAuthentication($hostname)) {
$message = "\n".'Could not fetch '.$processedUrl.', enter your GitHub credentials '.($e->getCode() === 404 ? 'to access private repos' : 'to go over the API rate limit');
$gitHubUtil = new GitHub($this->io, $this->config, null, $this->rfs);
if (!$gitHubUtil->authorizeOAuth($hostname)
&& (!$this->io->isInteractive() || !$gitHubUtil->authorizeOAuthInteractively($hostname, $message))
) {
throw $e;
}
$this->rfs->copy($hostname, $processedUrl, $fileName, $this->outputProgress);
} else {
throw $e;
}
}

if (!file_exists($fileName)) {
throw new \UnexpectedValueException($url.' could not be saved to '.$fileName.', make sure the'
.' directory is writable and you have internet connectivity');
}

$checksum = $package->getDistSha1Checksum();
if ($checksum && hash_file('sha1', $fileName) !== $checksum) {
throw new \UnexpectedValueException('The checksum verification of the file failed (downloaded from '.$url.')');
}
} catch (\Exception $e) {

 $this->filesystem->removeDirectory($path);
$this->clearCache($package, $path);
throw $e;
}

return $fileName;
}




public function setOutputProgress($outputProgress)
{
$this->outputProgress = $outputProgress;

return $this;
}

protected function clearCache(PackageInterface $package, $path)
{
if ($this->cache) {
$fileName = $this->getFileName($package, $path);
$this->cache->remove($this->getCacheKey($package));
}
}




public function update(PackageInterface $initial, PackageInterface $target, $path)
{
$this->remove($initial, $path);
$this->download($target, $path);
}




public function remove(PackageInterface $package, $path)
{
$this->io->write("  - Removing <info>" . $package->getName() . "</info> (<comment>" . VersionParser::formatVersion($package) . "</comment>)");
if (!$this->filesystem->removeDirectory($path)) {

 if (!defined('PHP_WINDOWS_VERSION_BUILD') || (usleep(250000) && !$this->filesystem->removeDirectory($path))) {
throw new \RuntimeException('Could not completely delete '.$path.', aborting.');
}
}
}








protected function getFileName(PackageInterface $package, $path)
{
return $path.'/'.pathinfo(parse_url($package->getDistUrl(), PHP_URL_PATH), PATHINFO_BASENAME);
}










protected function processUrl(PackageInterface $package, $url)
{
if (!extension_loaded('openssl') && 0 === strpos($url, 'https:')) {
throw new \RuntimeException('You must enable the openssl extension to download files via https');
}

return $url;
}

private function getCacheKey(PackageInterface $package)
{
if (preg_match('{^[a-f0-9]{40}$}', $package->getDistReference())) {
return $package->getName().'/'.$package->getDistReference().'.'.$package->getDistType();
}

return $package->getName().'/'.$package->getVersion().'-'.$package->getDistReference().'.'.$package->getDistType();
}
}
<?php











namespace Composer\Downloader;

use Composer\Package\PackageInterface;
use Composer\Util\Svn as SvnUtil;





class SvnDownloader extends VcsDownloader
{



public function doDownload(PackageInterface $package, $path)
{
$url = $package->getSourceUrl();
$ref = $package->getSourceReference();

$this->io->write("    Checking out ".$package->getSourceReference());
$this->execute($url, "svn co", sprintf("%s/%s", $url, $ref), null, $path);
}




public function doUpdate(PackageInterface $initial, PackageInterface $target, $path)
{
$url = $target->getSourceUrl();
$ref = $target->getSourceReference();

if (!is_dir($path.'/.svn')) {
throw new \RuntimeException('The .svn directory is missing from '.$path.', see http://getcomposer.org/commit-deps for more information');
}

$this->io->write("    Checking out " . $ref);
$this->execute($url, "svn switch", sprintf("%s/%s", $url, $ref), $path);
}




public function getLocalChanges(PackageInterface $package, $path)
{
if (!is_dir($path.'/.svn')) {
return;
}

$this->process->execute('svn status --ignore-externals', $output, $path);

return preg_match('{^ *[^X ] +}m', $output) ? $output : null;
}













protected function execute($baseUrl, $command, $url, $cwd = null, $path = null)
{
$util = new SvnUtil($baseUrl, $this->io);
try {
return $util->execute($command, $url, $cwd, $path, $this->io->isVerbose());
} catch (\RuntimeException $e) {
throw new \RuntimeException(
'Package could not be downloaded, '.$e->getMessage()
);
}
}




protected function cleanChanges(PackageInterface $package, $path, $update)
{
if (!$changes = $this->getLocalChanges($package, $path)) {
return;
}

if (!$this->io->isInteractive()) {
if (true === $this->config->get('discard-changes')) {
return $this->discardChanges($path);
}

return parent::cleanChanges($package, $path, $update);
}

$changes = array_map(function ($elem) {
return '    '.$elem;
}, preg_split('{\s*\r?\n\s*}', $changes));
$this->io->write('    <error>The package has modified files:</error>');
$this->io->write(array_slice($changes, 0, 10));
if (count($changes) > 10) {
$this->io->write('    <info>'.count($changes) - 10 . ' more files modified, choose "v" to view the full list</info>');
}

while (true) {
switch ($this->io->ask('    <info>Discard changes [y,n,v,?]?</info> ', '?')) {
case 'y':
$this->discardChanges($path);
break 2;

case 'n':
throw new \RuntimeException('Update aborted');

case 'v':
$this->io->write($changes);
break;

case '?':
default:
$this->io->write(array(
'    y - discard changes and apply the '.($update ? 'update' : 'uninstall'),
'    n - abort the '.($update ? 'update' : 'uninstall').' and let you manually clean things up',
'    v - view modified files',
'    ? - print help',
));
break;
}
}
}




protected function getCommitLogs($fromReference, $toReference, $path)
{

 $fromRevision = preg_replace('{.*@(\d+)$}', '$1', $fromReference);
$toRevision = preg_replace('{.*@(\d+)$}', '$1', $toReference);

$command = sprintf('svn log -r%s:%s --incremental', $fromRevision, $toRevision);

if (0 !== $this->process->execute($command, $output, $path)) {
throw new \RuntimeException('Failed to execute ' . $command . "\n\n" . $this->process->getErrorOutput());
}

return $output;
}

protected function discardChanges($path)
{
if (0 !== $this->process->execute('svn revert -R .', $output, $path)) {
throw new \RuntimeException("Could not reset changes\n\n:".$this->process->getErrorOutput());
}
}
}
<?php











namespace Composer\Downloader;

use Composer\Util\Filesystem;










class PearPackageExtractor
{
private static $rolesWithoutPackageNamePrefix = array('php', 'script', 'www');

private $filesystem;
private $file;

public function __construct($file)
{
if (!is_file($file)) {
throw new \UnexpectedValueException('PEAR package file is not found at '.$file);
}

$this->filesystem = new Filesystem();
$this->file = $file;
}











public function extractTo($target, array $roles = array('php' => '/', 'script' => '/bin'), $vars = array())
{
$extractionPath = $target.'/tarball';

try {
$archive = new \PharData($this->file);
$archive->extractTo($extractionPath, null, true);

if (!is_file($this->combine($extractionPath, '/package.xml'))) {
throw new \RuntimeException('Invalid PEAR package. It must contain package.xml file.');
}

$fileCopyActions = $this->buildCopyActions($extractionPath, $roles, $vars);
$this->copyFiles($fileCopyActions, $extractionPath, $target, $roles, $vars);
$this->filesystem->removeDirectory($extractionPath);
} catch (\Exception $exception) {
throw new \UnexpectedValueException(sprintf('Failed to extract PEAR package %s to %s. Reason: %s', $this->file, $target, $exception->getMessage()), 0, $exception);
}
}










private function copyFiles($files, $source, $target, $roles, $vars)
{
foreach ($files as $file) {
$from = $this->combine($source, $file['from']);
$to = $this->combine($target, $roles[$file['role']]);
$to = $this->combine($to, $file['to']);
$tasks = $file['tasks'];
$this->copyFile($from, $to, $tasks, $vars);
}
}

private function copyFile($from, $to, $tasks, $vars)
{
if (!is_file($from)) {
throw new \RuntimeException('Invalid PEAR package. package.xml defines file that is not located inside tarball.');
}

$this->filesystem->ensureDirectoryExists(dirname($to));

if (0 == count($tasks)) {
$copied = copy($from, $to);
} else {
$content = file_get_contents($from);
$replacements = array();
foreach ($tasks as $task) {
$pattern = $task['from'];
$varName = $task['to'];
if (isset($vars[$varName])) {
if ($varName === 'php_bin' && false === strpos($to, '.bat')) {
$replacements[$pattern] = preg_replace('{\.bat$}', '', $vars[$varName]);
} else {
$replacements[$pattern] = $vars[$varName];
}
}
}
$content = strtr($content, $replacements);

$copied = file_put_contents($to, $content);
}

if (false === $copied) {
throw new \RuntimeException(sprintf('Failed to copy %s to %s', $from, $to));
}
}











private function buildCopyActions($source, array $roles, $vars)
{

$package = simplexml_load_file($this->combine($source, 'package.xml'));
if(false === $package)
throw new \RuntimeException('Package definition file is not valid.');

$packageSchemaVersion = $package['version'];
if ('1.0' == $packageSchemaVersion) {
$children = $package->release->filelist->children();
$packageName = (string) $package->name;
$packageVersion = (string) $package->release->version;
$sourceDir = $packageName . '-' . $packageVersion;
$result = $this->buildSourceList10($children, $roles, $sourceDir, '', null, $packageName);
} elseif ('2.0' == $packageSchemaVersion || '2.1' == $packageSchemaVersion) {
$children = $package->contents->children();
$packageName = (string) $package->name;
$packageVersion = (string) $package->version->release;
$sourceDir = $packageName . '-' . $packageVersion;
$result = $this->buildSourceList20($children, $roles, $sourceDir, '', null, $packageName);

$namespaces = $package->getNamespaces();
$package->registerXPathNamespace('ns', $namespaces['']);
$releaseNodes = $package->xpath('ns:phprelease');
$this->applyRelease($result, $releaseNodes, $vars);
} else {
throw new \RuntimeException('Unsupported schema version of package definition file.');
}

return $result;
}

private function applyRelease(&$actions, $releaseNodes, $vars)
{
foreach ($releaseNodes as $releaseNode) {
$requiredOs = $releaseNode->installconditions && $releaseNode->installconditions->os && $releaseNode->installconditions->os->name ? (string) $releaseNode->installconditions->os->name : '';
if ($requiredOs && $vars['os'] != $requiredOs) {
continue;
}

if ($releaseNode->filelist) {
foreach ($releaseNode->filelist->children() as $action) {
if ('install' == $action->getName()) {
$name = (string) $action['name'];
$as = (string) $action['as'];
if (isset($actions[$name])) {
$actions[$name]['to'] = $as;
}
} elseif ('ignore' == $action->getName()) {
$name = (string) $action['name'];
unset($actions[$name]);
} else {

 }
}
}
break;
}
}

private function buildSourceList10($children, $targetRoles, $source, $target, $role, $packageName)
{
$result = array();


 foreach ($children as $child) {

if ($child->getName() == 'dir') {
$dirSource = $this->combine($source, (string) $child['name']);
$dirTarget = $child['baseinstalldir'] ? : $target;
$dirRole = $child['role'] ? : $role;
$dirFiles = $this->buildSourceList10($child->children(), $targetRoles, $dirSource, $dirTarget, $dirRole, $packageName);
$result = array_merge($result, $dirFiles);
} elseif ($child->getName() == 'file') {
$fileRole = (string) $child['role'] ? : $role;
if (isset($targetRoles[$fileRole])) {
$fileName = (string) ($child['name'] ? : $child[0]); 
 $fileSource = $this->combine($source, $fileName);
$fileTarget = $this->combine((string) $child['baseinstalldir'] ? : $target, $fileName);
if (!in_array($fileRole, self::$rolesWithoutPackageNamePrefix)) {
$fileTarget = $packageName . '/' . $fileTarget;
}
$result[(string) $child['name']] = array('from' => $fileSource, 'to' => $fileTarget, 'role' => $fileRole, 'tasks' => array());
}
}
}

return $result;
}

private function buildSourceList20($children, $targetRoles, $source, $target, $role, $packageName)
{
$result = array();


 foreach ($children as $child) {

if ('dir' == $child->getName()) {
$dirSource = $this->combine($source, $child['name']);
$dirTarget = $child['baseinstalldir'] ? : $target;
$dirRole = $child['role'] ? : $role;
$dirFiles = $this->buildSourceList20($child->children(), $targetRoles, $dirSource, $dirTarget, $dirRole, $packageName);
$result = array_merge($result, $dirFiles);
} elseif ('file' == $child->getName()) {
$fileRole = (string) $child['role'] ? : $role;
if (isset($targetRoles[$fileRole])) {
$fileSource = $this->combine($source, (string) $child['name']);
$fileTarget = $this->combine((string) ($child['baseinstalldir'] ? : $target), (string) $child['name']);
$fileTasks = array();
foreach ($child->children('http://pear.php.net/dtd/tasks-1.0') as $taskNode) {
if ('replace' == $taskNode->getName()) {
$fileTasks[] = array('from' => (string) $taskNode->attributes()->from, 'to' => (string) $taskNode->attributes()->to);
}
}
if (!in_array($fileRole, self::$rolesWithoutPackageNamePrefix)) {
$fileTarget = $packageName . '/' . $fileTarget;
}
$result[(string) $child['name']] = array('from' => $fileSource, 'to' => $fileTarget, 'role' => $fileRole, 'tasks' => $fileTasks);
}
}
}

return $result;
}

private function combine($left, $right)
{
return rtrim($left, '/') . '/' . ltrim($right, '/');
}
}
<?php











namespace Composer\Downloader;

use Composer\Package\PackageInterface;
use Composer\Downloader\DownloaderInterface;
use Composer\Util\Filesystem;






class DownloadManager
{
private $preferDist = false;
private $preferSource = false;
private $filesystem;
private $downloaders = array();







public function __construct($preferSource = false, Filesystem $filesystem = null)
{
$this->preferSource = $preferSource;
$this->filesystem = $filesystem ?: new Filesystem();
}







public function setPreferSource($preferSource)
{
$this->preferSource = $preferSource;

return $this;
}







public function setPreferDist($preferDist)
{
$this->preferDist = $preferDist;

return $this;
}








public function setOutputProgress($outputProgress)
{
foreach ($this->downloaders as $downloader) {
$downloader->setOutputProgress($outputProgress);
}

return $this;
}








public function setDownloader($type, DownloaderInterface $downloader)
{
$type = strtolower($type);
$this->downloaders[$type] = $downloader;

return $this;
}










public function getDownloader($type)
{
$type = strtolower($type);
if (!isset($this->downloaders[$type])) {
throw new \InvalidArgumentException('Unknown downloader type: '.$type);
}

return $this->downloaders[$type];
}












public function getDownloaderForInstalledPackage(PackageInterface $package)
{
$installationSource = $package->getInstallationSource();

if ('dist' === $installationSource) {
$downloader = $this->getDownloader($package->getDistType());
} elseif ('source' === $installationSource) {
$downloader = $this->getDownloader($package->getSourceType());
} else {
throw new \InvalidArgumentException(
'Package '.$package.' seems not been installed properly'
);
}

if ($installationSource !== $downloader->getInstallationSource()) {
throw new \LogicException(sprintf(
'Downloader "%s" is a %s type downloader and can not be used to download %s',
get_class($downloader), $downloader->getInstallationSource(), $installationSource
));
}

return $downloader;
}










public function download(PackageInterface $package, $targetDir, $preferSource = null)
{
$preferSource = null !== $preferSource ? $preferSource : $this->preferSource;
$sourceType = $package->getSourceType();
$distType = $package->getDistType();

if ((!$package->isDev() || $this->preferDist || !$sourceType) && !($preferSource && $sourceType) && $distType) {
$package->setInstallationSource('dist');
} elseif ($sourceType) {
$package->setInstallationSource('source');
} else {
throw new \InvalidArgumentException('Package '.$package.' must have a source or dist specified');
}

$this->filesystem->ensureDirectoryExists($targetDir);

$downloader = $this->getDownloaderForInstalledPackage($package);
$downloader->download($package, $targetDir);
}










public function update(PackageInterface $initial, PackageInterface $target, $targetDir)
{
$downloader = $this->getDownloaderForInstalledPackage($initial);
$installationSource = $initial->getInstallationSource();

if ('dist' === $installationSource) {
$initialType = $initial->getDistType();
$targetType = $target->getDistType();
} else {
$initialType = $initial->getSourceType();
$targetType = $target->getSourceType();
}


 if ($target->isDev() && 'dist' === $installationSource) {
$downloader->remove($initial, $targetDir);
$this->download($target, $targetDir);

return;
}

if ($initialType === $targetType) {
$target->setInstallationSource($installationSource);
$downloader->update($initial, $target, $targetDir);
} else {
$downloader->remove($initial, $targetDir);
$this->download($target, $targetDir, 'source' === $installationSource);
}
}







public function remove(PackageInterface $package, $targetDir)
{
$downloader = $this->getDownloaderForInstalledPackage($package);
$downloader->remove($package, $targetDir);
}
}
<?php











namespace Composer\Downloader;

use Composer\Package\PackageInterface;







interface DownloaderInterface
{





public function getInstallationSource();







public function download(PackageInterface $package, $path);








public function update(PackageInterface $initial, PackageInterface $target, $path);







public function remove(PackageInterface $package, $path);







public function setOutputProgress($outputProgress);
}
<?php











namespace Composer\Downloader;




class TransportException extends \Exception
{
protected $headers;

public function setHeaders($headers)
{
$this->headers = $headers;
}

public function getHeaders()
{
return $this->headers;
}
}
<?php











namespace Composer\Downloader;






class PharDownloader extends ArchiveDownloader
{



protected function extract($file, $path)
{

 $archive = new \Phar($file);
$archive->extractTo($path, null, true);





}
}
<?php











namespace Composer\Downloader;






class TarDownloader extends ArchiveDownloader
{



protected function extract($file, $path)
{

 $archive = new \PharData($file);
$archive->extractTo($path, null, true);
}
}
<?php











namespace Composer\Downloader;

use Composer\Package\PackageInterface;




class HgDownloader extends VcsDownloader
{



public function doDownload(PackageInterface $package, $path)
{
$url = escapeshellarg($package->getSourceUrl());
$ref = escapeshellarg($package->getSourceReference());
$this->io->write("    Cloning ".$package->getSourceReference());
$command = sprintf('hg clone %s %s', $url, escapeshellarg($path));
if (0 !== $this->process->execute($command, $ignoredOutput)) {
throw new \RuntimeException('Failed to execute ' . $command . "\n\n" . $this->process->getErrorOutput());
}
$command = sprintf('hg up %s', $ref);
if (0 !== $this->process->execute($command, $ignoredOutput, realpath($path))) {
throw new \RuntimeException('Failed to execute ' . $command . "\n\n" . $this->process->getErrorOutput());
}
}




public function doUpdate(PackageInterface $initial, PackageInterface $target, $path)
{
$url = escapeshellarg($target->getSourceUrl());
$ref = escapeshellarg($target->getSourceReference());
$this->io->write("    Updating to ".$target->getSourceReference());

if (!is_dir($path.'/.hg')) {
throw new \RuntimeException('The .hg directory is missing from '.$path.', see http://getcomposer.org/commit-deps for more information');
}

$command = sprintf('hg pull %s && hg up %s', $url, $ref);
if (0 !== $this->process->execute($command, $ignoredOutput, realpath($path))) {
throw new \RuntimeException('Failed to execute ' . $command . "\n\n" . $this->process->getErrorOutput());
}
}




public function getLocalChanges(PackageInterface $package, $path)
{
if (!is_dir($path.'/.hg')) {
return;
}

$this->process->execute('hg st', $output, realpath($path));

return trim($output) ?: null;
}




protected function getCommitLogs($fromReference, $toReference, $path)
{
$command = sprintf('hg log -r %s:%s --style compact', $fromReference, $toReference);

if (0 !== $this->process->execute($command, $output, realpath($path))) {
throw new \RuntimeException('Failed to execute ' . $command . "\n\n" . $this->process->getErrorOutput());
}

return $output;
}
}
<?php











namespace Composer\Downloader;

use Composer\Package\PackageInterface;






interface ChangeReportInterface
{







public function getLocalChanges(PackageInterface $package, $path);
}
<?php











namespace Composer\Downloader;

use Composer\Package\PackageInterface;








abstract class ArchiveDownloader extends FileDownloader
{



public function download(PackageInterface $package, $path)
{
$temporaryDir = $this->config->get('vendor-dir').'/composer/'.substr(md5(uniqid('', true)), 0, 8);
$retries = 3;
while ($retries--) {
$fileName = parent::download($package, $path);

if ($this->io->isVerbose()) {
$this->io->write('    Extracting archive');
}

try {
$this->filesystem->ensureDirectoryExists($temporaryDir);
try {
$this->extract($fileName, $temporaryDir);
} catch (\Exception $e) {

 parent::clearCache($package, $path);
throw $e;
}

unlink($fileName);


 $contentDir = $this->listFiles($temporaryDir);


 if (1 === count($contentDir) && !is_file($contentDir[0])) {
$contentDir = $this->listFiles($contentDir[0]);
}


 foreach ($contentDir as $file) {
$this->filesystem->rename($file, $path . '/' . basename($file));
}

$this->filesystem->removeDirectory($temporaryDir);
} catch (\Exception $e) {

 $this->filesystem->removeDirectory($path);
$this->filesystem->removeDirectory($temporaryDir);


 if ($retries && $e instanceof \UnexpectedValueException && $e->getCode() === \ZipArchive::ER_NOZIP) {
$this->io->write('    Invalid zip file, retrying...');
usleep(500000);
continue;
}

throw $e;
}

break;
}

$this->io->write('');
}




protected function getFileName(PackageInterface $package, $path)
{
return rtrim($path.'/'.md5($path.spl_object_hash($package)).'.'.pathinfo(parse_url($package->getDistUrl(), PHP_URL_PATH), PATHINFO_EXTENSION), '.');
}




protected function processUrl(PackageInterface $package, $url)
{
if ($package->getDistReference() && strpos($url, 'github.com')) {
if (preg_match('{^https?://(?:www\.)?github\.com/([^/]+)/([^/]+)/(zip|tar)ball/(.+)$}i', $url, $match)) {

 $url = 'https://api.github.com/repos/' . $match[1] . '/'. $match[2] . '/' . $match[3] . 'ball/' . $package->getDistReference();
} elseif ($package->getDistReference() && preg_match('{^https?://(?:www\.)?github\.com/([^/]+)/([^/]+)/archive/.+\.(zip|tar)(?:\.gz)?$}i', $url, $match)) {

 $url = 'https://api.github.com/repos/' . $match[1] . '/'. $match[2] . '/' . $match[3] . 'ball/' . $package->getDistReference();
} elseif ($package->getDistReference() && preg_match('{^https?://api\.github\.com/repos/([^/]+)/([^/]+)/(zip|tar)ball(?:/.+)?$}i', $url, $match)) {

 $url = 'https://api.github.com/repos/' . $match[1] . '/'. $match[2] . '/' . $match[3] . 'ball/' . $package->getDistReference();
}
}

if (!extension_loaded('openssl') && (0 === strpos($url, 'https:') || 0 === strpos($url, 'http://github.com'))) {
throw new \RuntimeException('You must enable the openssl extension to download files via https');
}

return parent::processUrl($package, $url);
}









abstract protected function extract($file, $path);




private function listFiles($dir)
{
$files = array_merge(glob($dir . '/.*'), glob($dir . '/*'));

return array_values(array_filter($files, function ($el) {
return basename($el) !== '.' && basename($el) !== '..';
}));
}
}
<?php











namespace Composer\Downloader;






class FilesystemException extends \Exception
{
public function __construct($message = null, $code = null, \Exception $previous = null)
{
parent::__construct("Filesystem exception: \n".$message, $code, $previous);
}
}
<?php











namespace Composer\Downloader;

use Composer\Config;
use Composer\Cache;
use Composer\Util\ProcessExecutor;
use Composer\IO\IOInterface;
use ZipArchive;




class ZipDownloader extends ArchiveDownloader
{
protected $process;

public function __construct(IOInterface $io, Config $config, Cache $cache = null, ProcessExecutor $process = null)
{
$this->process = $process ?: new ProcessExecutor($io);
parent::__construct($io, $config, $cache);
}

protected function extract($file, $path)
{
$processError = null;


 if (!defined('PHP_WINDOWS_VERSION_BUILD')) {
$command = 'unzip '.escapeshellarg($file).' -d '.escapeshellarg($path);
if (0 === $this->process->execute($command, $ignoredOutput)) {
return;
}

$processError = 'Failed to execute ' . $command . "\n\n" . $this->process->getErrorOutput();
}

if (!class_exists('ZipArchive')) {

 $iniPath = php_ini_loaded_file();

if ($iniPath) {
$iniMessage = 'The php.ini used by your command-line PHP is: ' . $iniPath;
} else {
$iniMessage = 'A php.ini file does not exist. You will have to create one.';
}

$error = "Could not decompress the archive, enable the PHP zip extension or install unzip.\n"
. $iniMessage . "\n" . $processError;

if (!defined('PHP_WINDOWS_VERSION_BUILD')) {
$error = "Could not decompress the archive, enable the PHP zip extension.\n" . $iniMessage;
}

throw new \RuntimeException($error);
}

$zipArchive = new ZipArchive();

if (true !== ($retval = $zipArchive->open($file))) {
throw new \UnexpectedValueException($this->getErrorMessage($retval, $file), $retval);
}

if (true !== $zipArchive->extractTo($path)) {
throw new \RuntimeException("There was an error extracting the ZIP file. Corrupt file?");
}

$zipArchive->close();
}








protected function getErrorMessage($retval, $file)
{
switch ($retval) {
case ZipArchive::ER_EXISTS:
return sprintf("File '%s' already exists.", $file);
case ZipArchive::ER_INCONS:
return sprintf("Zip archive '%s' is inconsistent.", $file);
case ZipArchive::ER_INVAL:
return sprintf("Invalid argument (%s)", $file);
case ZipArchive::ER_MEMORY:
return sprintf("Malloc failure (%s)", $file);
case ZipArchive::ER_NOENT:
return sprintf("No such zip file: '%s'", $file);
case ZipArchive::ER_NOZIP:
return sprintf("'%s' is not a zip archive.", $file);
case ZipArchive::ER_OPEN:
return sprintf("Can't open zip file: %s", $file);
case ZipArchive::ER_READ:
return sprintf("Zip read error (%s)", $file);
case ZipArchive::ER_SEEK:
return sprintf("Zip seek error (%s)", $file);
default:
return sprintf("'%s' is not a valid zip archive, got error code: %s", $file, $retval);
}
}
}
<?php











namespace Composer\Downloader;

use Composer\Package\PackageInterface;
use Composer\Util\GitHub;
use Composer\Util\Git as GitUtil;




class GitDownloader extends VcsDownloader
{
private $hasStashedChanges = false;




public function doDownload(PackageInterface $package, $path)
{
$this->cleanEnv();
$path = $this->normalizePath($path);

$ref = $package->getSourceReference();
$flag = defined('PHP_WINDOWS_VERSION_MAJOR') ? '/D ' : '';
$command = 'git clone %s %s && cd '.$flag.'%2$s && git remote add composer %1$s && git fetch composer';
$this->io->write("    Cloning ".$ref);

$commandCallable = function($url) use ($ref, $path, $command) {
return sprintf($command, escapeshellarg($url), escapeshellarg($path), escapeshellarg($ref));
};

$this->runCommand($commandCallable, $package->getSourceUrl(), $path, true);
$this->setPushUrl($package, $path);

$this->updateToCommit($path, $ref, $package->getPrettyVersion(), $package->getReleaseDate());
}




public function doUpdate(PackageInterface $initial, PackageInterface $target, $path)
{
$this->cleanEnv();
$path = $this->normalizePath($path);
if (!is_dir($path.'/.git')) {
throw new \RuntimeException('The .git directory is missing from '.$path.', see http://getcomposer.org/commit-deps for more information');
}

$ref = $target->getSourceReference();
$this->io->write("    Checking out ".$ref);
$command = 'git remote set-url composer %s && git fetch composer && git fetch --tags composer';


 $this->process->execute('git remote -v', $output, $path);
if (preg_match('{^(?:composer|origin)\s+https?://(.+):(.+)@([^/]+)}im', $output, $match)) {
$this->io->setAuthentication($match[3], urldecode($match[1]), urldecode($match[2]));
}

$commandCallable = function($url) use ($command) {
return sprintf($command, escapeshellarg($url));
};

$this->runCommand($commandCallable, $target->getSourceUrl(), $path);
$this->updateToCommit($path, $ref, $target->getPrettyVersion(), $target->getReleaseDate());
}




public function getLocalChanges(PackageInterface $package, $path)
{
$this->cleanEnv();
$path = $this->normalizePath($path);
if (!is_dir($path.'/.git')) {
return;
}

$command = 'git status --porcelain --untracked-files=no';
if (0 !== $this->process->execute($command, $output, $path)) {
throw new \RuntimeException('Failed to execute ' . $command . "\n\n" . $this->process->getErrorOutput());
}

return trim($output) ?: null;
}




protected function cleanChanges(PackageInterface $package, $path, $update)
{
$this->cleanEnv();
$path = $this->normalizePath($path);
if (!$changes = $this->getLocalChanges($package, $path)) {
return;
}

if (!$this->io->isInteractive()) {
$discardChanges = $this->config->get('discard-changes');
if (true === $discardChanges) {
return $this->discardChanges($path);
}
if ('stash' === $discardChanges) {
if (!$update) {
return parent::cleanChanges($package, $path, $update);
}

return $this->stashChanges($path);
}

return parent::cleanChanges($package, $path, $update);
}

$changes = array_map(function ($elem) {
return '    '.$elem;
}, preg_split('{\s*\r?\n\s*}', $changes));
$this->io->write('    <error>The package has modified files:</error>');
$this->io->write(array_slice($changes, 0, 10));
if (count($changes) > 10) {
$this->io->write('    <info>'.count($changes) - 10 . ' more files modified, choose "v" to view the full list</info>');
}

while (true) {
switch ($this->io->ask('    <info>Discard changes [y,n,v,'.($update ? 's,' : '').'?]?</info> ', '?')) {
case 'y':
$this->discardChanges($path);
break 2;

case 's':
if (!$update) {
goto help;
}

$this->stashChanges($path);
break 2;

case 'n':
throw new \RuntimeException('Update aborted');

case 'v':
$this->io->write($changes);
break;

case '?':
default:
help:
$this->io->write(array(
'    y - discard changes and apply the '.($update ? 'update' : 'uninstall'),
'    n - abort the '.($update ? 'update' : 'uninstall').' and let you manually clean things up',
'    v - view modified files',
));
if ($update) {
$this->io->write('    s - stash changes and try to reapply them after the update');
}
$this->io->write('    ? - print help');
break;
}
}
}




protected function reapplyChanges($path)
{
$path = $this->normalizePath($path);
if ($this->hasStashedChanges) {
$this->hasStashedChanges = false;
$this->io->write('    <info>Re-applying stashed changes');
if (0 !== $this->process->execute('git stash pop', $output, $path)) {
throw new \RuntimeException("Failed to apply stashed changes:\n\n".$this->process->getErrorOutput());
}
}
}

protected function updateToCommit($path, $reference, $branch, $date)
{
$template = 'git checkout %s && git reset --hard %1$s';
$branch = preg_replace('{(?:^dev-|(?:\.x)?-dev$)}i', '', $branch);

$branches = null;
if (0 === $this->process->execute('git branch -r', $output, $path)) {
$branches = $output;
}


 $gitRef = $reference;
if (!preg_match('{^[a-f0-9]{40}$}', $reference)
&& $branches
&& preg_match('{^\s+composer/'.preg_quote($reference).'$}m', $output)
) {
$command = sprintf('git checkout -B %s %s && git reset --hard %2$s', escapeshellarg($branch), escapeshellarg('composer/'.$reference));
if (0 === $this->process->execute($command, $output, $path)) {
return;
}
}


 if (preg_match('{^[a-f0-9]{40}$}', $reference)) {

 if (!preg_match('{^\s+composer/'.preg_quote($branch).'$}m', $branches) && preg_match('{^\s+composer/v'.preg_quote($branch).'$}m', $branches)) {
$branch = 'v' . $branch;
}

$command = sprintf('git checkout %s', escapeshellarg($branch));
$fallbackCommand = sprintf('git checkout -B %s %s', escapeshellarg($branch), escapeshellarg('composer/'.$branch));
if (0 === $this->process->execute($command, $output, $path)
|| 0 === $this->process->execute($fallbackCommand, $output, $path)
) {
$command = sprintf('git reset --hard %s', escapeshellarg($reference));
if (0 === $this->process->execute($command, $output, $path)) {
return;
}
}
}

$command = sprintf($template, escapeshellarg($gitRef));
if (0 === $this->process->execute($command, $output, $path)) {
return;
}


 if ($date && false !== strpos($this->process->getErrorOutput(), $reference)) {
$date = $date->format('U');


 $command = 'git branch -r';
if (0 !== $this->process->execute($command, $output, $path)) {
throw new \RuntimeException('Failed to execute ' . $command . "\n\n" . $this->process->getErrorOutput());
}

$guessTemplate = 'git log --until=%s --date=raw -n1 --pretty=%%H %s';
foreach ($this->process->splitLines($output) as $line) {
if (preg_match('{^composer/'.preg_quote($branch).'(?:\.x)?$}i', trim($line))) {

 if (0 === $this->process->execute(sprintf($guessTemplate, $date, escapeshellarg(trim($line))), $output, $path)) {
$newReference = trim($output);
}

break;
}
}

if (empty($newReference)) {

 if (0 !== $this->process->execute(sprintf($guessTemplate, $date, '--all'), $output, $path)) {
throw new \RuntimeException('Failed to execute ' . $this->sanitizeUrl($command) . "\n\n" . $this->process->getErrorOutput());
}
$newReference = trim($output);
}


 $command = sprintf($template, escapeshellarg($reference));
if (0 === $this->process->execute($command, $output, $path)) {
$this->io->write('    '.$reference.' is gone (history was rewritten?), recovered by checking out '.$newReference);

return;
}
}

throw new \RuntimeException('Failed to execute ' . $this->sanitizeUrl($command) . "\n\n" . $this->process->getErrorOutput());
}











protected function runCommand($commandCallable, $url, $cwd, $initialClone = false)
{
if ($initialClone) {
$origCwd = $cwd;
$cwd = null;
}

if (preg_match('{^ssh://[^@]+@[^:]+:[^0-9]+}', $url)) {
throw new \InvalidArgumentException('The source URL '.$url.' is invalid, ssh URLs should have a port number after ":".'."\n".'Use ssh://git@example.com:22/path or just git@example.com:path if you do not want to provide a password or custom port.');
}


 if (preg_match('{^(?:https?|git)(://github.com/.*)}', $url, $match)) {
$protocols = $this->config->get('github-protocols');
if (!is_array($protocols)) {
throw new \RuntimeException('Config value "github-protocols" must be an array, got '.gettype($protocols));
}
$messages = array();
foreach ($protocols as $protocol) {
$url = $protocol . $match[1];
if (0 === $this->process->execute(call_user_func($commandCallable, $url), $ignoredOutput, $cwd)) {
return;
}
$messages[] = '- ' . $url . "\n" . preg_replace('#^#m', '  ', $this->process->getErrorOutput());
if ($initialClone) {
$this->filesystem->removeDirectory($origCwd);
}
}


 $this->throwException('Failed to clone ' . $this->sanitizeUrl($url) .' via '.implode(', ', $protocols).' protocols, aborting.' . "\n\n" . implode("\n", $messages), $url);
}

$command = call_user_func($commandCallable, $url);
if (0 !== $this->process->execute($command, $ignoredOutput, $cwd)) {

 if (preg_match('{^git@(github.com):(.+?)\.git$}i', $url, $match)) {
if (!$this->io->hasAuthentication($match[1])) {
$gitHubUtil = new GitHub($this->io, $this->config, $this->process);
$message = 'Cloning failed using an ssh key for authentication, enter your GitHub credentials to access private repos';

if (!$gitHubUtil->authorizeOAuth($match[1]) && $this->io->isInteractive()) {
$gitHubUtil->authorizeOAuthInteractively($match[1], $message);
}
}

if ($this->io->hasAuthentication($match[1])) {
$auth = $this->io->getAuthentication($match[1]);
$url = 'https://'.urlencode($auth['username']) . ':' . urlencode($auth['password']) . '@'.$match[1].'/'.$match[2].'.git';

$command = call_user_func($commandCallable, $url);
if (0 === $this->process->execute($command, $ignoredOutput, $cwd)) {
return;
}
}
} elseif ( 
 $this->io->isInteractive() &&
preg_match('{(https?://)([^/]+)(.*)$}i', $url, $match) &&
strpos($this->process->getErrorOutput(), 'fatal: Authentication failed') !== false
) {
if ($this->io->hasAuthentication($match[2])) {
$auth = $this->io->getAuthentication($match[2]);
} else {
$this->io->write($url.' requires Authentication');
$auth = array(
'username' => $this->io->ask('Username: '),
'password' => $this->io->askAndHideAnswer('Password: '),
);
}

$url = $match[1].urlencode($auth['username']).':'.urlencode($auth['password']).'@'.$match[2].$match[3];

$command = call_user_func($commandCallable, $url);
if (0 === $this->process->execute($command, $ignoredOutput, $cwd)) {
$this->io->setAuthentication($match[2], $auth['username'], $auth['password']);

return;
}
}

if ($initialClone) {
$this->filesystem->removeDirectory($origCwd);
}
$this->throwException('Failed to execute ' . $this->sanitizeUrl($command) . "\n\n" . $this->process->getErrorOutput(), $url);
}
}

protected function throwException($message, $url)
{
if (0 !== $this->process->execute('git --version', $ignoredOutput)) {
throw new \RuntimeException('Failed to clone '.$this->sanitizeUrl($url).', git was not found, check that it is installed and in your PATH env.' . "\n\n" . $this->process->getErrorOutput());
}

throw new \RuntimeException($message);
}

protected function sanitizeUrl($message)
{
return preg_replace('{://(.+?):.+?@}', '://$1:***@', $message);
}

protected function setPushUrl(PackageInterface $package, $path)
{

 if (preg_match('{^(?:https?|git)://github.com/([^/]+)/([^/]+?)(?:\.git)?$}', $package->getSourceUrl(), $match)) {
$protocols = $this->config->get('github-protocols');
$pushUrl = 'git@github.com:'.$match[1].'/'.$match[2].'.git';
if ($protocols[0] !== 'git') {
$pushUrl = 'https://github.com/'.$match[1].'/'.$match[2].'.git';
}
$cmd = sprintf('git remote set-url --push origin %s', escapeshellarg($pushUrl));
$this->process->execute($cmd, $ignoredOutput, $path);
}
}




protected function getCommitLogs($fromReference, $toReference, $path)
{
$path = $this->normalizePath($path);
$command = sprintf('git log %s..%s --pretty=format:"%%h - %%an: %%s"', $fromReference, $toReference);

if (0 !== $this->process->execute($command, $output, $path)) {
throw new \RuntimeException('Failed to execute ' . $command . "\n\n" . $this->process->getErrorOutput());
}

return $output;
}





protected function discardChanges($path)
{
$path = $this->normalizePath($path);
if (0 !== $this->process->execute('git reset --hard', $output, $path)) {
throw new \RuntimeException("Could not reset changes\n\n:".$this->process->getErrorOutput());
}
}





protected function stashChanges($path)
{
$path = $this->normalizePath($path);
if (0 !== $this->process->execute('git stash', $output, $path)) {
throw new \RuntimeException("Could not stash changes\n\n:".$this->process->getErrorOutput());
}

$this->hasStashedChanges = true;
}

protected function cleanEnv()
{
$util = new GitUtil;
$util->cleanEnv();
}

protected function normalizePath($path)
{
if (defined('PHP_WINDOWS_VERSION_MAJOR') && strlen($path) > 0) {
$basePath = $path;
$removed = array();

while (!is_dir($basePath) && $basePath !== '\\') {
array_unshift($removed, basename($basePath));
$basePath = dirname($basePath);
}

if ($basePath === '\\') {
return $path;
}

$path = rtrim(realpath($basePath) . '/' . implode('/', $removed), '/');
}

return $path;
}
}
<?php











namespace Composer\Repository;






class InvalidRepositoryException extends \Exception
{
}
<?php











namespace Composer\Repository;

use Composer\Package\AliasPackage;
use Composer\Package\PackageInterface;
use Composer\Package\CompletePackageInterface;
use Composer\Package\Version\VersionParser;






class ArrayRepository implements RepositoryInterface
{
protected $packages;

public function __construct(array $packages = array())
{
foreach ($packages as $package) {
$this->addPackage($package);
}
}




public function findPackage($name, $version)
{

 $versionParser = new VersionParser();
$version = $versionParser->normalize($version);
$name = strtolower($name);

foreach ($this->getPackages() as $package) {
if ($name === $package->getName() && $version === $package->getVersion()) {
return $package;
}
}
}




public function findPackages($name, $version = null)
{

 $name = strtolower($name);


 if (null !== $version) {
$versionParser = new VersionParser();
$version = $versionParser->normalize($version);
}

$packages = array();

foreach ($this->getPackages() as $package) {
if ($package->getName() === $name && (null === $version || $version === $package->getVersion())) {
$packages[] = $package;
}
}

return $packages;
}




public function search($query, $mode = 0)
{
$regex = '{(?:'.implode('|', preg_split('{\s+}', $query)).')}i';

$matches = array();
foreach ($this->getPackages() as $package) {
$name = $package->getName();
if (isset($matches[$name])) {
continue;
}
if (preg_match($regex, $name)
|| ($mode === self::SEARCH_FULLTEXT && $package instanceof CompletePackageInterface && preg_match($regex, implode(' ', (array) $package->getKeywords()) . ' ' . $package->getDescription()))
) {
$matches[$name] = array(
'name' => $package->getPrettyName(),
'description' => $package->getDescription(),
);
}
}

return $matches;
}




public function hasPackage(PackageInterface $package)
{
$packageId = $package->getUniqueName();

foreach ($this->getPackages() as $repoPackage) {
if ($packageId === $repoPackage->getUniqueName()) {
return true;
}
}

return false;
}






public function addPackage(PackageInterface $package)
{
if (null === $this->packages) {
$this->initialize();
}
$package->setRepository($this);
$this->packages[] = $package;

if ($package instanceof AliasPackage) {
$aliasedPackage = $package->getAliasOf();
if (null === $aliasedPackage->getRepository()) {
$this->addPackage($aliasedPackage);
}
}
}

protected function createAliasPackage(PackageInterface $package, $alias, $prettyAlias)
{
return new AliasPackage($package instanceof AliasPackage ? $package->getAliasOf() : $package, $alias, $prettyAlias);
}






public function removePackage(PackageInterface $package)
{
$packageId = $package->getUniqueName();

foreach ($this->getPackages() as $key => $repoPackage) {
if ($packageId === $repoPackage->getUniqueName()) {
array_splice($this->packages, $key, 1);

return;
}
}
}




public function getPackages()
{
if (null === $this->packages) {
$this->initialize();
}

return $this->packages;
}






public function count()
{
return count($this->packages);
}




protected function initialize()
{
$this->packages = array();
}
}
<?php











namespace Composer\Repository;

use Composer\Json\JsonFile;
use Composer\Package\Loader\ArrayLoader;
use Composer\Package\Dumper\ArrayDumper;







class FilesystemRepository extends WritableArrayRepository
{
private $file;






public function __construct(JsonFile $repositoryFile)
{
$this->file = $repositoryFile;
}




protected function initialize()
{
parent::initialize();

if (!$this->file->exists()) {
return;
}

try {
$packages = $this->file->read();

if (!is_array($packages)) {
throw new \UnexpectedValueException('Could not parse package list from the repository');
}
} catch (\Exception $e) {
throw new InvalidRepositoryException('Invalid repository data in '.$this->file->getPath().', packages could not be loaded: ['.get_class($e).'] '.$e->getMessage());
}

$loader = new ArrayLoader();
foreach ($packages as $packageData) {
$package = $loader->load($packageData);
$this->addPackage($package);
}
}

public function reload()
{
$this->packages = null;
$this->initialize();
}




public function write()
{
$data = array();
$dumper = new ArrayDumper();

foreach ($this->getCanonicalPackages() as $package) {
$data[] = $dumper->dump($package);
}

$this->file->write($data);
}
}
<?php











namespace Composer\Repository;

use Composer\Package\PackageInterface;






interface WritableRepositoryInterface extends RepositoryInterface
{



public function write();






public function addPackage(PackageInterface $package);






public function removePackage(PackageInterface $package);






public function getCanonicalPackages();




public function reload();
}
<?php











namespace Composer\Repository;

use Composer\IO\IOInterface;
use Composer\Package\Version\VersionParser;
use Composer\Repository\Pear\ChannelReader;
use Composer\Package\CompletePackage;
use Composer\Repository\Pear\ChannelInfo;
use Composer\Package\Link;
use Composer\Package\LinkConstraint\VersionConstraint;
use Composer\Util\RemoteFilesystem;
use Composer\Config;










class PearRepository extends ArrayRepository
{
private $url;
private $io;
private $rfs;
private $versionParser;




private $vendorAlias;

public function __construct(array $repoConfig, IOInterface $io, Config $config, RemoteFilesystem $rfs = null)
{
if (!preg_match('{^https?://}', $repoConfig['url'])) {
$repoConfig['url'] = 'http://'.$repoConfig['url'];
}

$urlBits = parse_url($repoConfig['url']);
if (empty($urlBits['scheme']) || empty($urlBits['host'])) {
throw new \UnexpectedValueException('Invalid url given for PEAR repository: '.$repoConfig['url']);
}

$this->url = rtrim($repoConfig['url'], '/');
$this->io = $io;
$this->rfs = $rfs ?: new RemoteFilesystem($this->io);
$this->vendorAlias = isset($repoConfig['vendor-alias']) ? $repoConfig['vendor-alias'] : null;
$this->versionParser = new VersionParser();
}

protected function initialize()
{
parent::initialize();

$this->io->write('Initializing PEAR repository '.$this->url);

$reader = new ChannelReader($this->rfs);
try {
$channelInfo = $reader->read($this->url);
} catch (\Exception $e) {
$this->io->write('<warning>PEAR repository from '.$this->url.' could not be loaded. '.$e->getMessage().'</warning>');

return;
}
$packages = $this->buildComposerPackages($channelInfo, $this->versionParser);
foreach ($packages as $package) {
$this->addPackage($package);
}
}








private function buildComposerPackages(ChannelInfo $channelInfo, VersionParser $versionParser)
{
$result = array();
foreach ($channelInfo->getPackages() as $packageDefinition) {
foreach ($packageDefinition->getReleases() as $version => $releaseInfo) {
try {
$normalizedVersion = $versionParser->normalize($version);
} catch (\UnexpectedValueException $e) {
if ($this->io->isVerbose()) {
$this->io->write('Could not load '.$packageDefinition->getPackageName().' '.$version.': '.$e->getMessage());
}
continue;
}

$composerPackageName = $this->buildComposerPackageName($packageDefinition->getChannelName(), $packageDefinition->getPackageName());


 
 $urlBits = parse_url($this->url);
$scheme = (isset($urlBits['scheme']) && 'https' === $urlBits['scheme'] && extension_loaded('openssl')) ? 'https' : 'http';
$distUrl = "{$scheme}://{$packageDefinition->getChannelName()}/get/{$packageDefinition->getPackageName()}-{$version}.tgz";

$requires = array();
$suggests = array();
$conflicts = array();
$replaces = array();


 
 if ($channelInfo->getName() == $packageDefinition->getChannelName()) {
$composerPackageAlias = $this->buildComposerPackageName($channelInfo->getAlias(), $packageDefinition->getPackageName());
$aliasConstraint = new VersionConstraint('==', $normalizedVersion);
$replaces[] = new Link($composerPackageName, $composerPackageAlias, $aliasConstraint, 'replaces', (string) $aliasConstraint);
}


 if (!empty($this->vendorAlias)
&& ($this->vendorAlias != 'pear-'.$channelInfo->getAlias() || $channelInfo->getName() != $packageDefinition->getChannelName())
) {
$composerPackageAlias = "{$this->vendorAlias}/{$packageDefinition->getPackageName()}";
$aliasConstraint = new VersionConstraint('==', $normalizedVersion);
$replaces[] = new Link($composerPackageName, $composerPackageAlias, $aliasConstraint, 'replaces', (string) $aliasConstraint);
}

foreach ($releaseInfo->getDependencyInfo()->getRequires() as $dependencyConstraint) {
$dependencyPackageName = $this->buildComposerPackageName($dependencyConstraint->getChannelName(), $dependencyConstraint->getPackageName());
$constraint = $versionParser->parseConstraints($dependencyConstraint->getConstraint());
$link = new Link($composerPackageName, $dependencyPackageName, $constraint, $dependencyConstraint->getType(), $dependencyConstraint->getConstraint());
switch ($dependencyConstraint->getType()) {
case 'required':
$requires[] = $link;
break;
case 'conflicts':
$conflicts[] = $link;
break;
case 'replaces':
$replaces[] = $link;
break;
}
}

foreach ($releaseInfo->getDependencyInfo()->getOptionals() as $group => $dependencyConstraints) {
foreach ($dependencyConstraints as $dependencyConstraint) {
$dependencyPackageName = $this->buildComposerPackageName($dependencyConstraint->getChannelName(), $dependencyConstraint->getPackageName());
$suggests[$group.'-'.$dependencyPackageName] = $dependencyConstraint->getConstraint();
}
}

$package = new CompletePackage($composerPackageName, $normalizedVersion, $version);
$package->setType('pear-library');
$package->setDescription($packageDefinition->getDescription());
$package->setDistType('file');
$package->setDistUrl($distUrl);
$package->setAutoload(array('classmap' => array('')));
$package->setIncludePaths(array('/'));
$package->setRequires($requires);
$package->setConflicts($conflicts);
$package->setSuggests($suggests);
$package->setReplaces($replaces);
$result[] = $package;
}
}

return $result;
}

private function buildComposerPackageName($channelName, $packageName)
{
if ('php' === $channelName) {
return "php";
}
if ('ext' === $channelName) {
return "ext-{$packageName}";
}

return "pear-{$channelName}/{$packageName}";
}
}
<?php











namespace Composer\Repository;

use Composer\IO\IOInterface;
use Composer\Config;








class RepositoryManager
{
private $localRepository;
private $repositories = array();
private $repositoryClasses = array();
private $io;
private $config;

public function __construct(IOInterface $io, Config $config)
{
$this->io = $io;
$this->config = $config;
}









public function findPackage($name, $version)
{
foreach ($this->repositories as $repository) {
if ($package = $repository->findPackage($name, $version)) {
return $package;
}
}
}









public function findPackages($name, $version)
{
$packages = array();

foreach ($this->repositories as $repository) {
$packages = array_merge($packages, $repository->findPackages($name, $version));
}

return $packages;
}






public function addRepository(RepositoryInterface $repository)
{
$this->repositories[] = $repository;
}









public function createRepository($type, $config)
{
if (!isset($this->repositoryClasses[$type])) {
throw new \InvalidArgumentException('Repository type is not registered: '.$type);
}

$class = $this->repositoryClasses[$type];

return new $class($config, $this->io, $this->config);
}







public function setRepositoryClass($type, $class)
{
$this->repositoryClasses[$type] = $class;
}






public function getRepositories()
{
return $this->repositories;
}






public function setLocalRepository(WritableRepositoryInterface $repository)
{
$this->localRepository = $repository;
}






public function getLocalRepository()
{
return $this->localRepository;
}







public function getLocalRepositories()
{
trigger_error('This method is deprecated, use getLocalRepository instead since the getLocalDevRepository is now gone', E_USER_DEPRECATED);

return array($this->localRepository);
}
}
<?php











namespace Composer\Repository;

use Composer\Package\AliasPackage;






class WritableArrayRepository extends ArrayRepository implements WritableRepositoryInterface
{



public function write()
{
}




public function reload()
{
}




public function getCanonicalPackages()
{
$packages = $this->getPackages();


 $packagesByName = array();
foreach ($packages as $package) {
if (!isset($packagesByName[$package->getName()]) || $packagesByName[$package->getName()] instanceof AliasPackage) {
$packagesByName[$package->getName()] = $package;
}
}

$canonicalPackages = array();


 foreach ($packagesByName as $package) {
while ($package instanceof AliasPackage) {
$package = $package->getAliasOf();
}

$canonicalPackages[] = $package;
}

return $canonicalPackages;
}
}
<?php











namespace Composer\Repository\Vcs;

use Composer\Downloader\TransportException;
use Composer\Json\JsonFile;
use Composer\Cache;
use Composer\IO\IOInterface;
use Composer\Util\RemoteFilesystem;
use Composer\Util\GitHub;




class GitHubDriver extends VcsDriver
{
protected $cache;
protected $owner;
protected $repository;
protected $tags;
protected $branches;
protected $rootIdentifier;
protected $hasIssues;
protected $infoCache = array();
protected $isPrivate = false;






protected $gitDriver;




public function initialize()
{
preg_match('#^(?:(?:https?|git)://github\.com/|git@github\.com:)([^/]+)/(.+?)(?:\.git)?$#', $this->url, $match);
$this->owner = $match[1];
$this->repository = $match[2];
$this->originUrl = 'github.com';
$this->cache = new Cache($this->io, $this->config->get('cache-repo-dir').'/'.$this->originUrl.'/'.$this->owner.'/'.$this->repository);

$this->fetchRootIdentifier();
}




public function getRootIdentifier()
{
if ($this->gitDriver) {
return $this->gitDriver->getRootIdentifier();
}

return $this->rootIdentifier;
}




public function getUrl()
{
if ($this->gitDriver) {
return $this->gitDriver->getUrl();
}

return 'https://github.com/'.$this->owner.'/'.$this->repository.'.git';
}




public function getSource($identifier)
{
if ($this->gitDriver) {
return $this->gitDriver->getSource($identifier);
}
if ($this->isPrivate) {

 
 $url = $this->generateSshUrl();
} else {
$url = $this->getUrl();
}

return array('type' => 'git', 'url' => $url, 'reference' => $identifier);
}




public function getDist($identifier)
{
if ($this->gitDriver) {
return $this->gitDriver->getDist($identifier);
}
$url = 'https://api.github.com/repos/'.$this->owner.'/'.$this->repository.'/zipball/'.$identifier;

return array('type' => 'zip', 'url' => $url, 'reference' => $identifier, 'shasum' => '');
}




public function getComposerInformation($identifier)
{
if ($this->gitDriver) {
return $this->gitDriver->getComposerInformation($identifier);
}

if (preg_match('{[a-f0-9]{40}}i', $identifier) && $res = $this->cache->read($identifier)) {
$this->infoCache[$identifier] = JsonFile::parseJson($res);
}

if (!isset($this->infoCache[$identifier])) {
$notFoundRetries = 2;
while ($notFoundRetries) {
try {
$resource = 'https://api.github.com/repos/'.$this->owner.'/'.$this->repository.'/contents/composer.json?ref='.urlencode($identifier);
$composer = JsonFile::parseJson($this->getContents($resource));
if (empty($composer['content']) || $composer['encoding'] !== 'base64' || !($composer = base64_decode($composer['content']))) {
throw new \RuntimeException('Could not retrieve composer.json from '.$resource);
}
break;
} catch (TransportException $e) {
if (404 !== $e->getCode()) {
throw $e;
}


 
 $notFoundRetries--;
$composer = false;
}
}

if ($composer) {
$composer = JsonFile::parseJson($composer, $resource);

if (!isset($composer['time'])) {
$resource = 'https://api.github.com/repos/'.$this->owner.'/'.$this->repository.'/commits/'.urlencode($identifier);
$commit = JsonFile::parseJson($this->getContents($resource), $resource);
$composer['time'] = $commit['commit']['committer']['date'];
}
if (!isset($composer['support']['source'])) {
$label = array_search($identifier, $this->getTags()) ?: array_search($identifier, $this->getBranches()) ?: $identifier;
$composer['support']['source'] = sprintf('https://github.com/%s/%s/tree/%s', $this->owner, $this->repository, $label);
}
if (!isset($composer['support']['issues']) && $this->hasIssues) {
$composer['support']['issues'] = sprintf('https://github.com/%s/%s/issues', $this->owner, $this->repository);
}
}

if (preg_match('{[a-f0-9]{40}}i', $identifier)) {
$this->cache->write($identifier, json_encode($composer));
}

$this->infoCache[$identifier] = $composer;
}

return $this->infoCache[$identifier];
}




public function getTags()
{
if ($this->gitDriver) {
return $this->gitDriver->getTags();
}
if (null === $this->tags) {
$resource = 'https://api.github.com/repos/'.$this->owner.'/'.$this->repository.'/tags';
$tagsData = JsonFile::parseJson($this->getContents($resource), $resource);
$this->tags = array();
foreach ($tagsData as $tag) {
$this->tags[$tag['name']] = $tag['commit']['sha'];
}
}

return $this->tags;
}




public function getBranches()
{
if ($this->gitDriver) {
return $this->gitDriver->getBranches();
}
if (null === $this->branches) {
$resource = 'https://api.github.com/repos/'.$this->owner.'/'.$this->repository.'/git/refs/heads';
$branchData = JsonFile::parseJson($this->getContents($resource), $resource);
$this->branches = array();
foreach ($branchData as $branch) {
$name = substr($branch['ref'], 11);
$this->branches[$name] = $branch['object']['sha'];
}
}

return $this->branches;
}




public static function supports(IOInterface $io, $url, $deep = false)
{
if (!preg_match('#^((?:https?|git)://github\.com/|git@github\.com:)([^/]+)/(.+?)(?:\.git)?$#', $url)) {
return false;
}

if (!extension_loaded('openssl')) {
if ($io->isVerbose()) {
$io->write('Skipping GitHub driver for '.$url.' because the OpenSSL PHP extension is missing.');
}

return false;
}

return true;
}






protected function generateSshUrl()
{
return 'git@github.com:'.$this->owner.'/'.$this->repository.'.git';
}




protected function getContents($url, $fetchingRepoData = false)
{
try {
return parent::getContents($url);
} catch (TransportException $e) {
$gitHubUtil = new GitHub($this->io, $this->config, $this->process, $this->remoteFilesystem);

switch ($e->getCode()) {
case 401:
case 404:

 if (!$fetchingRepoData) {
throw $e;
}

if ($gitHubUtil->authorizeOAuth($this->originUrl)) {
return parent::getContents($url);
}

if (!$this->io->isInteractive()) {
return $this->attemptCloneFallback();
}

$gitHubUtil->authorizeOAuthInteractively($this->originUrl, 'Your GitHub credentials are required to fetch private repository metadata (<info>'.$this->url.'</info>)');

return parent::getContents($url);

case 403:
if (!$this->io->hasAuthentication($this->originUrl) && $gitHubUtil->authorizeOAuth($this->originUrl)) {
return parent::getContents($url);
}

if (!$this->io->isInteractive() && $fetchingRepoData) {
return $this->attemptCloneFallback();
}

$rateLimited = false;
foreach ($e->getHeaders() as $header) {
if (preg_match('{^X-RateLimit-Remaining: *0$}i', trim($header))) {
$rateLimited = true;
}
}

if (!$this->io->hasAuthentication($this->originUrl)) {
if (!$this->io->isInteractive()) {
$this->io->write('<error>GitHub API limit exhausted. Failed to get metadata for the '.$this->url.' repository, try running in interactive mode so that you can enter your GitHub credentials to increase the API limit</error>');
throw $e;
}

$gitHubUtil->authorizeOAuthInteractively($this->originUrl, 'API limit exhausted. Enter your GitHub credentials to get a larger API limit (<info>'.$this->url.'</info>)');

return parent::getContents($url);
}

if ($rateLimited) {
$rateLimit = $this->getRateLimit($e->getHeaders());
$this->io->write(sprintf(
'<error>GitHub API limit (%d calls/hr) is exhausted. You are already authorized so you have to wait until %s before doing more requests</error>',
$rateLimit['limit'],
$rateLimit['reset']
));
}

throw $e;

default:
throw $e;
}
}
}








protected function getRateLimit(array $headers)
{
$rateLimit = array(
'limit' => '?',
'reset' => '?',
);

foreach ($headers as $header) {
$header = trim($header);
if (false === strpos($header, 'X-RateLimit-')) {
continue;
}
list($type, $value) = explode(':', $header, 2);
switch ($type) {
case 'X-RateLimit-Limit':
$rateLimit['limit'] = (int) trim($value);
break;
case 'X-RateLimit-Reset':
$rateLimit['reset'] = date('Y-m-d H:i:s', (int) trim($value));
break;
}
}

return $rateLimit;
}






protected function fetchRootIdentifier()
{
$repoDataUrl = 'https://api.github.com/repos/'.$this->owner.'/'.$this->repository;

$repoData = JsonFile::parseJson($this->getContents($repoDataUrl, true), $repoDataUrl);
if (null === $repoData && null !== $this->gitDriver) {
return;
}

$this->isPrivate = !empty($repoData['private']);
if (isset($repoData['default_branch'])) {
$this->rootIdentifier = $repoData['default_branch'];
} elseif (isset($repoData['master_branch'])) {
$this->rootIdentifier = $repoData['master_branch'];
} else {
$this->rootIdentifier = 'master';
}
$this->hasIssues = !empty($repoData['has_issues']);
}

protected function attemptCloneFallback()
{
$this->isPrivate = true;

try {

 
 
 
 $this->gitDriver = new GitDriver(
array('url' => $this->generateSshUrl()),
$this->io,
$this->config,
$this->process,
$this->remoteFilesystem
);
$this->gitDriver->initialize();

return;
} catch (\RuntimeException $e) {
$this->gitDriver = null;

$this->io->write('<error>Failed to clone the '.$this->generateSshUrl().' repository, try running in interactive mode so that you can enter your GitHub credentials</error>');
throw $e;
}
}
}
<?php











namespace Composer\Repository\Vcs;

use Composer\Json\JsonFile;
use Composer\IO\IOInterface;




class GitBitbucketDriver extends VcsDriver implements VcsDriverInterface
{
protected $owner;
protected $repository;
protected $tags;
protected $branches;
protected $rootIdentifier;
protected $infoCache = array();




public function initialize()
{
preg_match('#^https://bitbucket\.org/([^/]+)/(.+?)\.git$#', $this->url, $match);
$this->owner = $match[1];
$this->repository = $match[2];
$this->originUrl = 'bitbucket.org';
}




public function getRootIdentifier()
{
if (null === $this->rootIdentifier) {
$resource = $this->getScheme() . '://api.bitbucket.org/1.0/repositories/'.$this->owner.'/'.$this->repository;
$repoData = JsonFile::parseJson($this->getContents($resource), $resource);
$this->rootIdentifier = !empty($repoData['main_branch']) ? $repoData['main_branch'] : 'master';
}

return $this->rootIdentifier;
}




public function getUrl()
{
return $this->url;
}




public function getSource($identifier)
{
return array('type' => 'git', 'url' => $this->getUrl(), 'reference' => $identifier);
}




public function getDist($identifier)
{
$url = $this->getScheme() . '://bitbucket.org/'.$this->owner.'/'.$this->repository.'/get/'.$identifier.'.zip';

return array('type' => 'zip', 'url' => $url, 'reference' => $identifier, 'shasum' => '');
}




public function getComposerInformation($identifier)
{
if (!isset($this->infoCache[$identifier])) {
$resource = $this->getScheme() . '://bitbucket.org/'.$this->owner.'/'.$this->repository.'/raw/'.$identifier.'/composer.json';
$composer = $this->getContents($resource);
if (!$composer) {
return;
}

$composer = JsonFile::parseJson($composer, $resource);

if (!isset($composer['time'])) {
$resource = $this->getScheme() . '://api.bitbucket.org/1.0/repositories/'.$this->owner.'/'.$this->repository.'/changesets/'.$identifier;
$changeset = JsonFile::parseJson($this->getContents($resource), $resource);
$composer['time'] = $changeset['timestamp'];
}
$this->infoCache[$identifier] = $composer;
}

return $this->infoCache[$identifier];
}




public function getTags()
{
if (null === $this->tags) {
$resource = $this->getScheme() . '://api.bitbucket.org/1.0/repositories/'.$this->owner.'/'.$this->repository.'/tags';
$tagsData = JsonFile::parseJson($this->getContents($resource), $resource);
$this->tags = array();
foreach ($tagsData as $tag => $data) {
$this->tags[$tag] = $data['raw_node'];
}
}

return $this->tags;
}




public function getBranches()
{
if (null === $this->branches) {
$resource = $this->getScheme() . '://api.bitbucket.org/1.0/repositories/'.$this->owner.'/'.$this->repository.'/branches';
$branchData = JsonFile::parseJson($this->getContents($resource), $resource);
$this->branches = array();
foreach ($branchData as $branch => $data) {
$this->branches[$branch] = $data['raw_node'];
}
}

return $this->branches;
}




public static function supports(IOInterface $io, $url, $deep = false)
{
if (!preg_match('#^https://bitbucket\.org/([^/]+)/(.+?)\.git$#', $url)) {
return false;
}

if (!extension_loaded('openssl')) {
if ($io->isVerbose()) {
$io->write('Skipping Bitbucket git driver for '.$url.' because the OpenSSL PHP extension is missing.');
}

return false;
}

return true;
}
}
<?php











namespace Composer\Repository\Vcs;

use Composer\Json\JsonFile;
use Composer\Util\ProcessExecutor;
use Composer\Util\Filesystem;
use Composer\Util\Git as GitUtil;
use Composer\IO\IOInterface;




class GitDriver extends VcsDriver
{
protected $tags;
protected $branches;
protected $rootIdentifier;
protected $repoDir;
protected $infoCache = array();




public function initialize()
{
if (static::isLocalUrl($this->url)) {
$this->repoDir = str_replace('file://', '', $this->url);
} else {
$this->repoDir = $this->config->get('cache-vcs-dir') . '/' . preg_replace('{[^a-z0-9.]}i', '-', $this->url) . '/';

$util = new GitUtil;
$util->cleanEnv();

$fs = new Filesystem();
$fs->ensureDirectoryExists(dirname($this->repoDir));

if (!is_writable(dirname($this->repoDir))) {
throw new \RuntimeException('Can not clone '.$this->url.' to access package information. The "'.dirname($this->repoDir).'" directory is not writable by the current user.');
}

if (preg_match('{^ssh://[^@]+@[^:]+:[^0-9]+}', $this->url)) {
throw new \InvalidArgumentException('The source URL '.$this->url.' is invalid, ssh URLs should have a port number after ":".'."\n".'Use ssh://git@example.com:22/path or just git@example.com:path if you do not want to provide a password or custom port.');
}


 if (is_dir($this->repoDir) && 0 === $this->process->execute('git remote', $output, $this->repoDir)) {
if (0 !== $this->process->execute('git remote update --prune origin', $output, $this->repoDir)) {
$this->io->write('<error>Failed to update '.$this->url.', package information from this repository may be outdated ('.$this->process->getErrorOutput().')</error>');
}
} else {

 $fs->removeDirectory($this->repoDir);

$command = sprintf('git clone --mirror %s %s', escapeshellarg($this->url), escapeshellarg($this->repoDir));
if (0 !== $this->process->execute($command, $output)) {
$output = $this->process->getErrorOutput();

if (0 !== $this->process->execute('git --version', $ignoredOutput)) {
throw new \RuntimeException('Failed to clone '.$this->url.', git was not found, check that it is installed and in your PATH env.' . "\n\n" . $this->process->getErrorOutput());
}

throw new \RuntimeException('Failed to clone '.$this->url.', could not read packages from it' . "\n\n" .$output);
}
}
}

$this->getTags();
$this->getBranches();
}




public function getRootIdentifier()
{
if (null === $this->rootIdentifier) {
$this->rootIdentifier = 'master';


 $this->process->execute('git branch --no-color', $output, $this->repoDir);
$branches = $this->process->splitLines($output);
if (!in_array('* master', $branches)) {
foreach ($branches as $branch) {
if ($branch && preg_match('{^\* +(\S+)}', $branch, $match)) {
$this->rootIdentifier = $match[1];
break;
}
}
}
}

return $this->rootIdentifier;
}




public function getUrl()
{
return $this->url;
}




public function getSource($identifier)
{
return array('type' => 'git', 'url' => $this->getUrl(), 'reference' => $identifier);
}




public function getDist($identifier)
{
return null;
}




public function getComposerInformation($identifier)
{
if (!isset($this->infoCache[$identifier])) {
$resource = sprintf('%s:composer.json', escapeshellarg($identifier));
$this->process->execute(sprintf('git show %s', $resource), $composer, $this->repoDir);

if (!trim($composer)) {
return;
}

$composer = JsonFile::parseJson($composer, $resource);

if (!isset($composer['time'])) {
$this->process->execute(sprintf('git log -1 --format=%%at %s', escapeshellarg($identifier)), $output, $this->repoDir);
$date = new \DateTime('@'.trim($output), new \DateTimeZone('UTC'));
$composer['time'] = $date->format('Y-m-d H:i:s');
}
$this->infoCache[$identifier] = $composer;
}

return $this->infoCache[$identifier];
}




public function getTags()
{
if (null === $this->tags) {
$this->tags = array();

$this->process->execute('git show-ref --tags', $output, $this->repoDir);
foreach ($output = $this->process->splitLines($output) as $tag) {
if ($tag && preg_match('{^([a-f0-9]{40}) refs/tags/(\S+)$}', $tag, $match)) {
$this->tags[$match[2]] = $match[1];
}
}
}

return $this->tags;
}




public function getBranches()
{
if (null === $this->branches) {
$branches = array();

$this->process->execute('git branch --no-color --no-abbrev -v', $output, $this->repoDir);
foreach ($this->process->splitLines($output) as $branch) {
if ($branch && !preg_match('{^ *[^/]+/HEAD }', $branch)) {
if (preg_match('{^(?:\* )? *(\S+) *([a-f0-9]+) .*$}', $branch, $match)) {
$branches[$match[1]] = $match[2];
}
}
}

$this->branches = $branches;
}

return $this->branches;
}




public static function supports(IOInterface $io, $url, $deep = false)
{
if (preg_match('#(^git://|\.git$|git(?:olite)?@|//git\.|//github.com/)#i', $url)) {
return true;
}


 if (static::isLocalUrl($url)) {
if (!is_dir($url)) {
throw new \RuntimeException('Directory does not exist: '.$url);
}

$process = new ProcessExecutor();
$url = str_replace('file://', '', $url);

 if ($process->execute('git tag', $output, $url) === 0) {
return true;
}
}

if (!$deep) {
return false;
}


 return false;
}
}
<?php











namespace Composer\Repository\Vcs;

use Composer\Cache;
use Composer\Json\JsonFile;
use Composer\Util\ProcessExecutor;
use Composer\Util\Filesystem;
use Composer\Util\Svn as SvnUtil;
use Composer\IO\IOInterface;
use Composer\Downloader\TransportException;





class SvnDriver extends VcsDriver
{
protected $cache;
protected $baseUrl;
protected $tags;
protected $branches;
protected $rootIdentifier;
protected $infoCache = array();

protected $trunkPath = 'trunk';
protected $branchesPath = 'branches';
protected $tagsPath = 'tags';
protected $packagePath = '';




private $util;




public function initialize()
{
$this->url = $this->baseUrl = rtrim(self::normalizeUrl($this->url), '/');

if (isset($this->repoConfig['trunk-path'])) {
$this->trunkPath = $this->repoConfig['trunk-path'];
}
if (isset($this->repoConfig['branches-path'])) {
$this->branchesPath = $this->repoConfig['branches-path'];
}
if (isset($this->repoConfig['tags-path'])) {
$this->tagsPath = $this->repoConfig['tags-path'];
}
if (isset($this->repoConfig['package-path'])) {
$this->packagePath = '/' . trim($this->repoConfig['package-path'], '/');
}

if (false !== ($pos = strrpos($this->url, '/' . $this->trunkPath))) {
$this->baseUrl = substr($this->url, 0, $pos);
}

$this->cache = new Cache($this->io, $this->config->get('cache-repo-dir').'/'.preg_replace('{[^a-z0-9.]}i', '-', $this->baseUrl));

$this->getBranches();
$this->getTags();
}




public function getRootIdentifier()
{
return $this->rootIdentifier ?: $this->trunkPath;
}




public function getUrl()
{
return $this->url;
}




public function getSource($identifier)
{
return array('type' => 'svn', 'url' => $this->baseUrl, 'reference' => $identifier);
}




public function getDist($identifier)
{
return null;
}




public function getComposerInformation($identifier)
{
$identifier = '/' . trim($identifier, '/') . '/';

if ($res = $this->cache->read($identifier.'.json')) {
$this->infoCache[$identifier] = JsonFile::parseJson($res);
}

if (!isset($this->infoCache[$identifier])) {
preg_match('{^(.+?)(@\d+)?/$}', $identifier, $match);
if (!empty($match[2])) {
$path = $match[1];
$rev = $match[2];
} else {
$path = $identifier;
$rev = '';
}

try {
$resource = $path.'composer.json';
$output = $this->execute('svn cat', $this->baseUrl . $resource . $rev);
if (!trim($output)) {
return;
}
} catch (\RuntimeException $e) {
throw new TransportException($e->getMessage());
}

$composer = JsonFile::parseJson($output, $this->baseUrl . $resource . $rev);

if (!isset($composer['time'])) {
$output = $this->execute('svn info', $this->baseUrl . $path . $rev);
foreach ($this->process->splitLines($output) as $line) {
if ($line && preg_match('{^Last Changed Date: ([^(]+)}', $line, $match)) {
$date = new \DateTime($match[1], new \DateTimeZone('UTC'));
$composer['time'] = $date->format('Y-m-d H:i:s');
break;
}
}
}

$this->cache->write($identifier.'.json', json_encode($composer));
$this->infoCache[$identifier] = $composer;
}

return $this->infoCache[$identifier];
}




public function getTags()
{
if (null === $this->tags) {
$this->tags = array();

if ($this->tagsPath !== false) {
$output = $this->execute('svn ls --verbose', $this->baseUrl . '/' . $this->tagsPath);
if ($output) {
foreach ($this->process->splitLines($output) as $line) {
$line = trim($line);
if ($line && preg_match('{^\s*(\S+).*?(\S+)\s*$}', $line, $match)) {
if (isset($match[1]) && isset($match[2]) && $match[2] !== './') {
$this->tags[rtrim($match[2], '/')] = $this->buildIdentifier(
'/' . $this->tagsPath . '/' . $match[2],
$match[1]
);
}
}
}
}
}
}

return $this->tags;
}




public function getBranches()
{
if (null === $this->branches) {
$this->branches = array();

$output = $this->execute('svn ls --verbose', $this->baseUrl . '/');
if ($output) {
foreach ($this->process->splitLines($output) as $line) {
$line = trim($line);
if ($line && preg_match('{^\s*(\S+).*?(\S+)\s*$}', $line, $match)) {
if (isset($match[1]) && isset($match[2]) && $match[2] === $this->trunkPath . '/') {
$this->branches[$this->trunkPath] = $this->buildIdentifier(
'/' . $this->trunkPath,
$match[1]
);
$this->rootIdentifier = $this->branches[$this->trunkPath];
break;
}
}
}
}
unset($output);

if ($this->branchesPath !== false) {
$output = $this->execute('svn ls --verbose', $this->baseUrl . '/' . $this->branchesPath);
if ($output) {
foreach ($this->process->splitLines(trim($output)) as $line) {
$line = trim($line);
if ($line && preg_match('{^\s*(\S+).*?(\S+)\s*$}', $line, $match)) {
if (isset($match[1]) && isset($match[2]) && $match[2] !== './') {
$this->branches[rtrim($match[2], '/')] = $this->buildIdentifier(
'/' . $this->branchesPath . '/' . $match[2],
$match[1]
);
}
}
}
}
}
}

return $this->branches;
}




public static function supports(IOInterface $io, $url, $deep = false)
{
$url = self::normalizeUrl($url);
if (preg_match('#(^svn://|^svn\+ssh://|svn\.)#i', $url)) {
return true;
}


 if (!$deep && !static::isLocalUrl($url)) {
return false;
}

$processExecutor = new ProcessExecutor();

$exit = $processExecutor->execute(
"svn info --non-interactive {$url}",
$ignoredOutput
);

if ($exit === 0) {

 return true;
}

if (false !== stripos($processExecutor->getErrorOutput(), 'authorization failed:')) {

 
 return true;
}

return false;
}








protected static function normalizeUrl($url)
{
$fs = new Filesystem();
if ($fs->isAbsolutePath($url)) {
return 'file://' . strtr($url, '\\', '/');
}

return $url;
}










protected function execute($command, $url)
{
if (null === $this->util) {
$this->util = new SvnUtil($this->baseUrl, $this->io, $this->process);
}

try {
return $this->util->execute($command, $url);
} catch (\RuntimeException $e) {
if (0 !== $this->process->execute('svn --version', $ignoredOutput)) {
throw new \RuntimeException('Failed to load '.$this->url.', svn was not found, check that it is installed and in your PATH env.' . "\n\n" . $this->process->getErrorOutput());
}

throw new \RuntimeException(
'Repository '.$this->url.' could not be processed, '.$e->getMessage()
);
}
}









protected function buildIdentifier($baseDir, $revision)
{
return rtrim($baseDir, '/') . $this->packagePath . '/@' . $revision;
}
}
<?php











namespace Composer\Repository\Vcs;

use Composer\IO\IOInterface;




interface VcsDriverInterface
{



public function initialize();







public function getComposerInformation($identifier);






public function getRootIdentifier();






public function getBranches();






public function getTags();





public function getDist($identifier);





public function getSource($identifier);






public function getUrl();








public function hasComposerFile($identifier);









public static function supports(IOInterface $io, $url, $deep = false);
}
<?php











namespace Composer\Repository\Vcs;

use Composer\Json\JsonFile;
use Composer\Util\ProcessExecutor;
use Composer\Util\Filesystem;
use Composer\IO\IOInterface;




class HgDriver extends VcsDriver
{
protected $tags;
protected $branches;
protected $rootIdentifier;
protected $repoDir;
protected $infoCache = array();




public function initialize()
{
if (static::isLocalUrl($this->url)) {
$this->repoDir = str_replace('file://', '', $this->url);
} else {
$cacheDir = $this->config->get('cache-vcs-dir');
$this->repoDir = $cacheDir . '/' . preg_replace('{[^a-z0-9]}i', '-', $this->url) . '/';

$fs = new Filesystem();
$fs->ensureDirectoryExists($cacheDir);

if (!is_writable(dirname($this->repoDir))) {
throw new \RuntimeException('Can not clone '.$this->url.' to access package information. The "'.$cacheDir.'" directory is not writable by the current user.');
}


 if (is_dir($this->repoDir) && 0 === $this->process->execute('hg summary', $output, $this->repoDir)) {
if (0 !== $this->process->execute('hg pull -u', $output, $this->repoDir)) {
$this->io->write('<error>Failed to update '.$this->url.', package information from this repository may be outdated ('.$this->process->getErrorOutput().')</error>');
}
} else {

 $fs->removeDirectory($this->repoDir);

if (0 !== $this->process->execute(sprintf('hg clone %s %s', escapeshellarg($this->url), escapeshellarg($this->repoDir)), $output, $cacheDir)) {
$output = $this->process->getErrorOutput();

if (0 !== $this->process->execute('hg --version', $ignoredOutput)) {
throw new \RuntimeException('Failed to clone '.$this->url.', hg was not found, check that it is installed and in your PATH env.' . "\n\n" . $this->process->getErrorOutput());
}

throw new \RuntimeException('Failed to clone '.$this->url.', could not read packages from it' . "\n\n" .$output);
}
}
}

$this->getTags();
$this->getBranches();
}




public function getRootIdentifier()
{
if (null === $this->rootIdentifier) {
$this->process->execute(sprintf('hg tip --template "{node}"'), $output, $this->repoDir);
$output = $this->process->splitLines($output);
$this->rootIdentifier = $output[0];
}

return $this->rootIdentifier;
}




public function getUrl()
{
return $this->url;
}




public function getSource($identifier)
{
return array('type' => 'hg', 'url' => $this->getUrl(), 'reference' => $identifier);
}




public function getDist($identifier)
{
return null;
}




public function getComposerInformation($identifier)
{
if (!isset($this->infoCache[$identifier])) {
$this->process->execute(sprintf('hg cat -r %s composer.json', escapeshellarg($identifier)), $composer, $this->repoDir);

if (!trim($composer)) {
return;
}

$composer = JsonFile::parseJson($composer, $identifier);

if (!isset($composer['time'])) {
$this->process->execute(sprintf('hg log --template "{date|rfc822date}" -r %s', escapeshellarg($identifier)), $output, $this->repoDir);
$date = new \DateTime(trim($output), new \DateTimeZone('UTC'));
$composer['time'] = $date->format('Y-m-d H:i:s');
}
$this->infoCache[$identifier] = $composer;
}

return $this->infoCache[$identifier];
}




public function getTags()
{
if (null === $this->tags) {
$tags = array();

$this->process->execute('hg tags', $output, $this->repoDir);
foreach ($this->process->splitLines($output) as $tag) {
if ($tag && preg_match('(^([^\s]+)\s+\d+:(.*)$)', $tag, $match)) {
$tags[$match[1]] = $match[2];
}
}
unset($tags['tip']);

$this->tags = $tags;
}

return $this->tags;
}




public function getBranches()
{
if (null === $this->branches) {
$branches = array();
$bookmarks = array();

$this->process->execute('hg branches', $output, $this->repoDir);
foreach ($this->process->splitLines($output) as $branch) {
if ($branch && preg_match('(^([^\s]+)\s+\d+:([a-f0-9]+))', $branch, $match)) {
$branches[$match[1]] = $match[2];
}
}

$this->process->execute('hg bookmarks', $output, $this->repoDir);
foreach ($this->process->splitLines($output) as $branch) {
if ($branch && preg_match('(^(?:[\s*]*)([^\s]+)\s+\d+:(.*)$)', $branch, $match)) {
$bookmarks[$match[1]] = $match[2];
}
}


 $this->branches = array_merge($bookmarks, $branches);
}

return $this->branches;
}




public static function supports(IOInterface $io, $url, $deep = false)
{
if (preg_match('#(^(?:https?|ssh)://(?:[^@]@)?bitbucket.org|https://(?:.*?)\.kilnhg.com)#i', $url)) {
return true;
}


 if (static::isLocalUrl($url)) {
if (!is_dir($url)) {
throw new \RuntimeException('Directory does not exist: '.$url);
}

$process = new ProcessExecutor();
$url = str_replace('file://', '', $url);

 if ($process->execute('hg summary', $output, $url) === 0) {
return true;
}
}

if (!$deep) {
return false;
}

$processExecutor = new ProcessExecutor();
$exit = $processExecutor->execute(sprintf('hg identify %s', escapeshellarg($url)), $ignored);

return $exit === 0;
}
}
<?php











namespace Composer\Repository\Vcs;

use Composer\Downloader\TransportException;
use Composer\Config;
use Composer\IO\IOInterface;
use Composer\Util\ProcessExecutor;
use Composer\Util\RemoteFilesystem;






abstract class VcsDriver implements VcsDriverInterface
{
protected $url;
protected $originUrl;
protected $repoConfig;
protected $io;
protected $config;
protected $process;
protected $remoteFilesystem;










final public function __construct(array $repoConfig, IOInterface $io, Config $config, ProcessExecutor $process = null, RemoteFilesystem $remoteFilesystem = null)
{

if (self::isLocalUrl($repoConfig['url'])) {
$repoConfig['url'] = realpath(
preg_replace('/^file:\/\//', '', $repoConfig['url'])
);
}

$this->url = $repoConfig['url'];
$this->originUrl = $repoConfig['url'];
$this->repoConfig = $repoConfig;
$this->io = $io;
$this->config = $config;
$this->process = $process ?: new ProcessExecutor($io);
$this->remoteFilesystem = $remoteFilesystem ?: new RemoteFilesystem($io);
}




public function hasComposerFile($identifier)
{
try {
return (bool) $this->getComposerInformation($identifier);
} catch (TransportException $e) {
}

return false;
}








protected function getScheme()
{
if (extension_loaded('openssl')) {
return 'https';
}

return 'http';
}








protected function getContents($url)
{
return $this->remoteFilesystem->getContents($this->originUrl, $url, false);
}

protected static function isLocalUrl($url)
{
return (bool) preg_match('{^(file://|/|[a-z]:[\\\\/])}i', $url);
}
}
<?php











namespace Composer\Repository\Vcs;

use Composer\Json\JsonFile;
use Composer\IO\IOInterface;




class HgBitbucketDriver extends VcsDriver
{
protected $owner;
protected $repository;
protected $tags;
protected $branches;
protected $rootIdentifier;
protected $infoCache = array();




public function initialize()
{
preg_match('#^https://bitbucket\.org/([^/]+)/([^/]+)/?$#', $this->url, $match);
$this->owner = $match[1];
$this->repository = $match[2];
$this->originUrl = 'bitbucket.org';
}




public function getRootIdentifier()
{
if (null === $this->rootIdentifier) {
$resource = $this->getScheme() . '://bitbucket.org/api/1.0/repositories/'.$this->owner.'/'.$this->repository.'/tags';
$repoData = JsonFile::parseJson($this->getContents($resource), $resource);
if (array() === $repoData || !isset($repoData['tip'])) {
throw new \RuntimeException($this->url.' does not appear to be a mercurial repository, use '.$this->url.'.git if this is a git bitbucket repository');
}
$this->rootIdentifier = $repoData['tip']['raw_node'];
}

return $this->rootIdentifier;
}




public function getUrl()
{
return $this->url;
}




public function getSource($identifier)
{
return array('type' => 'hg', 'url' => $this->getUrl(), 'reference' => $identifier);
}




public function getDist($identifier)
{
$url = $this->getScheme() . '://bitbucket.org/'.$this->owner.'/'.$this->repository.'/get/'.$identifier.'.zip';

return array('type' => 'zip', 'url' => $url, 'reference' => $identifier, 'shasum' => '');
}




public function getComposerInformation($identifier)
{
if (!isset($this->infoCache[$identifier])) {
$resource = $this->getScheme() . '://bitbucket.org/api/1.0/repositories/'.$this->owner.'/'.$this->repository.'/src/'.$identifier.'/composer.json';
$repoData = JsonFile::parseJson($this->getContents($resource), $resource);


 
 
 

if (!array_key_exists('data', $repoData)) {
return;
}

$composer = JsonFile::parseJson($repoData['data'], $resource);

if (!isset($composer['time'])) {
$resource = $this->getScheme() . '://bitbucket.org/api/1.0/repositories/'.$this->owner.'/'.$this->repository.'/changesets/'.$identifier;
$changeset = JsonFile::parseJson($this->getContents($resource), $resource);
$composer['time'] = $changeset['timestamp'];
}
$this->infoCache[$identifier] = $composer;
}

return $this->infoCache[$identifier];
}




public function getTags()
{
if (null === $this->tags) {
$resource = $this->getScheme() . '://bitbucket.org/api/1.0/repositories/'.$this->owner.'/'.$this->repository.'/tags';
$tagsData = JsonFile::parseJson($this->getContents($resource), $resource);
$this->tags = array();
foreach ($tagsData as $tag => $data) {
$this->tags[$tag] = $data['raw_node'];
}
unset($this->tags['tip']);
}

return $this->tags;
}




public function getBranches()
{
if (null === $this->branches) {
$resource = $this->getScheme() . '://bitbucket.org/api/1.0/repositories/'.$this->owner.'/'.$this->repository.'/branches';
$branchData = JsonFile::parseJson($this->getContents($resource), $resource);
$this->branches = array();
foreach ($branchData as $branch => $data) {
$this->branches[$branch] = $data['raw_node'];
}
}

return $this->branches;
}




public static function supports(IOInterface $io, $url, $deep = false)
{
if (!preg_match('#^https://bitbucket\.org/([^/]+)/([^/]+)/?$#', $url)) {
return false;
}

if (!extension_loaded('openssl')) {
if ($io->isVerbose()) {
$io->write('Skipping Bitbucket hg driver for '.$url.' because the OpenSSL PHP extension is missing.');
}

return false;
}

return true;
}
}
<?php











namespace Composer\Repository;








class InstalledArrayRepository extends WritableArrayRepository implements InstalledRepositoryInterface
{
}
<?php











namespace Composer\Repository;






class RepositorySecurityException extends \Exception
{
}
<?php











namespace Composer\Repository;

use Composer\Package\AliasPackage;
use Composer\Package\PackageInterface;




interface StreamableRepositoryInterface extends RepositoryInterface
{




















public function getMinimalPackages();







public function loadPackage(array $data);








public function loadAliasPackage(array $data, PackageInterface $aliasOf);
}
<?php











namespace Composer\Repository;

use Composer\Downloader\TransportException;
use Composer\Repository\Vcs\VcsDriverInterface;
use Composer\Package\Version\VersionParser;
use Composer\Package\Loader\ArrayLoader;
use Composer\Package\Loader\ValidatingArrayLoader;
use Composer\Package\Loader\InvalidPackageException;
use Composer\Package\Loader\LoaderInterface;
use Composer\IO\IOInterface;
use Composer\Config;




class VcsRepository extends ArrayRepository
{
protected $url;
protected $packageName;
protected $verbose;
protected $io;
protected $config;
protected $versionParser;
protected $type;
protected $loader;
protected $repoConfig;
protected $branchErrorOccurred = false;

public function __construct(array $repoConfig, IOInterface $io, Config $config, array $drivers = null)
{
$this->drivers = $drivers ?: array(
'github' => 'Composer\Repository\Vcs\GitHubDriver',
'git-bitbucket' => 'Composer\Repository\Vcs\GitBitbucketDriver',
'git' => 'Composer\Repository\Vcs\GitDriver',
'hg-bitbucket' => 'Composer\Repository\Vcs\HgBitbucketDriver',
'hg' => 'Composer\Repository\Vcs\HgDriver',

 'svn' => 'Composer\Repository\Vcs\SvnDriver',
);

$this->url = $repoConfig['url'];
$this->io = $io;
$this->type = isset($repoConfig['type']) ? $repoConfig['type'] : 'vcs';
$this->verbose = $io->isVerbose();
$this->config = $config;
$this->repoConfig = $repoConfig;
}

public function setLoader(LoaderInterface $loader)
{
$this->loader = $loader;
}

public function getDriver()
{
if (isset($this->drivers[$this->type])) {
$class = $this->drivers[$this->type];
$driver = new $class($this->repoConfig, $this->io, $this->config);
$driver->initialize();

return $driver;
}

foreach ($this->drivers as $driver) {
if ($driver::supports($this->io, $this->url)) {
$driver = new $driver($this->repoConfig, $this->io, $this->config);
$driver->initialize();

return $driver;
}
}

foreach ($this->drivers as $driver) {
if ($driver::supports($this->io, $this->url, true)) {
$driver = new $driver($this->repoConfig, $this->io, $this->config);
$driver->initialize();

return $driver;
}
}
}

public function hadInvalidBranches()
{
return $this->branchErrorOccurred;
}

protected function initialize()
{
parent::initialize();

$verbose = $this->verbose;

$driver = $this->getDriver();
if (!$driver) {
throw new \InvalidArgumentException('No driver found to handle VCS repository '.$this->url);
}

$this->versionParser = new VersionParser;
if (!$this->loader) {
$this->loader = new ArrayLoader($this->versionParser);
}

try {
if ($driver->hasComposerFile($driver->getRootIdentifier())) {
$data = $driver->getComposerInformation($driver->getRootIdentifier());
$this->packageName = !empty($data['name']) ? $data['name'] : null;
}
} catch (\Exception $e) {
if ($verbose) {
$this->io->write('<error>Skipped parsing '.$driver->getRootIdentifier().', '.$e->getMessage().'</error>');
}
}

foreach ($driver->getTags() as $tag => $identifier) {
$msg = 'Reading composer.json of <info>' . ($this->packageName ?: $this->url) . '</info> (<comment>' . $tag . '</comment>)';
if ($verbose) {
$this->io->write($msg);
} else {
$this->io->overwrite($msg, false);
}


 $tag = str_replace('release-', '', $tag);

if (!$parsedTag = $this->validateTag($tag)) {
if ($verbose) {
$this->io->write('<warning>Skipped tag '.$tag.', invalid tag name</warning>');
}
continue;
}

try {
if (!$data = $driver->getComposerInformation($identifier)) {
if ($verbose) {
$this->io->write('<warning>Skipped tag '.$tag.', no composer file</warning>');
}
continue;
}


 if (isset($data['version'])) {
$data['version_normalized'] = $this->versionParser->normalize($data['version']);
} else {

 $data['version'] = $tag;
$data['version_normalized'] = $parsedTag;
}


 $data['version'] = preg_replace('{[.-]?dev$}i', '', $data['version']);
$data['version_normalized'] = preg_replace('{(^dev-|[.-]?dev$)}i', '', $data['version_normalized']);


 if ($data['version_normalized'] !== $parsedTag) {
if ($verbose) {
$this->io->write('<warning>Skipped tag '.$tag.', tag ('.$parsedTag.') does not match version ('.$data['version_normalized'].') in composer.json</warning>');
}
continue;
}

if ($verbose) {
$this->io->write('Importing tag '.$tag.' ('.$data['version_normalized'].')');
}

$this->addPackage($this->loader->load($this->preProcess($driver, $data, $identifier)));
} catch (\Exception $e) {
if ($verbose) {
$this->io->write('<warning>Skipped tag '.$tag.', '.($e instanceof TransportException ? 'no composer file was found' : $e->getMessage()).'</warning>');
}
continue;
}
}

if (!$verbose) {
$this->io->overwrite('', false);
}

foreach ($driver->getBranches() as $branch => $identifier) {
$msg = 'Reading composer.json of <info>' . ($this->packageName ?: $this->url) . '</info> (<comment>' . $branch . '</comment>)';
if ($verbose) {
$this->io->write($msg);
} else {
$this->io->overwrite($msg, false);
}

if (!$parsedBranch = $this->validateBranch($branch)) {
if ($verbose) {
$this->io->write('<warning>Skipped branch '.$branch.', invalid name</warning>');
}
continue;
}

try {
if (!$data = $driver->getComposerInformation($identifier)) {
if ($verbose) {
$this->io->write('<warning>Skipped branch '.$branch.', no composer file</warning>');
}
continue;
}


 $data['version'] = $branch;
$data['version_normalized'] = $parsedBranch;


 if ('dev-' === substr($parsedBranch, 0, 4) || '9999999-dev' === $parsedBranch) {
$data['version'] = 'dev-' . $data['version'];
} else {
$data['version'] = preg_replace('{(\.9{7})+}', '.x', $parsedBranch);
}

if ($verbose) {
$this->io->write('Importing branch '.$branch.' ('.$data['version'].')');
}

$packageData = $this->preProcess($driver, $data, $identifier);
$package = $this->loader->load($packageData);
if ($this->loader instanceof ValidatingArrayLoader && $this->loader->getWarnings()) {
throw new InvalidPackageException($this->loader->getErrors(), $this->loader->getWarnings(), $packageData);
}
$this->addPackage($package);
} catch (TransportException $e) {
if ($verbose) {
$this->io->write('<warning>Skipped branch '.$branch.', no composer file was found</warning>');
}
continue;
} catch (\Exception $e) {
if (!$verbose) {
$this->io->write('');
}
$this->branchErrorOccurred = true;
$this->io->write('<error>Skipped branch '.$branch.', '.$e->getMessage().'</error>');
$this->io->write('');
continue;
}
}

if (!$verbose) {
$this->io->overwrite('', false);
}

if (!$this->getPackages()) {
throw new InvalidRepositoryException('No valid composer.json was found in any branch or tag of '.$this->url.', could not load a package from it.');
}
}

private function preProcess(VcsDriverInterface $driver, array $data, $identifier)
{

 $data['name'] = $this->packageName ?: $data['name'];

if (!isset($data['dist'])) {
$data['dist'] = $driver->getDist($identifier);
}
if (!isset($data['source'])) {
$data['source'] = $driver->getSource($identifier);
}

return $data;
}

private function validateBranch($branch)
{
try {
return $this->versionParser->normalizeBranch($branch);
} catch (\Exception $e) {
}

return false;
}

private function validateTag($version)
{
try {
return $this->versionParser->normalize($version);
} catch (\Exception $e) {
}

return false;
}
}
<?php











namespace Composer\Repository;

use Composer\Package\CompletePackage;
use Composer\Package\Version\VersionParser;




class PlatformRepository extends ArrayRepository
{
const PLATFORM_PACKAGE_REGEX = '{^(?:php(?:-64bit)?|(?:ext|lib)-[^/]+)$}i';

protected function initialize()
{
parent::initialize();

$versionParser = new VersionParser();

try {
$prettyVersion = PHP_VERSION;
$version = $versionParser->normalize($prettyVersion);
} catch (\UnexpectedValueException $e) {
$prettyVersion = preg_replace('#^([^~+-]+).*$#', '$1', PHP_VERSION);
$version = $versionParser->normalize($prettyVersion);
}

$php = new CompletePackage('php', $version, $prettyVersion);
$php->setDescription('The PHP interpreter');
parent::addPackage($php);

if (PHP_INT_SIZE === 8) {
$php64 = new CompletePackage('php-64bit', $version, $prettyVersion);
$php64->setDescription('The PHP interpreter (64bit)');
parent::addPackage($php64);
}

$loadedExtensions = get_loaded_extensions();


 foreach ($loadedExtensions as $name) {
if (in_array($name, array('standard', 'Core'))) {
continue;
}

$reflExt = new \ReflectionExtension($name);
try {
$prettyVersion = $reflExt->getVersion();
$version = $versionParser->normalize($prettyVersion);
} catch (\UnexpectedValueException $e) {
$prettyVersion = '0';
$version = $versionParser->normalize($prettyVersion);
}

$ext = new CompletePackage('ext-'.$name, $version, $prettyVersion);
$ext->setDescription('The '.$name.' PHP extension');
parent::addPackage($ext);
}


 
 
 foreach ($loadedExtensions as $name) {
$prettyVersion = null;
switch ($name) {
case 'curl':
$curlVersion = curl_version();
$prettyVersion = $curlVersion['version'];
break;

case 'iconv':
$prettyVersion = ICONV_VERSION;
break;

case 'intl':
$name = 'ICU';
if (defined('INTL_ICU_VERSION')) {
$prettyVersion = INTL_ICU_VERSION;
} else {
$reflector = new \ReflectionExtension('intl');

ob_start();
$reflector->info();
$output = ob_get_clean();

preg_match('/^ICU version => (.*)$/m', $output, $matches);
$prettyVersion = $matches[1];
}

break;

case 'libxml':
$prettyVersion = LIBXML_DOTTED_VERSION;
break;

case 'openssl':
$prettyVersion = preg_replace_callback('{^(?:OpenSSL\s*)?([0-9.]+)([a-z]?).*}', function ($match) {
return $match[1] . (empty($match[2]) ? '' : '.'.(ord($match[2]) - 96));
}, OPENSSL_VERSION_TEXT);
break;

case 'pcre':
$prettyVersion = preg_replace('{^(\S+).*}', '$1', PCRE_VERSION);
break;

case 'uuid':
$prettyVersion = phpversion('uuid');
break;

case 'xsl':
$prettyVersion = LIBXSLT_DOTTED_VERSION;
break;

default:

 continue 2;
}

try {
$version = $versionParser->normalize($prettyVersion);
} catch (\UnexpectedValueException $e) {
continue;
}

$lib = new CompletePackage('lib-'.$name, $version, $prettyVersion);
$lib->setDescription('The '.$name.' PHP library');
parent::addPackage($lib);
}
}
}
<?php











namespace Composer\Repository;






class InstalledFilesystemRepository extends FilesystemRepository implements InstalledRepositoryInterface
{
}
<?php











namespace Composer\Repository;

use Composer\Package\PackageInterface;






class CompositeRepository implements RepositoryInterface
{




private $repositories;





public function __construct(array $repositories)
{
$this->repositories = array();
foreach ($repositories as $repo) {
$this->addRepository($repo);
}
}






public function getRepositories()
{
return $this->repositories;
}




public function hasPackage(PackageInterface $package)
{
foreach ($this->repositories as $repository) {

if ($repository->hasPackage($package)) {
return true;
}
}

return false;
}




public function findPackage($name, $version)
{
foreach ($this->repositories as $repository) {

$package = $repository->findPackage($name, $version);
if (null !== $package) {
return $package;
}
}

return null;
}




public function findPackages($name, $version = null)
{
$packages = array();
foreach ($this->repositories as $repository) {

$packages[] = $repository->findPackages($name, $version);
}

return $packages ? call_user_func_array('array_merge', $packages) : array();
}




public function search($query, $mode = 0)
{
$matches = array();
foreach ($this->repositories as $repository) {

$matches[] = $repository->search($query, $mode);
}

return $matches ? call_user_func_array('array_merge', $matches) : array();
}




public function filterPackages($callback, $class = 'Composer\Package\Package')
{
foreach ($this->repositories as $repository) {
if (false === $repository->filterPackages($callback, $class)) {
return false;
}
}

return true;
}




public function getPackages()
{
$packages = array();
foreach ($this->repositories as $repository) {

$packages[] = $repository->getPackages();
}

return $packages ? call_user_func_array('array_merge', $packages) : array();
}




public function removePackage(PackageInterface $package)
{
foreach ($this->repositories as $repository) {

$repository->removePackage($package);
}
}




public function count()
{
$total = 0;
foreach ($this->repositories as $repository) {

$total += $repository->count();
}

return $total;
}





public function addRepository(RepositoryInterface $repository)
{
if ($repository instanceof self) {
foreach ($repository->getRepositories() as $repo) {
$this->addRepository($repo);
}
} else {
$this->repositories[] = $repository;
}
}
}
<?php











namespace Composer\Repository;








interface InstalledRepositoryInterface extends WritableRepositoryInterface
{
}
<?php











namespace Composer\Repository;

use Composer\Package\Loader\ArrayLoader;
use Composer\Package\PackageInterface;
use Composer\Package\AliasPackage;
use Composer\Package\Version\VersionParser;
use Composer\DependencyResolver\Pool;
use Composer\Json\JsonFile;
use Composer\Cache;
use Composer\Config;
use Composer\IO\IOInterface;
use Composer\Util\RemoteFilesystem;




class ComposerRepository extends ArrayRepository implements StreamableRepositoryInterface
{
protected $config;
protected $options;
protected $url;
protected $baseUrl;
protected $io;
protected $rfs;
protected $cache;
protected $notifyUrl;
protected $searchUrl;
protected $hasProviders = false;
protected $providersUrl;
protected $providerListing;
protected $providers = array();
protected $providersByUid = array();
protected $loader;
protected $rootAliases;
protected $allowSslDowngrade = false;
private $rawData;
private $minimalPackages;
private $degradedMode = false;
private $rootData;

public function __construct(array $repoConfig, IOInterface $io, Config $config)
{
if (!preg_match('{^[\w.]+\??://}', $repoConfig['url'])) {

 $repoConfig['url'] = 'http://'.$repoConfig['url'];
}
$repoConfig['url'] = rtrim($repoConfig['url'], '/');

if ('https?' === substr($repoConfig['url'], 0, 6)) {
$repoConfig['url'] = (extension_loaded('openssl') ? 'https' : 'http') . substr($repoConfig['url'], 6);
}

$urlBits = parse_url($repoConfig['url']);
if (empty($urlBits['scheme']) || empty($urlBits['host'])) {
throw new \UnexpectedValueException('Invalid url given for Composer repository: '.$repoConfig['url']);
}

if (!isset($repoConfig['options'])) {
$repoConfig['options'] = array();
}
if (isset($repoConfig['allow_ssl_downgrade']) && true === $repoConfig['allow_ssl_downgrade']) {
$this->allowSslDowngrade = true;
}

$this->config = $config;
$this->options = $repoConfig['options'];
$this->url = $repoConfig['url'];
$this->baseUrl = rtrim(preg_replace('{^(.*)(?:/packages.json)?(?:[?#].*)?$}', '$1', $this->url), '/');
$this->io = $io;
$this->cache = new Cache($io, $config->get('cache-repo-dir').'/'.preg_replace('{[^a-z0-9.]}i', '-', $this->url), 'a-z0-9.$');
$this->loader = new ArrayLoader();
$this->rfs = new RemoteFilesystem($this->io, $this->options);
}

public function setRootAliases(array $rootAliases)
{
$this->rootAliases = $rootAliases;
}

public function getPackages()
{
if ($this->hasProviders()) {
throw new \LogicException('Composer repositories that have providers can not load the complete list of packages, use getProviderNames instead.');
}

return parent::getPackages();
}




public function getMinimalPackages()
{
if (isset($this->minimalPackages)) {
return $this->minimalPackages;
}

if (null === $this->rawData) {
$this->rawData = $this->loadDataFromServer();
}

$this->minimalPackages = array();
$versionParser = new VersionParser;

foreach ($this->rawData as $package) {
$version = !empty($package['version_normalized']) ? $package['version_normalized'] : $versionParser->normalize($package['version']);
$data = array(
'name' => strtolower($package['name']),
'repo' => $this,
'version' => $version,
'raw' => $package,
);
if (!empty($package['replace'])) {
$data['replace'] = $package['replace'];
}
if (!empty($package['provide'])) {
$data['provide'] = $package['provide'];
}


 if ($aliasNormalized = $this->loader->getBranchAlias($package)) {
$data['alias'] = preg_replace('{(\.9{7})+}', '.x', $aliasNormalized);
$data['alias_normalized'] = $aliasNormalized;
}

$this->minimalPackages[] = $data;
}

return $this->minimalPackages;
}




public function search($query, $mode = 0)
{
$this->loadRootServerFile();

if ($this->searchUrl && $mode === self::SEARCH_FULLTEXT) {
$url = str_replace('%query%', $query, $this->searchUrl);

$json = $this->rfs->getContents($url, $url, false);
$results = JsonFile::parseJson($json, $url);

return $results['results'];
}

if ($this->hasProviders()) {
$results = array();
$regex = '{(?:'.implode('|', preg_split('{\s+}', $query)).')}i';

foreach ($this->getProviderNames() as $name) {
if (preg_match($regex, $name)) {
$results[] = array('name' => $name);
}
}

return $results;
}

return parent::search($query, $mode);
}

public function getProviderNames()
{
$this->loadRootServerFile();

if (null === $this->providerListing) {
$this->loadProviderListings($this->loadRootServerFile());
}

if ($this->providersUrl) {
return array_keys($this->providerListing);
}


 $providers = array();
foreach (array_keys($this->providerListing) as $provider) {
$providers[] = substr($provider, 2, -5);
}

return $providers;
}




public function loadPackage(array $data)
{
$package = $this->createPackage($data['raw'], 'Composer\Package\Package');
if ($package instanceof AliasPackage) {
$package = $package->getAliasOf();
}
$package->setRepository($this);

return $package;
}




public function loadAliasPackage(array $data, PackageInterface $aliasOf)
{
$aliasPackage = $this->createAliasPackage($aliasOf, $data['version'], $data['alias']);
$aliasPackage->setRepository($this);

return $aliasPackage;
}

public function hasProviders()
{
$this->loadRootServerFile();

return $this->hasProviders;
}

public function resetPackageIds()
{
foreach ($this->providersByUid as $package) {
if ($package instanceof AliasPackage) {
$package->getAliasOf()->setId(-1);
}
$package->setId(-1);
}
}

public function whatProvides(Pool $pool, $name)
{
if (isset($this->providers[$name])) {
return $this->providers[$name];
}


 if (preg_match(PlatformRepository::PLATFORM_PACKAGE_REGEX, $name) || '__root__' === $name) {
return array();
}

if (null === $this->providerListing) {
$this->loadProviderListings($this->loadRootServerFile());
}

if ($this->providersUrl) {

 if (!isset($this->providerListing[$name])) {
return array();
}

$hash = $this->providerListing[$name]['sha256'];
$url = str_replace(array('%package%', '%hash%'), array($name, $hash), $this->providersUrl);
$cacheKey = 'provider-'.strtr($name, '/', '$').'.json';
} else {

 $url = 'p/'.$name.'.json';


 if (!isset($this->providerListing[$url])) {
return array();
}
$hash = $this->providerListing[$url]['sha256'];
$cacheKey = null;
}

if ($this->cache->sha256($cacheKey) === $hash) {
$packages = json_decode($this->cache->read($cacheKey), true);
} else {
$packages = $this->fetchFile($url, $cacheKey, $hash);
}

$this->providers[$name] = array();
foreach ($packages['packages'] as $versions) {
foreach ($versions as $version) {

 if (isset($this->providersByUid[$version['uid']])) {

 if (!isset($this->providers[$name][$version['uid']])) {

 if ($this->providersByUid[$version['uid']] instanceof AliasPackage) {
$this->providers[$name][$version['uid']] = $this->providersByUid[$version['uid']]->getAliasOf();
$this->providers[$name][$version['uid'].'-alias'] = $this->providersByUid[$version['uid']];
} else {
$this->providers[$name][$version['uid']] = $this->providersByUid[$version['uid']];
}

 if (isset($this->providersByUid[$version['uid'].'-root'])) {
$this->providers[$name][$version['uid'].'-root'] = $this->providersByUid[$version['uid'].'-root'];
}
}
} else {
if (isset($version['provide']) || isset($version['replace'])) {

 $names = array(
strtolower($version['name']) => true,
);
if (isset($version['provide'])) {
foreach ($version['provide'] as $target => $constraint) {
$names[strtolower($target)] = true;
}
}
if (isset($version['replace'])) {
foreach ($version['replace'] as $target => $constraint) {
$names[strtolower($target)] = true;
}
}
$names = array_keys($names);
} else {
$names = array(strtolower($version['name']));
}
if (!$pool->isPackageAcceptable(strtolower($version['name']), VersionParser::parseStability($version['version']))) {
continue;
}


 $package = $this->createPackage($version, 'Composer\Package\Package');
$package->setRepository($this);

if ($package instanceof AliasPackage) {
$aliased = $package->getAliasOf();
$aliased->setRepository($this);

$this->providers[$name][$version['uid']] = $aliased;
$this->providers[$name][$version['uid'].'-alias'] = $package;


 $this->providersByUid[$version['uid']] = $package;
} else {
$this->providers[$name][$version['uid']] = $package;
$this->providersByUid[$version['uid']] = $package;
}


 unset($rootAliasData);

if (isset($this->rootAliases[$name][$package->getVersion()])) {
$rootAliasData = $this->rootAliases[$name][$package->getVersion()];
} elseif ($package instanceof AliasPackage && isset($this->rootAliases[$name][$package->getAliasOf()->getVersion()])) {
$rootAliasData = $this->rootAliases[$name][$package->getAliasOf()->getVersion()];
}

if (isset($rootAliasData)) {
$alias = $this->createAliasPackage($package, $rootAliasData['alias_normalized'], $rootAliasData['alias']);
$alias->setRepository($this);

$this->providers[$name][$version['uid'].'-root'] = $alias;
$this->providersByUid[$version['uid'].'-root'] = $alias;
}
}
}
}

return $this->providers[$name];
}




protected function initialize()
{
parent::initialize();

$repoData = $this->loadDataFromServer();

foreach ($repoData as $package) {
$this->addPackage($this->createPackage($package, 'Composer\Package\CompletePackage'));
}
}

protected function loadRootServerFile()
{
if (null !== $this->rootData) {
return $this->rootData;
}

if (!extension_loaded('openssl') && 'https' === substr($this->url, 0, 5)) {
throw new \RuntimeException('You must enable the openssl extension in your php.ini to load information from '.$this->url);
}

$jsonUrlParts = parse_url($this->url);

if (isset($jsonUrlParts['path']) && false !== strpos($jsonUrlParts['path'], '/packages.json')) {
$jsonUrl = $this->url;
} else {
$jsonUrl = $this->url . '/packages.json';
}

$data = $this->fetchFile($jsonUrl, 'packages.json');

if (!empty($data['notify-batch'])) {
$this->notifyUrl = $this->canonicalizeUrl($data['notify-batch']);
} elseif (!empty($data['notify_batch'])) {

 $this->notifyUrl = $this->canonicalizeUrl($data['notify_batch']);
} elseif (!empty($data['notify'])) {
$this->notifyUrl = $this->canonicalizeUrl($data['notify']);
}

if (!empty($data['search'])) {
$this->searchUrl = $this->canonicalizeUrl($data['search']);
}

if ($this->allowSslDowngrade) {
$this->url = str_replace('https://', 'http://', $this->url);
}

if (!empty($data['providers-url'])) {
$this->providersUrl = $this->canonicalizeUrl($data['providers-url']);
$this->hasProviders = true;
}

if (!empty($data['providers']) || !empty($data['providers-includes'])) {
$this->hasProviders = true;
}

return $this->rootData = $data;
}

protected function canonicalizeUrl($url)
{
if ('/' === $url[0]) {
return preg_replace('{(https?://[^/]+).*}i', '$1' . $url, $this->url);
}

return $url;
}

protected function loadDataFromServer()
{
$data = $this->loadRootServerFile();

return $this->loadIncludes($data);
}

protected function loadProviderListings($data)
{
if (isset($data['providers'])) {
if (!is_array($this->providerListing)) {
$this->providerListing = array();
}
$this->providerListing = array_merge($this->providerListing, $data['providers']);
}

if ($this->providersUrl && isset($data['provider-includes'])) {
$includes = $data['provider-includes'];
foreach ($includes as $include => $metadata) {
$url = $this->baseUrl . '/' . str_replace('%hash%', $metadata['sha256'], $include);
$cacheKey = str_replace(array('%hash%','$'), '', $include);
if ($this->cache->sha256($cacheKey) === $metadata['sha256']) {
$includedData = json_decode($this->cache->read($cacheKey), true);
} else {
$includedData = $this->fetchFile($url, $cacheKey, $metadata['sha256']);
}

$this->loadProviderListings($includedData);
}
} elseif (isset($data['providers-includes'])) {

 $includes = $data['providers-includes'];
foreach ($includes as $include => $metadata) {
if ($this->cache->sha256($include) === $metadata['sha256']) {
$includedData = json_decode($this->cache->read($include), true);
} else {
$includedData = $this->fetchFile($include, null, $metadata['sha256']);
}

$this->loadProviderListings($includedData);
}
}
}

protected function loadIncludes($data)
{
$packages = array();


 if (!isset($data['packages']) && !isset($data['includes'])) {
foreach ($data as $pkg) {
foreach ($pkg['versions'] as $metadata) {
$packages[] = $metadata;
}
}

return $packages;
}

if (isset($data['packages'])) {
foreach ($data['packages'] as $package => $versions) {
foreach ($versions as $version => $metadata) {
$packages[] = $metadata;
}
}
}

if (isset($data['includes'])) {
foreach ($data['includes'] as $include => $metadata) {
if ($this->cache->sha1($include) === $metadata['sha1']) {
$includedData = json_decode($this->cache->read($include), true);
} else {
$includedData = $this->fetchFile($include);
}
$packages = array_merge($packages, $this->loadIncludes($includedData));
}
}

return $packages;
}

protected function createPackage(array $data, $class)
{
try {
if (!isset($data['notification-url'])) {
$data['notification-url'] = $this->notifyUrl;
}

return $this->loader->load($data, 'Composer\Package\CompletePackage');
} catch (\Exception $e) {
throw new \RuntimeException('Could not load package '.(isset($data['name']) ? $data['name'] : json_encode($data)).' in '.$this->url.': ['.get_class($e).'] '.$e->getMessage(), 0, $e);
}
}

protected function fetchFile($filename, $cacheKey = null, $sha256 = null)
{
if (!$cacheKey) {
$cacheKey = $filename;
$filename = $this->baseUrl.'/'.$filename;
}

$retries = 3;
while ($retries--) {
try {
$json = $this->rfs->getContents($filename, $filename, false);
if ($sha256 && $sha256 !== hash('sha256', $json)) {
if ($retries) {
usleep(100000);

continue;
}


 throw new RepositorySecurityException('The contents of '.$filename.' do not match its signature. This should indicate a man-in-the-middle attack. Try running composer again and report this if you think it is a mistake.');
}
$data = JsonFile::parseJson($json, $filename);
$this->cache->write($cacheKey, $json);

break;
} catch (\Exception $e) {
if ($retries) {
usleep(100000);
continue;
}

if ($e instanceof RepositorySecurityException) {
throw $e;
}

if ($contents = $this->cache->read($cacheKey)) {
if (!$this->degradedMode) {
$this->io->write('<warning>'.$e->getMessage().'</warning>');
$this->io->write('<warning>'.$this->url.' could not be fully loaded, package information was loaded from the local cache and may be out of date</warning>');
}
$this->degradedMode = true;
$data = JsonFile::parseJson($contents, $this->cache->getRoot().$cacheKey);

break;
}

throw $e;
}
}

return $data;
}
}
<?php











namespace Composer\Repository\Pear;






class DependencyInfo
{
private $requires;
private $optionals;





public function __construct($requires, $optionals)
{
$this->requires = $requires;
$this->optionals = $optionals;
}




public function getRequires()
{
return $this->requires;
}




public function getOptionals()
{
return $this->optionals;
}
}
<?php











namespace Composer\Repository\Pear;






class PackageDependencyParser
{






public function buildDependencyInfo($depArray)
{
if (!is_array($depArray)) {
return new DependencyInfo(array(), array());
}
if (!$this->isHash($depArray)) {
return new DependencyInfo($this->buildDependency10Info($depArray), array());
}

return $this->buildDependency20Info($depArray);
}













private function buildDependency10Info($depArray)
{
static $dep10toOperatorMap = array('has'=>'==', 'eq' => '==', 'ge' => '>=', 'gt' => '>', 'le' => '<=', 'lt' => '<', 'not' => '!=');

$result = array();

foreach ($depArray as $depItem) {
if (empty($depItem['rel']) || !array_key_exists($depItem['rel'], $dep10toOperatorMap)) {

 continue;
}

$depType = !empty($depItem['optional']) && 'yes' == $depItem['optional']
? 'optional'
: 'required';
$depType = 'not' == $depItem['rel']
? 'conflicts'
: $depType;

$depVersion = !empty($depItem['version']) ? $this->parseVersion($depItem['version']) : '*';


 $depVersionConstraint = ('has' == $depItem['rel'] || 'not' == $depItem['rel']) && '*' == $depVersion
? '*'
: $dep10toOperatorMap[$depItem['rel']] . $depVersion;

switch ($depItem['type']) {
case 'php':
$depChannelName = 'php';
$depPackageName = '';
break;
case 'pkg':
$depChannelName = !empty($depItem['channel']) ? $depItem['channel'] : 'pear.php.net';
$depPackageName = $depItem['name'];
break;
case 'ext':
$depChannelName = 'ext';
$depPackageName = $depItem['name'];
break;
case 'os':
case 'sapi':
$depChannelName = '';
$depPackageName = '';
break;
default:
$depChannelName = '';
$depPackageName = '';
break;
}

if ('' != $depChannelName) {
$result[] = new DependencyConstraint(
$depType,
$depVersionConstraint,
$depChannelName,
$depPackageName
);
}
}

return $result;
}







private function buildDependency20Info($depArray)
{
$result = array();
$optionals = array();
$defaultOptionals = array();
foreach ($depArray as $depType => $depTypeGroup) {
if (!is_array($depTypeGroup)) {
continue;
}
if ('required' == $depType || 'optional' == $depType) {
foreach ($depTypeGroup as $depItemType => $depItem) {
switch ($depItemType) {
case 'php':
$result[] = new DependencyConstraint(
$depType,
$this->parse20VersionConstraint($depItem),
'php',
''
);
break;
case 'package':
$deps = $this->buildDepPackageConstraints($depItem, $depType);
$result = array_merge($result, $deps);
break;
case 'extension':
$deps = $this->buildDepExtensionConstraints($depItem, $depType);
$result = array_merge($result, $deps);
break;
case 'subpackage':
$deps = $this->buildDepPackageConstraints($depItem, 'replaces');
$defaultOptionals += $deps;
break;
case 'os':
case 'pearinstaller':
break;
default:
break;
}
}
} elseif ('group' == $depType) {
if ($this->isHash($depTypeGroup)) {
$depTypeGroup = array($depTypeGroup);
}

foreach ($depTypeGroup as $depItem) {
$groupName = $depItem['attribs']['name'];
if (!isset($optionals[$groupName])) {
$optionals[$groupName] = array();
}

if (isset($depItem['subpackage'])) {
$optionals[$groupName] += $this->buildDepPackageConstraints($depItem['subpackage'], 'replaces');
} else {
$result += $this->buildDepPackageConstraints($depItem['package'], 'optional');
}
}
}
}

if (count($defaultOptionals) > 0) {
$optionals['*'] = $defaultOptionals;
}

return new DependencyInfo($result, $optionals);
}








private function buildDepExtensionConstraints($depItem, $depType)
{
if ($this->isHash($depItem)) {
$depItem = array($depItem);
}

$result = array();
foreach ($depItem as $subDepItem) {
$depChannelName = 'ext';
$depPackageName = $subDepItem['name'];
$depVersionConstraint = $this->parse20VersionConstraint($subDepItem);

$result[] = new DependencyConstraint(
$depType,
$depVersionConstraint,
$depChannelName,
$depPackageName
);
}

return $result;
}








private function buildDepPackageConstraints($depItem, $depType)
{
if ($this->isHash($depItem)) {
$depItem = array($depItem);
}

$result = array();
foreach ($depItem as $subDepItem) {
$depChannelName = $subDepItem['channel'];
$depPackageName = $subDepItem['name'];
$depVersionConstraint = $this->parse20VersionConstraint($subDepItem);
if (isset($subDepItem['conflicts'])) {
$depType = 'conflicts';
}

$result[] = new DependencyConstraint(
$depType,
$depVersionConstraint,
$depChannelName,
$depPackageName
);
}

return $result;
}







private function parse20VersionConstraint(array $data)
{
static $dep20toOperatorMap = array('has'=>'==', 'min' => '>=', 'max' => '<=', 'exclude' => '!=');

$versions = array();
$values = array_intersect_key($data, $dep20toOperatorMap);
if (0 == count($values)) {
return '*';
}
if (isset($values['min']) && isset($values['exclude']) && $data['min'] == $data['exclude']) {
$versions[] = '>' . $this->parseVersion($values['min']);
} elseif (isset($values['max']) && isset($values['exclude']) && $data['max'] == $data['exclude']) {
$versions[] = '<' . $this->parseVersion($values['max']);
} else {
foreach ($values as $op => $version) {
if ('exclude' == $op && is_array($version)) {
foreach ($version as $versionPart) {
$versions[] = $dep20toOperatorMap[$op] . $this->parseVersion($versionPart);
}
} else {
$versions[] = $dep20toOperatorMap[$op] . $this->parseVersion($version);
}
}
}

return implode(',', $versions);
}







private function parseVersion($version)
{
if (preg_match('{^v?(\d{1,3})(\.\d+)?(\.\d+)?(\.\d+)?}i', $version, $matches)) {
$version = $matches[1]
.(!empty($matches[2]) ? $matches[2] : '.0')
.(!empty($matches[3]) ? $matches[3] : '.0')
.(!empty($matches[4]) ? $matches[4] : '.0');

return $version;
}

return null;
}







private function isHash(array $array)
{
return !array_key_exists(1, $array) && !array_key_exists(0, $array);
}
}
<?php











namespace Composer\Repository\Pear;






class ChannelInfo
{
private $name;
private $alias;
private $packages;






public function __construct($name, $alias, array $packages)
{
$this->name = $name;
$this->alias = $alias;
$this->packages = $packages;
}






public function getName()
{
return $this->name;
}






public function getAlias()
{
return $this->alias;
}






public function getPackages()
{
return $this->packages;
}
}
<?php











namespace Composer\Repository\Pear;

use Composer\Util\RemoteFilesystem;








class ChannelReader extends BaseChannelReader
{

private $readerMap;

public function __construct(RemoteFilesystem $rfs)
{
parent::__construct($rfs);

$rest10reader = new ChannelRest10Reader($rfs);
$rest11reader = new ChannelRest11Reader($rfs);

$this->readerMap = array(
'REST1.3' => $rest11reader,
'REST1.2' => $rest11reader,
'REST1.1' => $rest11reader,
'REST1.0' => $rest10reader,
);
}








public function read($url)
{
$xml = $this->requestXml($url, "/channel.xml");

$channelName = (string) $xml->name;
$channelSummary = (string) $xml->summary;
$channelAlias = (string) $xml->suggestedalias;

$supportedVersions = array_keys($this->readerMap);
$selectedRestVersion = $this->selectRestVersion($xml, $supportedVersions);
if (!$selectedRestVersion) {
throw new \UnexpectedValueException(sprintf('PEAR repository %s does not supports any of %s protocols.', $url, implode(', ', $supportedVersions)));
}

$reader = $this->readerMap[$selectedRestVersion['version']];
$packageDefinitions = $reader->read($selectedRestVersion['baseUrl']);

return new ChannelInfo($channelName, $channelAlias, $packageDefinitions);
}








private function selectRestVersion($channelXml, $supportedVersions)
{
$channelXml->registerXPathNamespace('ns', self::CHANNEL_NS);

foreach ($supportedVersions as $version) {
$xpathTest = "ns:servers/ns:primary/ns:rest/ns:baseurl[@type='{$version}']";
$testResult = $channelXml->xpath($xpathTest);
if (count($testResult) > 0) {
return array('version' => $version, 'baseUrl' => (string) $testResult[0]);
}
}

return null;
}
}
<?php











namespace Composer\Repository\Pear;






class PackageInfo
{
private $channelName;
private $packageName;
private $license;
private $shortDescription;
private $description;
private $releases;









public function __construct($channelName, $packageName, $license, $shortDescription, $description, $releases)
{
$this->channelName = $channelName;
$this->packageName = $packageName;
$this->license = $license;
$this->shortDescription = $shortDescription;
$this->description = $description;
$this->releases = $releases;
}




public function getChannelName()
{
return $this->channelName;
}




public function getPackageName()
{
return $this->packageName;
}




public function getDescription()
{
return $this->description;
}




public function getShortDescription()
{
return $this->shortDescription;
}




public function getLicense()
{
return $this->license;
}




public function getReleases()
{
return $this->releases;
}
}
<?php











namespace Composer\Repository\Pear;






class DependencyConstraint
{
private $type;
private $constraint;
private $channelName;
private $packageName;







public function __construct($type, $constraint, $channelName, $packageName)
{
$this->type = $type;
$this->constraint = $constraint;
$this->channelName = $channelName;
$this->packageName = $packageName;
}

public function getChannelName()
{
return $this->channelName;
}

public function getConstraint()
{
return $this->constraint;
}

public function getPackageName()
{
return $this->packageName;
}

public function getType()
{
return $this->type;
}
}
<?php











namespace Composer\Repository\Pear;










class ChannelRest11Reader extends BaseChannelReader
{
private $dependencyReader;

public function __construct($rfs)
{
parent::__construct($rfs);

$this->dependencyReader = new PackageDependencyParser();
}








public function read($baseUrl)
{
return $this->readChannelPackages($baseUrl);
}








private function readChannelPackages($baseUrl)
{
$result = array();

$xml = $this->requestXml($baseUrl, "/c/categories.xml");
$xml->registerXPathNamespace('ns', self::ALL_CATEGORIES_NS);
foreach ($xml->xpath('ns:c') as $node) {
$categoryName = (string) $node;
$categoryPackages = $this->readCategoryPackages($baseUrl, $categoryName);
$result = array_merge($result, $categoryPackages);
}

return $result;
}









private function readCategoryPackages($baseUrl, $categoryName)
{
$result = array();

$categoryPath = '/c/'.urlencode($categoryName).'/packagesinfo.xml';
$xml = $this->requestXml($baseUrl, $categoryPath);
$xml->registerXPathNamespace('ns', self::CATEGORY_PACKAGES_INFO_NS);
foreach ($xml->xpath('ns:pi') as $node) {
$packageInfo = $this->parsePackage($node);
$result[] = $packageInfo;
}

return $result;
}







private function parsePackage($packageInfo)
{
$packageInfo->registerXPathNamespace('ns', self::CATEGORY_PACKAGES_INFO_NS);
$channelName = (string) $packageInfo->p->c;
$packageName = (string) $packageInfo->p->n;
$license = (string) $packageInfo->p->l;
$shortDescription = (string) $packageInfo->p->s;
$description = (string) $packageInfo->p->d;

$dependencies = array();
foreach ($packageInfo->xpath('ns:deps') as $node) {
$dependencyVersion = (string) $node->v;
$dependencyArray = unserialize((string) $node->d);

$dependencyInfo = $this->dependencyReader->buildDependencyInfo($dependencyArray);

$dependencies[$dependencyVersion] = $dependencyInfo;
}

$releases = array();
$releasesInfo = $packageInfo->xpath('ns:a/ns:r');
if ($releasesInfo) {
foreach ($releasesInfo as $node) {
$releaseVersion = (string) $node->v;
$releaseStability = (string) $node->s;
$releases[$releaseVersion] = new ReleaseInfo(
$releaseStability,
isset($dependencies[$releaseVersion]) ? $dependencies[$releaseVersion] : new DependencyInfo(array(), array())
);
}
}

return new PackageInfo(
$channelName,
$packageName,
$license,
$shortDescription,
$description,
$releases
);
}
}
<?php











namespace Composer\Repository\Pear;






class ReleaseInfo
{
private $stability;
private $dependencyInfo;





public function __construct($stability, $dependencyInfo)
{
$this->stability = $stability;
$this->dependencyInfo = $dependencyInfo;
}




public function getDependencyInfo()
{
return $this->dependencyInfo;
}




public function getStability()
{
return $this->stability;
}
}
<?php











namespace Composer\Repository\Pear;

use Composer\Util\RemoteFilesystem;








abstract class BaseChannelReader
{



const CHANNEL_NS = 'http://pear.php.net/channel-1.0';
const ALL_CATEGORIES_NS = 'http://pear.php.net/dtd/rest.allcategories';
const CATEGORY_PACKAGES_INFO_NS = 'http://pear.php.net/dtd/rest.categorypackageinfo';
const ALL_PACKAGES_NS = 'http://pear.php.net/dtd/rest.allpackages';
const ALL_RELEASES_NS = 'http://pear.php.net/dtd/rest.allreleases';
const PACKAGE_INFO_NS = 'http://pear.php.net/dtd/rest.package';


private $rfs;

protected function __construct(RemoteFilesystem $rfs)
{
$this->rfs = $rfs;
}









protected function requestContent($origin, $path)
{
$url = rtrim($origin, '/') . '/' . ltrim($path, '/');
$content = $this->rfs->getContents($origin, $url, false);
if (!$content) {
throw new \UnexpectedValueException('The PEAR channel at ' . $url . ' did not respond.');
}

return $content;
}









protected function requestXml($origin, $path)
{

 $xml = simplexml_load_string($this->requestContent($origin, $path), "SimpleXMLElement", LIBXML_NOERROR);

if (false == $xml) {
$url = rtrim($origin, '/') . '/' . ltrim($path, '/');
throw new \UnexpectedValueException(sprintf('The PEAR channel at ' . $origin . ' is broken. (Invalid XML at file `%s`)', $path));
}

return $xml;
}
}
<?php











namespace Composer\Repository\Pear;

use Composer\Downloader\TransportException;












class ChannelRest10Reader extends BaseChannelReader
{
private $dependencyReader;

public function __construct($rfs)
{
parent::__construct($rfs);

$this->dependencyReader = new PackageDependencyParser();
}








public function read($baseUrl)
{
return $this->readPackages($baseUrl);
}








private function readPackages($baseUrl)
{
$result = array();

$xmlPath = '/p/packages.xml';
$xml = $this->requestXml($baseUrl, $xmlPath);
$xml->registerXPathNamespace('ns', self::ALL_PACKAGES_NS);
foreach ($xml->xpath('ns:p') as $node) {
$packageName = (string) $node;
$packageInfo = $this->readPackage($baseUrl, $packageName);
$result[] = $packageInfo;
}

return $result;
}









private function readPackage($baseUrl, $packageName)
{
$xmlPath = '/p/' . strtolower($packageName) . '/info.xml';
$xml = $this->requestXml($baseUrl, $xmlPath);
$xml->registerXPathNamespace('ns', self::PACKAGE_INFO_NS);

$channelName = (string) $xml->c;
$packageName = (string) $xml->n;
$license = (string) $xml->l;
$shortDescription = (string) $xml->s;
$description = (string) $xml->d;

return new PackageInfo(
$channelName,
$packageName,
$license,
$shortDescription,
$description,
$this->readPackageReleases($baseUrl, $packageName)
);
}










private function readPackageReleases($baseUrl, $packageName)
{
$result = array();

try {
$xmlPath = '/r/' . strtolower($packageName) . '/allreleases.xml';
$xml = $this->requestXml($baseUrl, $xmlPath);
$xml->registerXPathNamespace('ns', self::ALL_RELEASES_NS);
foreach ($xml->xpath('ns:r') as $node) {
$releaseVersion = (string) $node->v;
$releaseStability = (string) $node->s;

try {
$result[$releaseVersion] = new ReleaseInfo(
$releaseStability,
$this->readPackageReleaseDependencies($baseUrl, $packageName, $releaseVersion)
);
} catch (TransportException $exception) {
if ($exception->getCode() != 404) {
throw $exception;
}
}
}
} catch (TransportException $exception) {
if ($exception->getCode() != 404) {
throw $exception;
}
}

return $result;
}










private function readPackageReleaseDependencies($baseUrl, $packageName, $version)
{
$dependencyReader = new PackageDependencyParser();

$depthPath = '/r/' . strtolower($packageName) . '/deps.' . $version . '.txt';
$content = $this->requestContent($baseUrl, $depthPath);
$dependencyArray = unserialize($content);
$result = $dependencyReader->buildDependencyInfo($dependencyArray);

return $result;
}
}
<?php











namespace Composer\Repository;

use Composer\Package\PackageInterface;








interface RepositoryInterface extends \Countable
{
const SEARCH_FULLTEXT = 0;
const SEARCH_NAME = 1;








public function hasPackage(PackageInterface $package);









public function findPackage($name, $version);









public function findPackages($name, $version = null);






public function getPackages();








public function search($query, $mode = 0);
}
<?php











namespace Composer\Repository;

use Composer\IO\IOInterface;
use Composer\Json\JsonFile;
use Composer\Package\Loader\ArrayLoader;




class ArtifactRepository extends ArrayRepository
{

protected $loader;

protected $lookup;

public function __construct(array $repoConfig, IOInterface $io)
{
if (!extension_loaded('zip')) {
throw new \RuntimeException('The artifact repository requires PHP\'s zip extension');
}

$this->loader = new ArrayLoader();
$this->lookup = $repoConfig['url'];
$this->io = $io;
}

protected function initialize()
{
parent::initialize();

$this->scanDirectory($this->lookup);
}

private function scanDirectory($path)
{
$io = $this->io;

$directory = new \RecursiveDirectoryIterator($path);
$iterator = new \RecursiveIteratorIterator($directory);
$regex = new \RegexIterator($iterator, '/^.+\.(zip|phar)$/i');
foreach ($regex as $file) {

if (!$file->isFile()) {
continue;
}

$package = $this->getComposerInformation($file);
if (!$package) {
if ($io->isVerbose()) {
$io->write("File <comment>{$file->getBasename()}</comment> doesn't seem to hold a package");
}
continue;
}

if ($io->isVerbose()) {
$template = 'Found package <info>%s</info> (<comment>%s</comment>) in file <info>%s</info>';
$io->write(sprintf($template, $package->getName(), $package->getPrettyVersion(), $file->getBasename()));
}

$this->addPackage($package);
}
}

private function getComposerInformation(\SplFileInfo $file)
{
$zip = new \ZipArchive();
$zip->open($file->getPathname());

if (0 == $zip->numFiles) {
return false;
}

$foundFileIndex = $zip->locateName('composer.json', \ZipArchive::FL_NODIR);
if (false === $foundFileIndex) {
return false;
}

$configurationFileName = $zip->getNameIndex($foundFileIndex);

$composerFile = "zip://{$file->getPathname()}#$configurationFileName";
$json = file_get_contents($composerFile);

$package = JsonFile::parseJson($json, $composerFile);
$package['dist'] = array(
'type' => 'zip',
'url' => $file->getRealPath(),
'reference' => $file->getBasename(),
'shasum' => sha1_file($file->getRealPath())
);

$package = $this->loader->load($package);

return $package;
}
}
<?php











namespace Composer\Repository;

use Composer\Package\Loader\ArrayLoader;
use Composer\Package\Loader\ValidatingArrayLoader;






class PackageRepository extends ArrayRepository
{
private $config;






public function __construct(array $config)
{
$this->config = $config['package'];


 if (!is_numeric(key($this->config))) {
$this->config = array($this->config);
}
}




protected function initialize()
{
parent::initialize();

$loader = new ValidatingArrayLoader(new ArrayLoader, false);
foreach ($this->config as $package) {
try {
$package = $loader->load($package);
} catch (\Exception $e) {
throw new InvalidRepositoryException('A repository of type "package" contains an invalid package definition: '.$e->getMessage()."\n\nInvalid package definition:\n".json_encode($package));
}

$this->addPackage($package);
}
}
}
<?php











namespace Composer\Package;






class CompletePackage extends Package implements CompletePackageInterface
{
protected $repositories;
protected $license = array();
protected $keywords;
protected $authors;
protected $description;
protected $homepage;
protected $scripts = array();
protected $support = array();




public function setScripts(array $scripts)
{
$this->scripts = $scripts;
}




public function getScripts()
{
return $this->scripts;
}






public function setRepositories($repositories)
{
$this->repositories = $repositories;
}




public function getRepositories()
{
return $this->repositories;
}






public function setLicense(array $license)
{
$this->license = $license;
}




public function getLicense()
{
return $this->license;
}






public function setKeywords(array $keywords)
{
$this->keywords = $keywords;
}




public function getKeywords()
{
return $this->keywords;
}






public function setAuthors(array $authors)
{
$this->authors = $authors;
}




public function getAuthors()
{
return $this->authors;
}






public function setDescription($description)
{
$this->description = $description;
}




public function getDescription()
{
return $this->description;
}






public function setHomepage($homepage)
{
$this->homepage = $homepage;
}




public function getHomepage()
{
return $this->homepage;
}






public function setSupport(array $support)
{
$this->support = $support;
}




public function getSupport()
{
return $this->support;
}
}
<?php











namespace Composer\Package\Dumper;

use Composer\Package\BasePackage;
use Composer\Package\PackageInterface;
use Composer\Package\CompletePackageInterface;
use Composer\Package\RootPackageInterface;
use Composer\Package\Link;





class ArrayDumper
{
public function dump(PackageInterface $package)
{
$keys = array(
'binaries' => 'bin',
'type',
'extra',
'installationSource' => 'installation-source',
'autoload',
'notificationUrl' => 'notification-url',
'includePaths' => 'include-path',
);

$data = array();
$data['name'] = $package->getPrettyName();
$data['version'] = $package->getPrettyVersion();
$data['version_normalized'] = $package->getVersion();

if ($package->getTargetDir()) {
$data['target-dir'] = $package->getTargetDir();
}

if ($package->getSourceType()) {
$data['source']['type'] = $package->getSourceType();
$data['source']['url'] = $package->getSourceUrl();
$data['source']['reference'] = $package->getSourceReference();
}

if ($package->getDistType()) {
$data['dist']['type'] = $package->getDistType();
$data['dist']['url'] = $package->getDistUrl();
$data['dist']['reference'] = $package->getDistReference();
$data['dist']['shasum'] = $package->getDistSha1Checksum();
}

if ($package->getArchiveExcludes()) {
$data['archive']['exclude'] = $package->getArchiveExcludes();
}

foreach (BasePackage::$supportedLinkTypes as $type => $opts) {
if ($links = $package->{'get'.ucfirst($opts['method'])}()) {
foreach ($links as $link) {
$data[$type][$link->getTarget()] = $link->getPrettyConstraint();
}
ksort($data[$type]);
}
}

if ($packages = $package->getSuggests()) {
ksort($packages);
$data['suggest'] = $packages;
}

if ($package->getReleaseDate()) {
$data['time'] = $package->getReleaseDate()->format('Y-m-d H:i:s');
}

$data = $this->dumpValues($package, $keys, $data);

if ($package instanceof CompletePackageInterface) {
$keys = array(
'scripts',
'license',
'authors',
'description',
'homepage',
'keywords',
'repositories',
'support',
);

$data = $this->dumpValues($package, $keys, $data);

if (isset($data['keywords']) && is_array($data['keywords'])) {
sort($data['keywords']);
}
}

if ($package instanceof RootPackageInterface) {
$minimumStability = $package->getMinimumStability();
if ($minimumStability) {
$data['minimum-stability'] = $minimumStability;
}
}

return $data;
}

private function dumpValues(PackageInterface $package, array $keys, array $data)
{
foreach ($keys as $method => $key) {
if (is_numeric($method)) {
$method = $key;
}

$getter = 'get'.ucfirst($method);
$value = $package->$getter();

if (null !== $value && !(is_array($value) && 0 === count($value))) {
$data[$key] = $value;
}
}

return $data;
}
}
<?php











namespace Composer\Package\Loader;




class InvalidPackageException extends \Exception
{
private $errors;
private $warnings;
private $data;

public function __construct(array $errors, array $warnings, array $data)
{
$this->errors = $errors;
$this->warnings = $warnings;
$this->data = $data;
parent::__construct("Invalid package information: \n".implode("\n", array_merge($errors, $warnings)));
}

public function getData()
{
return $this->data;
}

public function getErrors()
{
return $this->errors;
}

public function getWarnings()
{
return $this->warnings;
}
}
<?php











namespace Composer\Package\Loader;

use Composer\Json\JsonFile;




class JsonLoader
{
private $loader;

public function __construct(LoaderInterface $loader)
{
$this->loader = $loader;
}





public function load($json)
{
if ($json instanceof JsonFile) {
$config = $json->read();
} elseif (file_exists($json)) {
$config = JsonFile::parseJson(file_get_contents($json), $json);
} elseif (is_string($json)) {
$config = JsonFile::parseJson($json);
}

return $this->loader->load($config);
}
}
<?php











namespace Composer\Package\Loader;






interface LoaderInterface
{







public function load(array $package, $class = 'Composer\Package\CompletePackage');
}
<?php











namespace Composer\Package\Loader;

use Composer\Package;
use Composer\Package\AliasPackage;
use Composer\Package\RootAliasPackage;
use Composer\Package\RootPackageInterface;
use Composer\Package\Version\VersionParser;





class ArrayLoader implements LoaderInterface
{
protected $versionParser;

public function __construct(VersionParser $parser = null)
{
if (!$parser) {
$parser = new VersionParser;
}
$this->versionParser = $parser;
}

public function load(array $config, $class = 'Composer\Package\CompletePackage')
{
if (!isset($config['name'])) {
throw new \UnexpectedValueException('Unknown package has no name defined ('.json_encode($config).').');
}
if (!isset($config['version'])) {
throw new \UnexpectedValueException('Package '.$config['name'].' has no version defined.');
}


 if (isset($config['version_normalized'])) {
$version = $config['version_normalized'];
} else {
$version = $this->versionParser->normalize($config['version']);
}
$package = new $class($config['name'], $version, $config['version']);
$package->setType(isset($config['type']) ? strtolower($config['type']) : 'library');

if (isset($config['target-dir'])) {
$package->setTargetDir($config['target-dir']);
}

if (isset($config['extra']) && is_array($config['extra'])) {
$package->setExtra($config['extra']);
}

if (isset($config['bin'])) {
if (!is_array($config['bin'])) {
throw new \UnexpectedValueException('Package '.$config['name'].'\'s bin key should be an array, '.gettype($config['bin']).' given.');
}
foreach ($config['bin'] as $key => $bin) {
$config['bin'][$key]= ltrim($bin, '/');
}
$package->setBinaries($config['bin']);
}

if (isset($config['installation-source'])) {
$package->setInstallationSource($config['installation-source']);
}

if (isset($config['source'])) {
if (!isset($config['source']['type']) || !isset($config['source']['url']) || !isset($config['source']['reference'])) {
throw new \UnexpectedValueException(sprintf(
"Package %s's source key should be specified as {\"type\": ..., \"url\": ..., \"reference\": ...},\n%s given.",
$config['name'],
json_encode($config['source'])
));
}
$package->setSourceType($config['source']['type']);
$package->setSourceUrl($config['source']['url']);
$package->setSourceReference($config['source']['reference']);
}

if (isset($config['dist'])) {
if (!isset($config['dist']['type'])
|| !isset($config['dist']['url'])) {
throw new \UnexpectedValueException(sprintf(
"Package %s's dist key should be specified as ".
"{\"type\": ..., \"url\": ..., \"reference\": ..., \"shasum\": ...},\n%s given.",
$config['name'],
json_encode($config['dist'])
));
}
$package->setDistType($config['dist']['type']);
$package->setDistUrl($config['dist']['url']);
$package->setDistReference(isset($config['dist']['reference']) ? $config['dist']['reference'] : null);
$package->setDistSha1Checksum(isset($config['dist']['shasum']) ? $config['dist']['shasum'] : null);
}

foreach (Package\BasePackage::$supportedLinkTypes as $type => $opts) {
if (isset($config[$type])) {
$method = 'set'.ucfirst($opts['method']);
$package->{$method}(
$this->versionParser->parseLinks(
$package->getName(),
$package->getPrettyVersion(),
$opts['description'],
$config[$type]
)
);
}
}

if (isset($config['suggest']) && is_array($config['suggest'])) {
foreach ($config['suggest'] as $target => $reason) {
if ('self.version' === trim($reason)) {
$config['suggest'][$target] = $package->getPrettyVersion();
}
}
$package->setSuggests($config['suggest']);
}

if (isset($config['autoload'])) {
$package->setAutoload($config['autoload']);
}

if (isset($config['include-path'])) {
$package->setIncludePaths($config['include-path']);
}

if (!empty($config['time'])) {
$time = ctype_digit($config['time']) ? '@'.$config['time'] : $config['time'];

try {
$date = new \DateTime($time, new \DateTimeZone('UTC'));
$package->setReleaseDate($date);
} catch (\Exception $e) {
}
}

if (!empty($config['notification-url'])) {
$package->setNotificationUrl($config['notification-url']);
}

if (!empty($config['archive']['exclude'])) {
$package->setArchiveExcludes($config['archive']['exclude']);
}

if ($package instanceof Package\CompletePackageInterface) {
if (isset($config['scripts']) && is_array($config['scripts'])) {
foreach ($config['scripts'] as $event => $listeners) {
$config['scripts'][$event] = (array) $listeners;
}
$package->setScripts($config['scripts']);
}

if (!empty($config['description']) && is_string($config['description'])) {
$package->setDescription($config['description']);
}

if (!empty($config['homepage']) && is_string($config['homepage'])) {
$package->setHomepage($config['homepage']);
}

if (!empty($config['keywords']) && is_array($config['keywords'])) {
$package->setKeywords($config['keywords']);
}

if (!empty($config['license'])) {
$package->setLicense(is_array($config['license']) ? $config['license'] : array($config['license']));
}

if (!empty($config['authors']) && is_array($config['authors'])) {
$package->setAuthors($config['authors']);
}

if (isset($config['support'])) {
$package->setSupport($config['support']);
}
}

if ($aliasNormalized = $this->getBranchAlias($config)) {
if ($package instanceof RootPackageInterface) {
$package = new RootAliasPackage($package, $aliasNormalized, preg_replace('{(\.9{7})+}', '.x', $aliasNormalized));
} else {
$package = new AliasPackage($package, $aliasNormalized, preg_replace('{(\.9{7})+}', '.x', $aliasNormalized));
}
}

return $package;
}







public function getBranchAlias(array $config)
{
if ('dev-' !== substr($config['version'], 0, 4)
|| !isset($config['extra']['branch-alias'])
|| !is_array($config['extra']['branch-alias'])
) {
return;
}

foreach ($config['extra']['branch-alias'] as $sourceBranch => $targetBranch) {

 if ('-dev' !== substr($targetBranch, -4)) {
continue;
}


 $validatedTargetBranch = $this->versionParser->normalizeBranch(substr($targetBranch, 0, -4));
if ('-dev' !== substr($validatedTargetBranch, -4)) {
continue;
}


 if (strtolower($config['version']) !== strtolower($sourceBranch)) {
continue;
}

return $validatedTargetBranch;
}
}
}
<?php











namespace Composer\Package\Loader;

use Composer\Package;
use Composer\Package\BasePackage;
use Composer\Package\Version\VersionParser;




class ValidatingArrayLoader implements LoaderInterface
{
private $loader;
private $versionParser;
private $errors;
private $warnings;
private $config;
private $strictName;

public function __construct(LoaderInterface $loader, $strictName = true, VersionParser $parser = null)
{
$this->loader = $loader;
$this->versionParser = $parser ?: new VersionParser();
$this->strictName = $strictName;
}

public function load(array $config, $class = 'Composer\Package\CompletePackage')
{
$this->errors = array();
$this->warnings = array();
$this->config = $config;

if ($this->strictName) {
$this->validateRegex('name', '[A-Za-z0-9][A-Za-z0-9_.-]*/[A-Za-z0-9][A-Za-z0-9_.-]*', true);
} else {
$this->validateString('name', true);
}

if (!empty($this->config['version'])) {
try {
$this->versionParser->normalize($this->config['version']);
} catch (\Exception $e) {
unset($this->config['version']);
$this->errors[] = 'version : invalid value ('.$this->config['version'].'): '.$e->getMessage();
}
}

$this->validateRegex('type', '[A-Za-z0-9-]+');
$this->validateString('target-dir');
$this->validateArray('extra');
$this->validateFlatArray('bin');
$this->validateArray('scripts'); 
 $this->validateString('description');
$this->validateUrl('homepage');
$this->validateFlatArray('keywords', '[A-Za-z0-9 ._-]+');

if (isset($this->config['license'])) {
if (is_string($this->config['license'])) {
$this->validateRegex('license', '[A-Za-z0-9+. ()-]+');
} else {
$this->validateFlatArray('license', '[A-Za-z0-9+. ()-]+');
}
}

$this->validateString('time');
if (!empty($this->config['time'])) {
try {
$date = new \DateTime($this->config['time'], new \DateTimeZone('UTC'));
} catch (\Exception $e) {
$this->errors[] = 'time : invalid value ('.$this->config['time'].'): '.$e->getMessage();
unset($this->config['time']);
}
}

if ($this->validateArray('authors') && !empty($this->config['authors'])) {
foreach ($this->config['authors'] as $key => $author) {
if (!is_array($author)) {
$this->errors[] = 'authors.'.$key.' : should be an array, '.gettype($author).' given';
unset($this->config['authors'][$key]);
continue;
}
foreach (array('homepage', 'email', 'name', 'role') as $authorData) {
if (isset($author[$authorData]) && !is_string($author[$authorData])) {
$this->errors[] = 'authors.'.$key.'.'.$authorData.' : invalid value, must be a string';
unset($this->config['authors'][$key][$authorData]);
}
}
if (isset($author['homepage']) && !$this->filterUrl($author['homepage'])) {
$this->warnings[] = 'authors.'.$key.'.homepage : invalid value ('.$author['homepage'].'), must be an http/https URL';
unset($this->config['authors'][$key]['homepage']);
}
if (isset($author['email']) && !filter_var($author['email'], FILTER_VALIDATE_EMAIL)) {
$this->warnings[] = 'authors.'.$key.'.email : invalid value ('.$author['email'].'), must be a valid email address';
unset($this->config['authors'][$key]['email']);
}
if (empty($this->config['authors'][$key])) {
unset($this->config['authors'][$key]);
}
}
if (empty($this->config['authors'])) {
unset($this->config['authors']);
}
}

if ($this->validateArray('support') && !empty($this->config['support'])) {
foreach (array('issues', 'forum', 'wiki', 'source', 'email', 'irc') as $key) {
if (isset($this->config['support'][$key]) && !is_string($this->config['support'][$key])) {
$this->errors[] = 'support.'.$key.' : invalid value, must be a string';
unset($this->config['support'][$key]);
}
}

if (isset($this->config['support']['email']) && !filter_var($this->config['support']['email'], FILTER_VALIDATE_EMAIL)) {
$this->warnings[] = 'support.email : invalid value ('.$this->config['support']['email'].'), must be a valid email address';
unset($this->config['support']['email']);
}

if (isset($this->config['support']['irc']) && !$this->filterUrl($this->config['support']['irc'], array('irc'))) {
$this->warnings[] = 'support.irc : invalid value ('.$this->config['support']['irc'].'), must be a irc://<server>/<channel> URL';
unset($this->config['support']['irc']);
}

foreach (array('issues', 'forum', 'wiki', 'source') as $key) {
if (isset($this->config['support'][$key]) && !$this->filterUrl($this->config['support'][$key])) {
$this->warnings[] = 'support.'.$key.' : invalid value ('.$this->config['support'][$key].'), must be an http/https URL';
unset($this->config['support'][$key]);
}
}
if (empty($this->config['support'])) {
unset($this->config['support']);
}
}

foreach (array_keys(BasePackage::$supportedLinkTypes) as $linkType) {
if ($this->validateArray($linkType) && isset($this->config[$linkType])) {
foreach ($this->config[$linkType] as $package => $constraint) {
if (!preg_match('{^[A-Za-z0-9_./-]+$}', $package)) {
$this->warnings[] = $linkType.'.'.$package.' : invalid key, package names must be strings containing only [A-Za-z0-9_./-]';
}
if (!is_string($constraint)) {
$this->errors[] = $linkType.'.'.$package.' : invalid value, must be a string containing a version constraint';
unset($this->config[$linkType][$package]);
} elseif ('self.version' !== $constraint) {
try {
$this->versionParser->parseConstraints($constraint);
} catch (\Exception $e) {
$this->errors[] = $linkType.'.'.$package.' : invalid version constraint ('.$e->getMessage().')';
unset($this->config[$linkType][$package]);
}
}
}
}
}

if ($this->validateArray('suggest') && !empty($this->config['suggest'])) {
foreach ($this->config['suggest'] as $package => $description) {
if (!is_string($description)) {
$this->errors[] = 'suggest.'.$package.' : invalid value, must be a string describing why the package is suggested';
unset($this->config['suggest'][$package]);
}
}
}

if ($this->validateString('minimum-stability') && !empty($this->config['minimum-stability'])) {
if (!isset(BasePackage::$stabilities[$this->config['minimum-stability']])) {
$this->errors[] = 'minimum-stability : invalid value ('.$this->config['minimum-stability'].'), must be one of '.implode(', ', array_keys(BasePackage::$stabilities));
unset($this->config['minimum-stability']);
}
}

if ($this->validateArray('autoload') && !empty($this->config['autoload'])) {
$types = array('psr-0', 'classmap', 'files');
foreach ($this->config['autoload'] as $type => $typeConfig) {
if (!in_array($type, $types)) {
$this->errors[] = 'autoload : invalid value ('.$type.'), must be one of '.implode(', ', $types);
unset($this->config['autoload'][$type]);
}
}
}


 


 

$this->validateFlatArray('include-path');


 if (isset($this->config['extra']['branch-alias'])) {
if (!is_array($this->config['extra']['branch-alias'])) {
$this->errors[] = 'extra.branch-alias : must be an array of versions => aliases';
} else {
foreach ($this->config['extra']['branch-alias'] as $sourceBranch => $targetBranch) {

 if ('-dev' !== substr($targetBranch, -4)) {
$this->warnings[] = 'extra.branch-alias.'.$sourceBranch.' : the target branch ('.$targetBranch.') must end in -dev';
unset($this->config['extra']['branch-alias'][$sourceBranch]);

continue;
}


 $validatedTargetBranch = $this->versionParser->normalizeBranch(substr($targetBranch, 0, -4));
if ('-dev' !== substr($validatedTargetBranch, -4)) {
$this->warnings[] = 'extra.branch-alias.'.$sourceBranch.' : the target branch ('.$targetBranch.') must be a parseable number like 2.0-dev';
unset($this->config['extra']['branch-alias'][$sourceBranch]);
}
}
}
}

if ($this->errors) {
throw new InvalidPackageException($this->errors, $this->warnings, $config);
}

$package = $this->loader->load($this->config, $class);
$this->config = null;

return $package;
}

public function getWarnings()
{
return $this->warnings;
}

public function getErrors()
{
return $this->errors;
}

private function validateRegex($property, $regex, $mandatory = false)
{
if (!$this->validateString($property, $mandatory)) {
return false;
}

if (!preg_match('{^'.$regex.'$}u', $this->config[$property])) {
$message = $property.' : invalid value ('.$this->config[$property].'), must match '.$regex;
if ($mandatory) {
$this->errors[] = $message;
} else {
$this->warnings[] = $message;
}
unset($this->config[$property]);

return false;
}

return true;
}

private function validateString($property, $mandatory = false)
{
if (isset($this->config[$property]) && !is_string($this->config[$property])) {
$this->errors[] = $property.' : should be a string, '.gettype($this->config[$property]).' given';
unset($this->config[$property]);

return false;
}

if (!isset($this->config[$property]) || trim($this->config[$property]) === '') {
if ($mandatory) {
$this->errors[] = $property.' : must be present';
}
unset($this->config[$property]);

return false;
}

return true;
}

private function validateArray($property, $mandatory = false)
{
if (isset($this->config[$property]) && !is_array($this->config[$property])) {
$this->errors[] = $property.' : should be an array, '.gettype($this->config[$property]).' given';
unset($this->config[$property]);

return false;
}

if (!isset($this->config[$property]) || !count($this->config[$property])) {
if ($mandatory) {
$this->errors[] = $property.' : must be present and contain at least one element';
}
unset($this->config[$property]);

return false;
}

return true;
}

private function validateFlatArray($property, $regex = null, $mandatory = false)
{
if (!$this->validateArray($property, $mandatory)) {
return false;
}

$pass = true;
foreach ($this->config[$property] as $key => $value) {
if (!is_string($value) && !is_numeric($value)) {
$this->errors[] = $property.'.'.$key.' : must be a string or int, '.gettype($value).' given';
unset($this->config[$property][$key]);
$pass = false;

continue;
}

if ($regex && !preg_match('{^'.$regex.'$}u', $value)) {
$this->warnings[] = $property.'.'.$key.' : invalid value ('.$value.'), must match '.$regex;
unset($this->config[$property][$key]);
$pass = false;
}
}

return $pass;
}

private function validateUrl($property, $mandatory = false)
{
if (!$this->validateString($property, $mandatory)) {
return false;
}

if (!$this->filterUrl($this->config[$property])) {
$this->warnings[] = $property.' : invalid value ('.$this->config[$property].'), must be an http/https URL';
unset($this->config[$property]);

return false;
}

return true;
}

private function filterUrl($value, array $schemes = array('http', 'https'))
{
if ($value === '') {
return true;
}

$bits = parse_url($value);
if (empty($bits['scheme']) || empty($bits['host'])) {
return false;
}

if (!in_array($bits['scheme'], $schemes, true)) {
return false;
}

return true;
}
}
<?php











namespace Composer\Package\Loader;

use Composer\Package\BasePackage;
use Composer\Package\AliasPackage;
use Composer\Config;
use Composer\Factory;
use Composer\Package\Version\VersionParser;
use Composer\Repository\RepositoryManager;
use Composer\Repository\Vcs\HgDriver;
use Composer\IO\NullIO;
use Composer\Util\ProcessExecutor;
use Composer\Util\Git as GitUtil;








class RootPackageLoader extends ArrayLoader
{
private $manager;
private $config;
private $process;

public function __construct(RepositoryManager $manager, Config $config, VersionParser $parser = null, ProcessExecutor $process = null)
{
$this->manager = $manager;
$this->config = $config;
$this->process = $process ?: new ProcessExecutor();
parent::__construct($parser);
}

public function load(array $config, $class = 'Composer\Package\RootPackage')
{
if (!isset($config['name'])) {
$config['name'] = '__root__';
}
if (!isset($config['version'])) {

 if (getenv('COMPOSER_ROOT_VERSION')) {
$version = getenv('COMPOSER_ROOT_VERSION');
} else {
$version = $this->guessVersion($config);
}

if (!$version) {
$version = '1.0.0';
}

$config['version'] = $version;
}

$realPackage = $package = parent::load($config, $class);

if ($realPackage instanceof AliasPackage) {
$realPackage = $package->getAliasOf();
}

if (isset($config['minimum-stability'])) {
$realPackage->setMinimumStability(VersionParser::normalizeStability($config['minimum-stability']));
}

$aliases = array();
$stabilityFlags = array();
$references = array();
foreach (array('require', 'require-dev') as $linkType) {
if (isset($config[$linkType])) {
$linkInfo = BasePackage::$supportedLinkTypes[$linkType];
$method = 'get'.ucfirst($linkInfo['method']);
$links = array();
foreach ($realPackage->$method() as $link) {
$links[$link->getTarget()] = $link->getConstraint()->getPrettyString();
}
$aliases = $this->extractAliases($links, $aliases);
$stabilityFlags = $this->extractStabilityFlags($links, $stabilityFlags, $realPackage->getMinimumStability());
$references = $this->extractReferences($links, $references);
}
}

$realPackage->setAliases($aliases);
$realPackage->setStabilityFlags($stabilityFlags);
$realPackage->setReferences($references);

if (isset($config['prefer-stable'])) {
$realPackage->setPreferStable((bool) $config['prefer-stable']);
}

$repos = Factory::createDefaultRepositories(null, $this->config, $this->manager);
foreach ($repos as $repo) {
$this->manager->addRepository($repo);
}
$realPackage->setRepositories($this->config->getRepositories());

return $package;
}

private function extractAliases(array $requires, array $aliases)
{
foreach ($requires as $reqName => $reqVersion) {
if (preg_match('{^([^,\s#]+)(?:#[^ ]+)? +as +([^,\s]+)$}', $reqVersion, $match)) {
$aliases[] = array(
'package' => strtolower($reqName),
'version' => $this->versionParser->normalize($match[1], $reqVersion),
'alias' => $match[2],
'alias_normalized' => $this->versionParser->normalize($match[2], $reqVersion),
);
}
}

return $aliases;
}

private function extractStabilityFlags(array $requires, array $stabilityFlags, $minimumStability)
{
$stabilities = BasePackage::$stabilities;
$minimumStability = $stabilities[$minimumStability];
foreach ($requires as $reqName => $reqVersion) {

 if (preg_match('{^[^,\s]*?@('.implode('|', array_keys($stabilities)).')$}i', $reqVersion, $match)) {
$name = strtolower($reqName);
$stability = $stabilities[VersionParser::normalizeStability($match[1])];

if (isset($stabilityFlags[$name]) && $stabilityFlags[$name] > $stability) {
continue;
}
$stabilityFlags[$name] = $stability;

continue;
}


 
 $reqVersion = preg_replace('{^([^,\s@]+) as .+$}', '$1', $reqVersion);
if (preg_match('{^[^,\s@]+$}', $reqVersion) && 'stable' !== ($stabilityName = VersionParser::parseStability($reqVersion))) {
$name = strtolower($reqName);
$stability = $stabilities[$stabilityName];
if ((isset($stabilityFlags[$name]) && $stabilityFlags[$name] > $stability) || ($minimumStability > $stability)) {
continue;
}
$stabilityFlags[$name] = $stability;
}
}

return $stabilityFlags;
}

private function extractReferences(array $requires, array $references)
{
foreach ($requires as $reqName => $reqVersion) {
$reqVersion = preg_replace('{^([^,\s@]+) as .+$}', '$1', $reqVersion);
if (preg_match('{^[^,\s@]+?#([a-f0-9]+)$}', $reqVersion, $match) && 'dev' === ($stabilityName = VersionParser::parseStability($reqVersion))) {
$name = strtolower($reqName);
$references[$name] = $match[1];
}
}

return $references;
}

private function guessVersion(array $config)
{
if (function_exists('proc_open')) {
$version = $this->guessGitVersion($config);
if (null !== $version) {
return $version;
}

return $this->guessHgVersion($config);
}
}

private function guessGitVersion(array $config)
{
$util = new GitUtil;
$util->cleanEnv();


 if (0 === $this->process->execute('git describe --exact-match --tags', $output)) {
try {
return $this->versionParser->normalize(trim($output));
} catch (\Exception $e) {
}
}


 if (0 === $this->process->execute('git branch --no-color --no-abbrev -v', $output)) {
$branches = array();
$isFeatureBranch = false;
$version = null;


 foreach ($this->process->splitLines($output) as $branch) {
if ($branch && preg_match('{^(?:\* ) *(\(no branch\)|\(detached from [a-f0-9]+\)|\S+) *([a-f0-9]+) .*$}', $branch, $match)) {
if ($match[1] === '(no branch)' || substr($match[1], 0, 10) === '(detached ') {
$version = 'dev-'.$match[2];
$isFeatureBranch = true;
} else {
$version = $this->versionParser->normalizeBranch($match[1]);
$isFeatureBranch = 0 === strpos($version, 'dev-');
if ('9999999-dev' === $version) {
$version = 'dev-'.$match[1];
}
}
}

if ($branch && !preg_match('{^ *[^/]+/HEAD }', $branch)) {
if (preg_match('{^(?:\* )? *(\S+) *([a-f0-9]+) .*$}', $branch, $match)) {
$branches[] = $match[1];
}
}
}

if (!$isFeatureBranch) {
return $version;
}


 $version = $this->guessFeatureVersion($config, $version, $branches, 'git rev-list %candidate%..%branch%');

return $version;
}
}

private function guessHgVersion(array $config)
{

 if (0 === $this->process->execute('hg branch', $output)) {
$branch = trim($output);
$version = $this->versionParser->normalizeBranch($branch);
$isFeatureBranch = 0 === strpos($version, 'dev-');

if ('9999999-dev' === $version) {
$version = 'dev-'.$branch;
}

if (!$isFeatureBranch) {
return $version;
}


 $config = array('url' => getcwd());
$driver = new HgDriver($config, new NullIO(), $this->config, $this->process);
$branches = array_keys($driver->getBranches());


 $version = $this->guessFeatureVersion($config, $version, $branches, 'hg log -r "not ancestors(\'%candidate%\') and ancestors(\'%branch%\')" --template "{node}\\n"');

return $version;
}
}

private function guessFeatureVersion(array $config, $version, array $branches, $scmCmdline)
{

 
 if ((isset($config['extra']['branch-alias']) && !isset($config['extra']['branch-alias'][$version]))
|| strpos(json_encode($config), '"self.version"')
) {
$branch = preg_replace('{^dev-}', '', $version);
$length = PHP_INT_MAX;
foreach ($branches as $candidate) {

 if ($candidate === $branch || !preg_match('{^(master|trunk|default|develop|\d+\..+)$}', $candidate, $match)) {
continue;
}

$cmdLine = str_replace(array('%candidate%', '%branch%'), array($candidate, $branch), $scmCmdline);
if (0 !== $this->process->execute($cmdLine, $output)) {
continue;
}

if (strlen($output) < $length) {
$length = strlen($output);
$version = $this->versionParser->normalizeBranch($candidate);
if ('9999999-dev' === $version) {
$version = 'dev-'.$match[1];
}
}
}
}

return $version;
}
}
<?php











namespace Composer\Package;

use Composer\Json\JsonFile;
use Composer\Installer\InstallationManager;
use Composer\Repository\RepositoryManager;
use Composer\Util\ProcessExecutor;
use Composer\Package\AliasPackage;
use Composer\Repository\ArrayRepository;
use Composer\Package\Dumper\ArrayDumper;
use Composer\Package\Loader\ArrayLoader;
use Composer\Package\Version\VersionParser;
use Composer\Util\Git as GitUtil;
use Composer\IO\IOInterface;







class Locker
{
private $lockFile;
private $repositoryManager;
private $installationManager;
private $hash;
private $loader;
private $dumper;
private $process;
private $lockDataCache;










public function __construct(IOInterface $io, JsonFile $lockFile, RepositoryManager $repositoryManager, InstallationManager $installationManager, $hash)
{
$this->lockFile = $lockFile;
$this->repositoryManager = $repositoryManager;
$this->installationManager = $installationManager;
$this->hash = $hash;
$this->loader = new ArrayLoader();
$this->dumper = new ArrayDumper();
$this->process = new ProcessExecutor($io);
}






public function isLocked()
{
if (!$this->lockFile->exists()) {
return false;
}

$data = $this->getLockData();

return isset($data['packages']);
}






public function isFresh()
{
$lock = $this->lockFile->read();

return $this->hash === $lock['hash'];
}








public function getLockedRepository($withDevReqs = false)
{
$lockData = $this->getLockData();
$packages = new ArrayRepository();

$lockedPackages = $lockData['packages'];
if ($withDevReqs) {
if (isset($lockData['packages-dev'])) {
$lockedPackages = array_merge($lockedPackages, $lockData['packages-dev']);
} else {
throw new \RuntimeException('The lock file does not contain require-dev information, run install with the --no-dev option or run update to install those packages.');
}
}

if (empty($lockedPackages)) {
return $packages;
}

if (isset($lockedPackages[0]['name'])) {
foreach ($lockedPackages as $info) {
$packages->addPackage($this->loader->load($info));
}

return $packages;
}

throw new \RuntimeException('Your composer.lock was created before 2012-09-15, and is not supported anymore. Run "composer update" to generate a new one.');
}







public function getPlatformRequirements($withDevReqs = false)
{
$lockData = $this->getLockData();
$versionParser = new VersionParser();
$requirements = array();

if (!empty($lockData['platform'])) {
$requirements = $versionParser->parseLinks(
'__ROOT__',
'1.0.0',
'requires',
isset($lockData['platform']) ? $lockData['platform'] : array()
);
}

if ($withDevReqs && !empty($lockData['platform-dev'])) {
$devRequirements = $versionParser->parseLinks(
'__ROOT__',
'1.0.0',
'requires',
isset($lockData['platform-dev']) ? $lockData['platform-dev'] : array()
);

$requirements = array_merge($requirements, $devRequirements);
}

return $requirements;
}

public function getMinimumStability()
{
$lockData = $this->getLockData();

return isset($lockData['minimum-stability']) ? $lockData['minimum-stability'] : 'stable';
}

public function getStabilityFlags()
{
$lockData = $this->getLockData();

return isset($lockData['stability-flags']) ? $lockData['stability-flags'] : array();
}

public function getAliases()
{
$lockData = $this->getLockData();

return isset($lockData['aliases']) ? $lockData['aliases'] : array();
}

public function getLockData()
{
if (null !== $this->lockDataCache) {
return $this->lockDataCache;
}

if (!$this->lockFile->exists()) {
throw new \LogicException('No lockfile found. Unable to read locked packages');
}

return $this->lockDataCache = $this->lockFile->read();
}














public function setLockData(array $packages, $devPackages, array $platformReqs, $platformDevReqs, array $aliases, $minimumStability, array $stabilityFlags)
{
$lock = array(
'_readme' => array('This file locks the dependencies of your project to a known state', 'Read more about it at http://getcomposer.org/doc/01-basic-usage.md#composer-lock-the-lock-file'),
'hash' => $this->hash,
'packages' => null,
'packages-dev' => null,
'aliases' => array(),
'minimum-stability' => $minimumStability,
'stability-flags' => $stabilityFlags,
);

foreach ($aliases as $package => $versions) {
foreach ($versions as $version => $alias) {
$lock['aliases'][] = array(
'alias' => $alias['alias'],
'alias_normalized' => $alias['alias_normalized'],
'version' => $version,
'package' => $package,
);
}
}

$lock['packages'] = $this->lockPackages($packages);
if (null !== $devPackages) {
$lock['packages-dev'] = $this->lockPackages($devPackages);
}

if (empty($lock['packages']) && empty($lock['packages-dev'])) {
if ($this->lockFile->exists()) {
unlink($this->lockFile->getPath());
}

return false;
}

$lock['platform'] = $platformReqs;
$lock['platform-dev'] = $platformDevReqs;

if (!$this->isLocked() || $lock !== $this->getLockData()) {
$this->lockFile->write($lock);
$this->lockDataCache = null;

return true;
}

return false;
}

private function lockPackages(array $packages)
{
$locked = array();

foreach ($packages as $package) {
if ($package instanceof AliasPackage) {
continue;
}

$name = $package->getPrettyName();
$version = $package->getPrettyVersion();

if (!$name || !$version) {
throw new \LogicException(sprintf(
'Package "%s" has no version or name and can not be locked', $package
));
}

$spec = $this->dumper->dump($package);
unset($spec['version_normalized']);


 $time = isset($spec['time']) ? $spec['time'] : null;
unset($spec['time']);
if ($package->isDev() && $package->getInstallationSource() === 'source') {

 $time = $this->getPackageTime($package) ?: $time;
}
if (null !== $time) {
$spec['time'] = $time;
}

unset($spec['installation-source']);

$locked[] = $spec;
}

usort($locked, function ($a, $b) {
$comparison = strcmp($a['name'], $b['name']);

if (0 !== $comparison) {
return $comparison;
}


 return strcmp($a['version'], $b['version']);
});

return $locked;
}







private function getPackageTime(PackageInterface $package)
{
if (!function_exists('proc_open')) {
return null;
}

$path = realpath($this->installationManager->getInstallPath($package));
$sourceType = $package->getSourceType();
$datetime = null;

if ($path && in_array($sourceType, array('git', 'hg'))) {
$sourceRef = $package->getSourceReference() ?: $package->getDistReference();
switch ($sourceType) {
case 'git':
$util = new GitUtil;
$util->cleanEnv();

if (0 === $this->process->execute('git log -n1 --pretty=%ct '.escapeshellarg($sourceRef), $output, $path) && preg_match('{^\s*\d+\s*$}', $output)) {
$datetime = new \DateTime('@'.trim($output), new \DateTimeZone('UTC'));
}
break;

case 'hg':
if (0 === $this->process->execute('hg log --template "{date|hgdate}" -r '.escapeshellarg($sourceRef), $output, $path) && preg_match('{^\s*(\d+)\s*}', $output, $match)) {
$datetime = new \DateTime('@'.$match[1], new \DateTimeZone('UTC'));
}
break;
}
}

return $datetime ? $datetime->format('Y-m-d H:i:s') : null;
}
}
<?php











namespace Composer\Package;

use Composer\Repository\RepositoryInterface;






interface PackageInterface
{





public function getName();






public function getPrettyName();









public function getNames();






public function setId($id);






public function getId();






public function isDev();






public function getType();






public function getTargetDir();






public function getExtra();






public function setInstallationSource($type);






public function getInstallationSource();






public function getSourceType();






public function getSourceUrl();






public function getSourceReference();






public function getDistType();






public function getDistUrl();






public function getDistReference();






public function getDistSha1Checksum();






public function getVersion();






public function getPrettyVersion();






public function getReleaseDate();






public function getStability();







public function getRequires();







public function getConflicts();







public function getProvides();







public function getReplaces();







public function getDevRequires();







public function getSuggests();











public function getAutoload();







public function getIncludePaths();






public function setRepository(RepositoryInterface $repository);






public function getRepository();






public function getBinaries();






public function getUniqueName();






public function getNotificationUrl();






public function __toString();






public function getPrettyString();






public function getArchiveExcludes();
}
<?php











namespace Composer\Package;

use Composer\Repository\RepositoryInterface;
use Composer\Repository\PlatformRepository;






abstract class BasePackage implements PackageInterface
{
public static $supportedLinkTypes = array(
'require' => array('description' => 'requires', 'method' => 'requires'),
'conflict' => array('description' => 'conflicts', 'method' => 'conflicts'),
'provide' => array('description' => 'provides', 'method' => 'provides'),
'replace' => array('description' => 'replaces', 'method' => 'replaces'),
'require-dev' => array('description' => 'requires (for development)', 'method' => 'devRequires'),
);

const STABILITY_STABLE = 0;
const STABILITY_RC = 5;
const STABILITY_BETA = 10;
const STABILITY_ALPHA = 15;
const STABILITY_DEV = 20;

public static $stabilities = array(
'stable' => self::STABILITY_STABLE,
'RC' => self::STABILITY_RC,
'beta' => self::STABILITY_BETA,
'alpha' => self::STABILITY_ALPHA,
'dev' => self::STABILITY_DEV,
);

protected $name;
protected $prettyName;

protected $repository;
protected $id;






public function __construct($name)
{
$this->prettyName = $name;
$this->name = strtolower($name);
$this->id = -1;
}




public function getName()
{
return $this->name;
}




public function getPrettyName()
{
return $this->prettyName;
}




public function getNames()
{
$names = array(
$this->getName() => true,
);

foreach ($this->getProvides() as $link) {
$names[$link->getTarget()] = true;
}

foreach ($this->getReplaces() as $link) {
$names[$link->getTarget()] = true;
}

return array_keys($names);
}




public function setId($id)
{
$this->id = $id;
}




public function getId()
{
return $this->id;
}




public function setRepository(RepositoryInterface $repository)
{
if ($this->repository && $repository !== $this->repository) {
throw new \LogicException('A package can only be added to one repository');
}
$this->repository = $repository;
}




public function getRepository()
{
return $this->repository;
}






public function isPlatform()
{
return $this->getRepository() instanceof PlatformRepository;
}






public function getUniqueName()
{
return $this->getName().'-'.$this->getVersion();
}

public function equals(PackageInterface $package)
{
$self = $this;
if ($this instanceof AliasPackage) {
$self = $this->getAliasOf();
}
if ($package instanceof AliasPackage) {
$package = $package->getAliasOf();
}

return $package === $self;
}






public function __toString()
{
return $this->getUniqueName();
}

public function getPrettyString()
{
return $this->getPrettyName().' '.$this->getPrettyVersion();
}

public function __clone()
{
$this->repository = null;
$this->id = -1;
}
}
<?php











namespace Composer\Package\Version;

use Composer\Package\BasePackage;
use Composer\Package\PackageInterface;
use Composer\Package\Link;
use Composer\Package\LinkConstraint\EmptyConstraint;
use Composer\Package\LinkConstraint\MultiConstraint;
use Composer\Package\LinkConstraint\VersionConstraint;






class VersionParser
{
private static $modifierRegex = '[._-]?(?:(stable|beta|b|RC|alpha|a|patch|pl|p)(?:[.-]?(\d+))?)?([.-]?dev)?';







public static function parseStability($version)
{
$version = preg_replace('{#.+$}i', '', $version);

if ('dev-' === substr($version, 0, 4) || '-dev' === substr($version, -4)) {
return 'dev';
}

preg_match('{'.self::$modifierRegex.'$}i', strtolower($version), $match);
if (!empty($match[3])) {
return 'dev';
}

if (!empty($match[1])) {
if ('beta' === $match[1] || 'b' === $match[1]) {
return 'beta';
}
if ('alpha' === $match[1] || 'a' === $match[1]) {
return 'alpha';
}
if ('rc' === $match[1]) {
return 'RC';
}
}

return 'stable';
}

public static function normalizeStability($stability)
{
$stability = strtolower($stability);

return $stability === 'rc' ? 'RC' : $stability;
}

public static function formatVersion(PackageInterface $package, $truncate = true)
{
if (!$package->isDev() || !in_array($package->getSourceType(), array('hg', 'git'))) {
return $package->getPrettyVersion();
}


 if ($truncate && strlen($package->getSourceReference()) === 40) {
return $package->getPrettyVersion() . ' ' . substr($package->getSourceReference(), 0, 7);
}

return $package->getPrettyVersion() . ' ' . $package->getSourceReference();
}









public function normalize($version, $fullVersion = null)
{
$version = trim($version);
if (null === $fullVersion) {
$fullVersion = $version;
}


 if (preg_match('{^([^,\s]+) +as +([^,\s]+)$}', $version, $match)) {
$version = $match[1];
}


 if (preg_match('{^(?:dev-)?(?:master|trunk|default)$}i', $version)) {
return '9999999-dev';
}

if ('dev-' === strtolower(substr($version, 0, 4))) {
return 'dev-'.substr($version, 4);
}


 if (preg_match('{^v?(\d{1,3})(\.\d+)?(\.\d+)?(\.\d+)?'.self::$modifierRegex.'$}i', $version, $matches)) {
$version = $matches[1]
.(!empty($matches[2]) ? $matches[2] : '.0')
.(!empty($matches[3]) ? $matches[3] : '.0')
.(!empty($matches[4]) ? $matches[4] : '.0');
$index = 5;
} elseif (preg_match('{^v?(\d{4}(?:[.:-]?\d{2}){1,6}(?:[.:-]?\d{1,3})?)'.self::$modifierRegex.'$}i', $version, $matches)) { 
 $version = preg_replace('{\D}', '-', $matches[1]);
$index = 2;
}


 if (isset($index)) {
if (!empty($matches[$index])) {
if ('stable' === $matches[$index]) {
return $version;
}
$version .= '-' . $this->expandStability($matches[$index]) . (!empty($matches[$index+1]) ? $matches[$index+1] : '');
}

if (!empty($matches[$index+2])) {
$version .= '-dev';
}

return $version;
}


 if (preg_match('{(.*?)[.-]?dev$}i', $version, $match)) {
try {
return $this->normalizeBranch($match[1]);
} catch (\Exception $e) {}
}

$extraMessage = '';
if (preg_match('{ +as +'.preg_quote($version).'$}', $fullVersion)) {
$extraMessage = ' in "'.$fullVersion.'", the alias must be an exact version';
} elseif (preg_match('{^'.preg_quote($version).' +as +}', $fullVersion)) {
$extraMessage = ' in "'.$fullVersion.'", the alias source must be an exact version, if it is a branch name you should prefix it with dev-';
}

throw new \UnexpectedValueException('Invalid version string "'.$version.'"'.$extraMessage);
}







public function normalizeBranch($name)
{
$name = trim($name);

if (in_array($name, array('master', 'trunk', 'default'))) {
return $this->normalize($name);
}

if (preg_match('#^v?(\d+)(\.(?:\d+|[x*]))?(\.(?:\d+|[x*]))?(\.(?:\d+|[x*]))?$#i', $name, $matches)) {
$version = '';
for ($i = 1; $i < 5; $i++) {
$version .= isset($matches[$i]) ? str_replace('*', 'x', $matches[$i]) : '.x';
}

return str_replace('x', '9999999', $version).'-dev';
}

return 'dev-'.$name;
}








public function parseLinks($source, $sourceVersion, $description, $links)
{
$res = array();
foreach ($links as $target => $constraint) {
if ('self.version' === $constraint) {
$parsedConstraint = $this->parseConstraints($sourceVersion);
} else {
$parsedConstraint = $this->parseConstraints($constraint);
}
$res[strtolower($target)] = new Link($source, $target, $parsedConstraint, $description, $constraint);
}

return $res;
}







public function parseConstraints($constraints)
{
$prettyConstraint = $constraints;

if (preg_match('{^([^,\s]*?)@('.implode('|', array_keys(BasePackage::$stabilities)).')$}i', $constraints, $match)) {
$constraints = empty($match[1]) ? '*' : $match[1];
}

if (preg_match('{^(dev-[^,\s@]+?|[^,\s@]+?\.x-dev)#.+$}i', $constraints, $match)) {
$constraints = $match[1];
}

$orConstraints = preg_split('{\s*\|\s*}', trim($constraints));
$orGroups = array();
foreach ($orConstraints as $constraints) {
$andConstraints = preg_split('{\s*,\s*}', $constraints);

if (count($andConstraints) > 1) {
$constraintObjects = array();
foreach ($andConstraints as $constraint) {
$constraintObjects = array_merge($constraintObjects, $this->parseConstraint($constraint));
}
} else {
$constraintObjects = $this->parseConstraint($andConstraints[0]);
}

if (1 === count($constraintObjects)) {
$constraint = $constraintObjects[0];
} else {
$constraint = new MultiConstraint($constraintObjects);
}

$orGroups[] = $constraint;
}

if (1 === count($orGroups)) {
$constraint = $orGroups[0];
} else {
$constraint = new MultiConstraint($orGroups, false);
}

$constraint->setPrettyString($prettyConstraint);

return $constraint;
}

private function parseConstraint($constraint)
{
if (preg_match('{^([^,\s]+?)@('.implode('|', array_keys(BasePackage::$stabilities)).')$}i', $constraint, $match)) {
$constraint = $match[1];
if ($match[2] !== 'stable') {
$stabilityModifier = $match[2];
}
}

if (preg_match('{^[x*](\.[x*])*$}i', $constraint)) {
return array(new EmptyConstraint);
}


 
 
 
 
 if (preg_match('{^~(\d+)(?:\.(\d+))?(?:\.(\d+))?(?:\.(\d+))?'.self::$modifierRegex.'?$}i', $constraint, $matches)) {

 if (isset($matches[4]) && '' !== $matches[4]) {
$position = 4;
} elseif (isset($matches[3]) && '' !== $matches[3]) {
$position = 3;
} elseif (isset($matches[2]) && '' !== $matches[2]) {
$position = 2;
} else {
$position = 1;
}


 $stabilitySuffix = '';
if (!empty($matches[5])) {
$stabilitySuffix .= '-' . $this->expandStability($matches[5]) . (!empty($matches[6]) ? $matches[6] : '');
}

if (!empty($matches[7])) {
$stabilitySuffix .= '-dev';
}

if (!$stabilitySuffix) {
$stabilitySuffix = "-dev";
}
$lowVersion = $this->manipulateVersionString($matches, $position, 0) . $stabilitySuffix;
$lowerBound = new VersionConstraint('>=', $lowVersion);


 
 $highPosition = max(1, $position - 1);
$highVersion = $this->manipulateVersionString($matches, $highPosition, 1) . '-dev';
$upperBound = new VersionConstraint('<', $highVersion);

return array(
$lowerBound,
$upperBound
);
}


 if (preg_match('{^(\d+)(?:\.(\d+))?(?:\.(\d+))?\.[x*]$}', $constraint, $matches)) {
if (isset($matches[3]) && '' !== $matches[3]) {
$position = 3;
} elseif (isset($matches[2]) && '' !== $matches[2]) {
$position = 2;
} else {
$position = 1;
}

$lowVersion = $this->manipulateVersionString($matches, $position) . "-dev";
$highVersion = $this->manipulateVersionString($matches, $position, 1) . "-dev";

if ($lowVersion === "0.0.0.0-dev") {
return array(new VersionConstraint('<', $highVersion));
}

return array(
new VersionConstraint('>=', $lowVersion),
new VersionConstraint('<', $highVersion),
);
}


 if (preg_match('{^(<>|!=|>=?|<=?|==?)?\s*(.*)}', $constraint, $matches)) {
try {
$version = $this->normalize($matches[2]);

if (!empty($stabilityModifier) && $this->parseStability($version) === 'stable') {
$version .= '-' . $stabilityModifier;
} elseif ('<' === $matches[1]) {
if (!preg_match('/-stable$/', strtolower($matches[2]))) {
$version .= '-dev';
}
}

return array(new VersionConstraint($matches[1] ?: '=', $version));
} catch (\Exception $e) { }
}

$message = 'Could not parse version constraint '.$constraint;
if (isset($e)) {
$message .= ': '. $e->getMessage();
}

throw new \UnexpectedValueException($message);
}











private function manipulateVersionString($matches, $position, $increment = 0, $pad = '0')
{
for ($i = 4; $i > 0; $i--) {
if ($i > $position) {
$matches[$i] = $pad;
} else if ($i == $position && $increment) {
$matches[$i] += $increment;

 if ($matches[$i] < 0) {
$matches[$i] = $pad;
$position--;


 if ($i == 1) {
return;
}
}
}
}

return $matches[1] . '.' . $matches[2] . '.' . $matches[3] . '.' . $matches[4];
}

private function expandStability($stability)
{
$stability = strtolower($stability);

switch ($stability) {
case 'a':
return 'alpha';
case 'b':
return 'beta';
case 'p':
case 'pl':
return 'patch';
case 'rc':
return 'RC';
default:
return $stability;
}
}







public function parseNameVersionPairs(array $pairs)
{
$pairs = array_values($pairs);
$result = array();

for ($i = 0, $count = count($pairs); $i < $count; $i++) {
$pair = preg_replace('{^([^=: ]+)[=: ](.*)$}', '$1 $2', trim($pairs[$i]));
if (false === strpos($pair, ' ') && isset($pairs[$i+1]) && false === strpos($pairs[$i+1], '/')) {
$pair .= ' '.$pairs[$i+1];
$i++;
}

if (strpos($pair, ' ')) {
list($name, $version) = explode(" ", $pair, 2);
$result[] = array('name' => $name, 'version' => $version);
} else {
$result[] = array('name' => $pair);
}
}

return $result;
}
}
<?php











namespace Composer\Package;






interface CompletePackageInterface extends PackageInterface
{





public function getScripts();








public function getRepositories();






public function getLicense();






public function getKeywords();






public function getDescription();






public function getHomepage();








public function getAuthors();






public function getSupport();
}
<?php











namespace Composer\Package;






interface RootPackageInterface extends CompletePackageInterface
{





public function getAliases();






public function getMinimumStability();








public function getStabilityFlags();








public function getReferences();






public function getPreferStable();






public function setRequires(array $requires);






public function setDevRequires(array $devRequires);
}
<?php











namespace Composer\Package;






class RootPackage extends CompletePackage implements RootPackageInterface
{
protected $minimumStability = 'stable';
protected $preferStable = false;
protected $stabilityFlags = array();
protected $references = array();
protected $aliases = array();






public function setMinimumStability($minimumStability)
{
$this->minimumStability = $minimumStability;
}




public function getMinimumStability()
{
return $this->minimumStability;
}






public function setStabilityFlags(array $stabilityFlags)
{
$this->stabilityFlags = $stabilityFlags;
}




public function getStabilityFlags()
{
return $this->stabilityFlags;
}






public function setPreferStable($preferStable)
{
$this->preferStable = $preferStable;
}




public function getPreferStable()
{
return $this->preferStable;
}






public function setReferences(array $references)
{
$this->references = $references;
}




public function getReferences()
{
return $this->references;
}






public function setAliases(array $aliases)
{
$this->aliases = $aliases;
}




public function getAliases()
{
return $this->aliases;
}
}
<?php











namespace Composer\Package\Archiver;






interface ArchiverInterface
{










public function archive($sources, $target, $format, array $excludes = array());









public function supports($format, $sourceType);
}
<?php











namespace Composer\Package\Archiver;






class ComposerExcludeFilter extends BaseExcludeFilter
{




public function __construct($sourcePath, array $excludeRules)
{
parent::__construct($sourcePath);
$this->excludePatterns = $this->generatePatterns($excludeRules);
}
}
<?php











namespace Composer\Package\Archiver;






class PharArchiver implements ArchiverInterface
{
protected static $formats = array(
'zip' => \Phar::ZIP,
'tar' => \Phar::TAR,
);




public function archive($sources, $target, $format, array $excludes = array())
{
$sources = realpath($sources);


 if (file_exists($target)) {
unlink($target);
}

try {
$phar = new \PharData($target, null, null, static::$formats[$format]);
$files = new ArchivableFilesFinder($sources, $excludes);
$phar->buildFromIterator($files, $sources);

return $target;
} catch (\UnexpectedValueException $e) {
$message = sprintf("Could not create archive '%s' from '%s': %s",
$target,
$sources,
$e->getMessage()
);

throw new \RuntimeException($message, $e->getCode(), $e);
}
}




public function supports($format, $sourceType)
{
return isset(static::$formats[$format]);
}
}
<?php











namespace Composer\Package\Archiver;

use Symfony\Component\Finder;




abstract class BaseExcludeFilter
{



protected $sourcePath;




protected $excludePatterns;




public function __construct($sourcePath)
{
$this->sourcePath = $sourcePath;
$this->excludePatterns = array();
}











public function filter($relativePath, $exclude)
{
foreach ($this->excludePatterns as $patternData) {
list($pattern, $negate, $stripLeadingSlash) = $patternData;

if ($stripLeadingSlash) {
$path = substr($relativePath, 1);
} else {
$path = $relativePath;
}

if (preg_match($pattern, $path)) {
$exclude = !$negate;
}
}

return $exclude;
}









protected function parseLines(array $lines, $lineParser)
{
return array_filter(
array_map(
function ($line) use ($lineParser) {
$line = trim($line);

$commentHash = strpos($line, '#');
if ($commentHash !== false) {
$line = substr($line, 0, $commentHash);
}

if ($line) {
return call_user_func($lineParser, $line);
}

return null;
}, $lines),
function ($pattern) {
return $pattern !== null;
}
);
}








protected function generatePatterns($rules)
{
$patterns = array();
foreach ($rules as $rule) {
$patterns[] = $this->generatePattern($rule);
}

return $patterns;
}








protected function generatePattern($rule)
{
$negate = false;
$pattern = '#';

if (strlen($rule) && $rule[0] === '!') {
$negate = true;
$rule = substr($rule, 1);
}

if (strlen($rule) && $rule[0] === '/') {
$pattern .= '^/';
$rule = substr($rule, 1);
} elseif (false === strpos($rule, '/') || strlen($rule) - 1 === strpos($rule, '/')) {
$pattern .= '/';
}

$pattern .= substr(Finder\Glob::toRegex($rule), 2, -2);

return array($pattern . '#', $negate, false);
}
}
<?php











namespace Composer\Package\Archiver;








class GitExcludeFilter extends BaseExcludeFilter
{





public function __construct($sourcePath)
{
parent::__construct($sourcePath);

if (file_exists($sourcePath.'/.gitignore')) {
$this->excludePatterns = $this->parseLines(
file($sourcePath.'/.gitignore'),
array($this, 'parseGitIgnoreLine')
);
}
if (file_exists($sourcePath.'/.gitattributes')) {
$this->excludePatterns = array_merge(
$this->excludePatterns,
$this->parseLines(
file($sourcePath.'/.gitattributes'),
array($this, 'parseGitAttributesLine')
));
}
}








public function parseGitIgnoreLine($line)
{
return $this->generatePattern($line);
}








public function parseGitAttributesLine($line)
{
$parts = preg_split('#\s+#', $line);

if (count($parts) != 2) {
return null;
}

if ($parts[1] === 'export-ignore') {
return $this->generatePattern($parts[0]);
}
}
}
<?php











namespace Composer\Package\Archiver;

use Composer\Util\Filesystem;

use Symfony\Component\Finder;









class ArchivableFilesFinder extends \FilterIterator
{



protected $finder;







public function __construct($sources, array $excludes)
{
$fs = new Filesystem();

$sources = $fs->normalizePath($sources);

$filters = array(
new HgExcludeFilter($sources),
new GitExcludeFilter($sources),
new ComposerExcludeFilter($sources, $excludes),
);

$this->finder = new Finder\Finder();

$filter = function (\SplFileInfo $file) use ($sources, $filters, $fs) {
$relativePath = preg_replace(
'#^'.preg_quote($sources, '#').'#',
'',
$fs->normalizePath($file->getRealPath())
);

$exclude = false;
foreach ($filters as $filter) {
$exclude = $filter->filter($relativePath, $exclude);
}

return !$exclude;
};

if (method_exists($filter, 'bindTo')) {
$filter = $filter->bindTo(null);
}

$this->finder
->in($sources)
->filter($filter)
->ignoreVCS(true)
->ignoreDotFiles(false);

parent::__construct($this->finder->getIterator());
}

public function accept()
{
return !$this->getInnerIterator()->current()->isDir();
}
}
<?php











namespace Composer\Package\Archiver;

use Composer\Downloader\DownloadManager;
use Composer\Package\PackageInterface;
use Composer\Package\RootPackage;
use Composer\Util\Filesystem;





class ArchiveManager
{
protected $downloadManager;

protected $archivers = array();




protected $overwriteFiles = true;




public function __construct(DownloadManager $downloadManager)
{
$this->downloadManager = $downloadManager;
}




public function addArchiver(ArchiverInterface $archiver)
{
$this->archivers[] = $archiver;
}








public function setOverwriteFiles($overwriteFiles)
{
$this->overwriteFiles = $overwriteFiles;

return $this;
}








public function getPackageFilename(PackageInterface $package)
{
$nameParts = array(preg_replace('#[^a-z0-9-_.]#i', '-', $package->getName()));

if (preg_match('{^[a-f0-9]{40}$}', $package->getDistReference())) {
$nameParts = array_merge($nameParts, array($package->getDistReference(), $package->getDistType()));
} else {
$nameParts = array_merge($nameParts, array($package->getPrettyVersion(), $package->getDistReference()));
}

if ($package->getSourceReference()) {
$nameParts[] = substr(sha1($package->getSourceReference()), 0, 6);
}

return implode('-', array_filter($nameParts, function ($p) {
return !empty($p);
}));
}











public function archive(PackageInterface $package, $format, $targetDir)
{
if (empty($format)) {
throw new \InvalidArgumentException('Format must be specified');
}


 $usableArchiver = null;
foreach ($this->archivers as $archiver) {
if ($archiver->supports($format, $package->getSourceType())) {
$usableArchiver = $archiver;
break;
}
}


 if (null === $usableArchiver) {
throw new \RuntimeException(sprintf('No archiver found to support %s format', $format));
}

$filesystem = new Filesystem();
$packageName = $this->getPackageFilename($package);


 $filesystem->ensureDirectoryExists($targetDir);
$target = realpath($targetDir).'/'.$packageName.'.'.$format;
$filesystem->ensureDirectoryExists(dirname($target));

if (!$this->overwriteFiles && file_exists($target)) {
return $target;
}

if ($package instanceof RootPackage) {
$sourcePath = realpath('.');
} else {

 $sourcePath = sys_get_temp_dir().'/composer_archiver/'.$packageName;
$filesystem->ensureDirectoryExists($sourcePath);


 $this->downloadManager->download($package, $sourcePath);
}


 $archivePath = $usableArchiver->archive($sourcePath, $target, $format, $package->getArchiveExcludes());


 if (!$package instanceof RootPackage) {
$filesystem->removeDirectory($sourcePath);
}

return $archivePath;
}
}
<?php











namespace Composer\Package\Archiver;

use Symfony\Component\Finder;






class HgExcludeFilter extends BaseExcludeFilter
{
const HG_IGNORE_REGEX = 1;
const HG_IGNORE_GLOB = 2;





protected $patternMode;






public function __construct($sourcePath)
{
parent::__construct($sourcePath);

$this->patternMode = self::HG_IGNORE_REGEX;

if (file_exists($sourcePath.'/.hgignore')) {
$this->excludePatterns = $this->parseLines(
file($sourcePath.'/.hgignore'),
array($this, 'parseHgIgnoreLine')
);
}
}








public function parseHgIgnoreLine($line)
{
if (preg_match('#^syntax\s*:\s*(glob|regexp)$#', $line, $matches)) {
if ($matches[1] === 'glob') {
$this->patternMode = self::HG_IGNORE_GLOB;
} else {
$this->patternMode = self::HG_IGNORE_REGEX;
}

return null;
}

if ($this->patternMode == self::HG_IGNORE_GLOB) {
return $this->patternFromGlob($line);
} else {
return $this->patternFromRegex($line);
}
}








protected function patternFromGlob($line)
{
$pattern = '#'.substr(Finder\Glob::toRegex($line), 2, -1).'#';
$pattern = str_replace('[^/]*', '.*', $pattern);

return array($pattern, false, true);
}








public function patternFromRegex($line)
{

 $pattern = '#'.preg_replace('/((?:\\\\\\\\)*)(\\\\?)#/', '\1\2\2\\#', $line).'#';

return array($pattern, false, true);
}
}
<?php











namespace Composer\Package;




class RootAliasPackage extends AliasPackage implements RootPackageInterface
{
public function __construct(RootPackageInterface $aliasOf, $version, $prettyVersion)
{
parent::__construct($aliasOf, $version, $prettyVersion);
}




public function getAliases()
{
return $this->aliasOf->getAliases();
}




public function getMinimumStability()
{
return $this->aliasOf->getMinimumStability();
}




public function getStabilityFlags()
{
return $this->aliasOf->getStabilityFlags();
}




public function getReferences()
{
return $this->aliasOf->getReferences();
}




public function getPreferStable()
{
return $this->aliasOf->getPreferStable();
}




public function setRequires(array $require)
{
return $this->aliasOf->setRequires($require);
}




public function setDevRequires(array $devRequire)
{
return $this->aliasOf->setDevRequires($devRequire);
}

public function __clone()
{
parent::__clone();
$this->aliasOf = clone $this->aliasOf;
}
}
<?php











namespace Composer\Package;

use Composer\Package\Version\VersionParser;






class Package extends BasePackage
{
protected $type;
protected $targetDir;
protected $installationSource;
protected $sourceType;
protected $sourceUrl;
protected $sourceReference;
protected $distType;
protected $distUrl;
protected $distReference;
protected $distSha1Checksum;
protected $version;
protected $prettyVersion;
protected $releaseDate;
protected $extra = array();
protected $binaries = array();
protected $dev;
protected $stability;
protected $notificationUrl;

protected $requires = array();
protected $conflicts = array();
protected $provides = array();
protected $replaces = array();
protected $devRequires = array();
protected $suggests = array();
protected $autoload = array();
protected $includePaths = array();
protected $archiveExcludes = array();








public function __construct($name, $version, $prettyVersion)
{
parent::__construct($name);

$this->version = $version;
$this->prettyVersion = $prettyVersion;

$this->stability = VersionParser::parseStability($version);
$this->dev = $this->stability === 'dev';
}




public function isDev()
{
return $this->dev;
}




public function setType($type)
{
$this->type = $type;
}




public function getType()
{
return $this->type ?: 'library';
}




public function getStability()
{
return $this->stability;
}




public function setTargetDir($targetDir)
{
$this->targetDir = $targetDir;
}




public function getTargetDir()
{
if (null === $this->targetDir) {
return;
}

return ltrim(preg_replace('{ (?:^|[\\\\/]+) \.\.? (?:[\\\\/]+|$) (?:\.\.? (?:[\\\\/]+|$) )*}x', '/', $this->targetDir), '/');
}




public function setExtra(array $extra)
{
$this->extra = $extra;
}




public function getExtra()
{
return $this->extra;
}




public function setBinaries(array $binaries)
{
$this->binaries = $binaries;
}




public function getBinaries()
{
return $this->binaries;
}




public function setInstallationSource($type)
{
$this->installationSource = $type;
}




public function getInstallationSource()
{
return $this->installationSource;
}




public function setSourceType($type)
{
$this->sourceType = $type;
}




public function getSourceType()
{
return $this->sourceType;
}




public function setSourceUrl($url)
{
$this->sourceUrl = $url;
}




public function getSourceUrl()
{
return $this->sourceUrl;
}




public function setSourceReference($reference)
{
$this->sourceReference = $reference;
}




public function getSourceReference()
{
return $this->sourceReference;
}




public function setDistType($type)
{
$this->distType = $type;
}




public function getDistType()
{
return $this->distType;
}




public function setDistUrl($url)
{
$this->distUrl = $url;
}




public function getDistUrl()
{
return $this->distUrl;
}




public function setDistReference($reference)
{
$this->distReference = $reference;
}




public function getDistReference()
{
return $this->distReference;
}




public function setDistSha1Checksum($sha1checksum)
{
$this->distSha1Checksum = $sha1checksum;
}




public function getDistSha1Checksum()
{
return $this->distSha1Checksum;
}




public function getVersion()
{
return $this->version;
}




public function getPrettyVersion()
{
return $this->prettyVersion;
}






public function setReleaseDate(\DateTime $releaseDate)
{
$this->releaseDate = $releaseDate;
}




public function getReleaseDate()
{
return $this->releaseDate;
}






public function setRequires(array $requires)
{
$this->requires = $requires;
}




public function getRequires()
{
return $this->requires;
}






public function setConflicts(array $conflicts)
{
$this->conflicts = $conflicts;
}




public function getConflicts()
{
return $this->conflicts;
}






public function setProvides(array $provides)
{
$this->provides = $provides;
}




public function getProvides()
{
return $this->provides;
}






public function setReplaces(array $replaces)
{
$this->replaces = $replaces;
}




public function getReplaces()
{
return $this->replaces;
}






public function setDevRequires(array $devRequires)
{
$this->devRequires = $devRequires;
}




public function getDevRequires()
{
return $this->devRequires;
}






public function setSuggests(array $suggests)
{
$this->suggests = $suggests;
}




public function getSuggests()
{
return $this->suggests;
}






public function setAutoload(array $autoload)
{
$this->autoload = $autoload;
}




public function getAutoload()
{
return $this->autoload;
}






public function setIncludePaths(array $includePaths)
{
$this->includePaths = $includePaths;
}




public function getIncludePaths()
{
return $this->includePaths;
}






public function setNotificationUrl($notificationUrl)
{
$this->notificationUrl = $notificationUrl;
}




public function getNotificationUrl()
{
return $this->notificationUrl;
}






public function setArchiveExcludes(array $excludes)
{
$this->archiveExcludes = $excludes;
}




public function getArchiveExcludes()
{
return $this->archiveExcludes;
}
}
<?php











namespace Composer\Package;

use Composer\Package\LinkConstraint\VersionConstraint;
use Composer\Package\Version\VersionParser;




class AliasPackage extends BasePackage implements CompletePackageInterface
{
protected $version;
protected $prettyVersion;
protected $dev;
protected $aliasOf;
protected $rootPackageAlias = false;
protected $stability;

protected $requires;
protected $conflicts;
protected $provides;
protected $replaces;
protected $recommends;
protected $suggests;








public function __construct(PackageInterface $aliasOf, $version, $prettyVersion)
{
parent::__construct($aliasOf->getName());

$this->version = $version;
$this->prettyVersion = $prettyVersion;
$this->aliasOf = $aliasOf;
$this->stability = VersionParser::parseStability($version);
$this->dev = $this->stability === 'dev';


 foreach (array('requires', 'devRequires') as $type) {
$links = $aliasOf->{'get'.ucfirst($type)}();
foreach ($links as $index => $link) {

 if ('self.version' === $link->getPrettyConstraint()) {
$links[$index] = new Link($link->getSource(), $link->getTarget(), new VersionConstraint('=', $this->version), $type, $prettyVersion);
}
}
$this->$type = $links;
}


 foreach (array('conflicts', 'provides', 'replaces') as $type) {
$links = $aliasOf->{'get'.ucfirst($type)}();
$newLinks = array();
foreach ($links as $link) {

 if ('self.version' === $link->getPrettyConstraint()) {
$newLinks[] = new Link($link->getSource(), $link->getTarget(), new VersionConstraint('=', $this->version), $type, $prettyVersion);
}
}
$this->$type = array_merge($links, $newLinks);
}
}

public function getAliasOf()
{
return $this->aliasOf;
}




public function getVersion()
{
return $this->version;
}




public function getStability()
{
return $this->stability;
}




public function getPrettyVersion()
{
return $this->prettyVersion;
}




public function isDev()
{
return $this->dev;
}




public function getRequires()
{
return $this->requires;
}




public function getConflicts()
{
return $this->conflicts;
}




public function getProvides()
{
return $this->provides;
}




public function getReplaces()
{
return $this->replaces;
}




public function getDevRequires()
{
return $this->devRequires;
}










public function setRootPackageAlias($value)
{
return $this->rootPackageAlias = $value;
}





public function isRootPackageAlias()
{
return $this->rootPackageAlias;
}





public function getType()
{
return $this->aliasOf->getType();
}
public function getTargetDir()
{
return $this->aliasOf->getTargetDir();
}
public function getExtra()
{
return $this->aliasOf->getExtra();
}
public function setInstallationSource($type)
{
$this->aliasOf->setInstallationSource($type);
}
public function getInstallationSource()
{
return $this->aliasOf->getInstallationSource();
}
public function getSourceType()
{
return $this->aliasOf->getSourceType();
}
public function getSourceUrl()
{
return $this->aliasOf->getSourceUrl();
}
public function getSourceReference()
{
return $this->aliasOf->getSourceReference();
}
public function setSourceReference($reference)
{
return $this->aliasOf->setSourceReference($reference);
}
public function getDistType()
{
return $this->aliasOf->getDistType();
}
public function getDistUrl()
{
return $this->aliasOf->getDistUrl();
}
public function getDistReference()
{
return $this->aliasOf->getDistReference();
}
public function getDistSha1Checksum()
{
return $this->aliasOf->getDistSha1Checksum();
}
public function getScripts()
{
return $this->aliasOf->getScripts();
}
public function getLicense()
{
return $this->aliasOf->getLicense();
}
public function getAutoload()
{
return $this->aliasOf->getAutoload();
}
public function getIncludePaths()
{
return $this->aliasOf->getIncludePaths();
}
public function getRepositories()
{
return $this->aliasOf->getRepositories();
}
public function getReleaseDate()
{
return $this->aliasOf->getReleaseDate();
}
public function getBinaries()
{
return $this->aliasOf->getBinaries();
}
public function getKeywords()
{
return $this->aliasOf->getKeywords();
}
public function getDescription()
{
return $this->aliasOf->getDescription();
}
public function getHomepage()
{
return $this->aliasOf->getHomepage();
}
public function getSuggests()
{
return $this->aliasOf->getSuggests();
}
public function getAuthors()
{
return $this->aliasOf->getAuthors();
}
public function getSupport()
{
return $this->aliasOf->getSupport();
}
public function getNotificationUrl()
{
return $this->aliasOf->getNotificationUrl();
}
public function getArchiveExcludes()
{
return $this->aliasOf->getArchiveExcludes();
}
public function __toString()
{
return parent::__toString().' (alias of '.$this->aliasOf->getVersion().')';
}
}
<?php











namespace Composer\Package;

use Composer\Package\LinkConstraint\LinkConstraintInterface;
use Composer\Package\PackageInterface;






class Link
{
protected $source;
protected $target;
protected $constraint;
protected $description;
protected $prettyConstraint;










public function __construct($source, $target, LinkConstraintInterface $constraint = null, $description = 'relates to', $prettyConstraint = null)
{
$this->source = strtolower($source);
$this->target = strtolower($target);
$this->constraint = $constraint;
$this->description = $description;
$this->prettyConstraint = $prettyConstraint;
}

public function getSource()
{
return $this->source;
}

public function getTarget()
{
return $this->target;
}

public function getConstraint()
{
return $this->constraint;
}

public function getPrettyConstraint()
{
if (null === $this->prettyConstraint) {
throw new \UnexpectedValueException(sprintf('Link %s has been misconfigured and had no prettyConstraint given.', $this));
}

return $this->prettyConstraint;
}

public function __toString()
{
return $this->source.' '.$this->description.' '.$this->target.' ('.$this->constraint.')';
}

public function getPrettyString(PackageInterface $sourcePackage)
{
return $sourcePackage->getPrettyString().' '.$this->description.' '.$this->target.' '.$this->constraint->getPrettyString().'';
}
}
<?php











namespace Composer\Package\LinkConstraint;






class EmptyConstraint implements LinkConstraintInterface
{
protected $prettyString;

public function matches(LinkConstraintInterface $provider)
{
return true;
}

public function setPrettyString($prettyString)
{
$this->prettyString = $prettyString;
}

public function getPrettyString()
{
if ($this->prettyString) {
return $this->prettyString;
}

return $this->__toString();
}

public function __toString()
{
return '[]';
}
}
<?php











namespace Composer\Package\LinkConstraint;







class MultiConstraint implements LinkConstraintInterface
{
protected $constraints;
protected $prettyString;
protected $conjunctive;







public function __construct(array $constraints, $conjunctive = true)
{
$this->constraints = $constraints;
$this->conjunctive = $conjunctive;
}

public function matches(LinkConstraintInterface $provider)
{
if (false === $this->conjunctive) {
foreach ($this->constraints as $constraint) {
if ($constraint->matches($provider)) {
return true;
}
}

return false;
}

foreach ($this->constraints as $constraint) {
if (!$constraint->matches($provider)) {
return false;
}
}

return true;
}

public function setPrettyString($prettyString)
{
$this->prettyString = $prettyString;
}

public function getPrettyString()
{
if ($this->prettyString) {
return $this->prettyString;
}

return $this->__toString();
}

public function __toString()
{
$constraints = array();
foreach ($this->constraints as $constraint) {
$constraints[] = $constraint->__toString();
}

return '['.implode($this->conjunctive ? ', ' : ' | ', $constraints).']';
}
}
<?php











namespace Composer\Package\LinkConstraint;








class VersionConstraint extends SpecificConstraint
{
private $operator;
private $version;







public function __construct($operator, $version)
{
if ('=' === $operator) {
$operator = '==';
}

if ('<>' === $operator) {
$operator = '!=';
}

$this->operator = $operator;
$this->version = $version;
}

public function versionCompare($a, $b, $operator, $compareBranches = false)
{
$aIsBranch = 'dev-' === substr($a, 0, 4);
$bIsBranch = 'dev-' === substr($b, 0, 4);
if ($aIsBranch && $bIsBranch) {
return $operator == '==' && $a === $b;
}


 if (!$compareBranches && ($aIsBranch || $bIsBranch)) {
return false;
}

return version_compare($a, $b, $operator);
}






public function matchSpecific(VersionConstraint $provider, $compareBranches = false)
{
$noEqualOp = str_replace('=', '', $this->operator);
$providerNoEqualOp = str_replace('=', '', $provider->operator);

$isEqualOp = '==' === $this->operator;
$isNonEqualOp = '!=' === $this->operator;
$isProviderEqualOp = '==' === $provider->operator;
$isProviderNonEqualOp = '!=' === $provider->operator;


 
 if ($isNonEqualOp || $isProviderNonEqualOp) {
return !$isEqualOp && !$isProviderEqualOp
|| $this->versionCompare($provider->version, $this->version, '!=', $compareBranches);
}


 
 if ($this->operator != '==' && $noEqualOp == $providerNoEqualOp) {
return true;
}

if ($this->versionCompare($provider->version, $this->version, $this->operator, $compareBranches)) {

 
 if ($provider->version == $this->version && $provider->operator == $providerNoEqualOp && $this->operator != $noEqualOp) {
return false;
}

return true;
}

return false;
}

public function __toString()
{
return $this->operator.' '.$this->version;
}
}
<?php











namespace Composer\Package\LinkConstraint;






abstract class SpecificConstraint implements LinkConstraintInterface
{
protected $prettyString;

public function matches(LinkConstraintInterface $provider)
{
if ($provider instanceof MultiConstraint) {

 return $provider->matches($this);
} elseif ($provider instanceof $this) {
return $this->matchSpecific($provider);
}

return true;
}

public function setPrettyString($prettyString)
{
$this->prettyString = $prettyString;
}

public function getPrettyString()
{
if ($this->prettyString) {
return $this->prettyString;
}

return $this->__toString();
}


 
 

}
<?php











namespace Composer\Package\LinkConstraint;






interface LinkConstraintInterface
{
public function matches(LinkConstraintInterface $provider);
public function setPrettyString($prettyString);
public function getPrettyString();
public function __toString();
}
<?php











namespace Composer;

use Composer\IO\IOInterface;
use Composer\Util\Filesystem;
use Symfony\Component\Finder\Finder;






class Cache
{
private $io;
private $root;
private $enabled = true;
private $whitelist;
private $filesystem;







public function __construct(IOInterface $io, $cacheDir, $whitelist = 'a-z0-9.', Filesystem $filesystem = null)
{
$this->io = $io;
$this->root = rtrim($cacheDir, '/\\') . '/';
$this->whitelist = $whitelist;
$this->filesystem = $filesystem ?: new Filesystem();

if (!is_dir($this->root)) {
if (!@mkdir($this->root, 0777, true)) {
$this->enabled = false;
}
}
}

public function isEnabled()
{
return $this->enabled;
}

public function getRoot()
{
return $this->root;
}

public function read($file)
{
$file = preg_replace('{[^'.$this->whitelist.']}i', '-', $file);
if ($this->enabled && file_exists($this->root . $file)) {
if ($this->io->isDebug()) {
$this->io->write('Reading '.$this->root . $file.' from cache');
}

return file_get_contents($this->root . $file);
}

return false;
}

public function write($file, $contents)
{
if ($this->enabled) {
$file = preg_replace('{[^'.$this->whitelist.']}i', '-', $file);

if ($this->io->isDebug()) {
$this->io->write('Writing '.$this->root . $file.' into cache');
}

return file_put_contents($this->root . $file, $contents);
}

return false;
}




public function copyFrom($file, $source)
{
if ($this->enabled) {
$file = preg_replace('{[^'.$this->whitelist.']}i', '-', $file);
$this->filesystem->ensureDirectoryExists(dirname($this->root . $file));

if ($this->io->isDebug()) {
$this->io->write('Writing '.$this->root . $file.' into cache');
}

return copy($source, $this->root . $file);
}

return false;
}




public function copyTo($file, $target)
{
$file = preg_replace('{[^'.$this->whitelist.']}i', '-', $file);
if ($this->enabled && file_exists($this->root . $file)) {
touch($this->root . $file);

if ($this->io->isDebug()) {
$this->io->write('Reading '.$this->root . $file.' from cache');
}

return copy($this->root . $file, $target);
}

return false;
}

public function remove($file)
{
$file = preg_replace('{[^'.$this->whitelist.']}i', '-', $file);
if ($this->enabled && file_exists($this->root . $file)) {
return unlink($this->root . $file);
}

return false;
}

public function gc($ttl, $maxSize)
{
$expire = new \DateTime();
$expire->modify('-'.$ttl.' seconds');

$finder = $this->getFinder()->date('until '.$expire->format('Y-m-d H:i:s'));
foreach ($finder as $file) {
unlink($file->getRealPath());
}

$totalSize = $this->filesystem->size($this->root);
if ($totalSize > $maxSize) {
$iterator = $this->getFinder()->sortByAccessedTime()->getIterator();
while ($totalSize > $maxSize && $iterator->valid()) {
$filepath = $iterator->current()->getRealPath();
$totalSize -= $this->filesystem->size($filepath);
unlink($filepath);
$iterator->next();
}
}

return true;
}

public function sha1($file)
{
$file = preg_replace('{[^'.$this->whitelist.']}i', '-', $file);
if ($this->enabled && file_exists($this->root . $file)) {
return sha1_file($this->root . $file);
}

return false;
}

public function sha256($file)
{
$file = preg_replace('{[^'.$this->whitelist.']}i', '-', $file);
if ($this->enabled && file_exists($this->root . $file)) {
return hash_file('sha256', $this->root . $file);
}

return false;
}

protected function getFinder()
{
return Finder::create()->in($this->root)->files();
}
}
<?php











namespace Composer\DependencyResolver;

use Composer\Package\PackageInterface;




interface PolicyInterface
{
public function versionCompare(PackageInterface $a, PackageInterface $b, $operator);
public function findUpdatePackages(Pool $pool, array $installedMap, PackageInterface $package);
public function selectPreferedPackages(Pool $pool, array $installedMap, array $literals);
}
<?php











namespace Composer\DependencyResolver;




class RuleSet implements \IteratorAggregate, \Countable
{

 const TYPE_PACKAGE = 0;
const TYPE_JOB = 1;
const TYPE_LEARNED = 4;

protected static $types = array(
-1 => 'UNKNOWN',
self::TYPE_PACKAGE => 'PACKAGE',
self::TYPE_JOB => 'JOB',
self::TYPE_LEARNED => 'LEARNED',
);

protected $rules;
protected $ruleById;
protected $nextRuleId;

protected $rulesByHash;

public function __construct()
{
$this->nextRuleId = 0;

foreach ($this->getTypes() as $type) {
$this->rules[$type] = array();
}

$this->rulesByHash = array();
}

public function add(Rule $rule, $type)
{
if (!isset(self::$types[$type])) {
throw new \OutOfBoundsException('Unknown rule type: ' . $type);
}

if (!isset($this->rules[$type])) {
$this->rules[$type] = array();
}

$this->rules[$type][] = $rule;
$this->ruleById[$this->nextRuleId] = $rule;
$rule->setType($type);

$rule->setId($this->nextRuleId);
$this->nextRuleId++;

$hash = $rule->getHash();
if (!isset($this->rulesByHash[$hash])) {
$this->rulesByHash[$hash] = array($rule);
} else {
$this->rulesByHash[$hash][] = $rule;
}
}

public function count()
{
return $this->nextRuleId;
}

public function ruleById($id)
{
return $this->ruleById[$id];
}

public function getRules()
{
return $this->rules;
}

public function getIterator()
{
return new RuleSetIterator($this->getRules());
}

public function getIteratorFor($types)
{
if (!is_array($types)) {
$types = array($types);
}

$allRules = $this->getRules();
$rules = array();

foreach ($types as $type) {
$rules[$type] = $allRules[$type];
}

return new RuleSetIterator($rules);
}

public function getIteratorWithout($types)
{
if (!is_array($types)) {
$types = array($types);
}

$rules = $this->getRules();

foreach ($types as $type) {
unset($rules[$type]);
}

return new RuleSetIterator($rules);
}

public function getTypes()
{
$types = self::$types;
unset($types[-1]);

return array_keys($types);
}

public function containsEqual($rule)
{
if (isset($this->rulesByHash[$rule->getHash()])) {
$potentialDuplicates = $this->rulesByHash[$rule->getHash()];
foreach ($potentialDuplicates as $potentialDuplicate) {
if ($rule->equals($potentialDuplicate)) {
return true;
}
}
}

return false;
}

public function __toString()
{
$string = "\n";
foreach ($this->rules as $type => $rules) {
$string .= str_pad(self::$types[$type], 8, ' ') . ": ";
foreach ($rules as $rule) {
$string .= $rule."\n";
}
$string .= "\n\n";
}

return $string;
}
}
<?php











namespace Composer\DependencyResolver;




class SolverBugException extends \RuntimeException
{
public function __construct($message)
{
parent::__construct(
$message."\nThis exception was most likely caused by a bug in Composer.\n".
"Please report the command you ran, the exact error you received, and your composer.json on https://github.com/composer/composer/issues - thank you!\n");
}
}
<?php











namespace Composer\DependencyResolver;

use Composer\Package\PackageInterface;
use Composer\Package\AliasPackage;
use Composer\Package\BasePackage;
use Composer\Package\LinkConstraint\VersionConstraint;





class DefaultPolicy implements PolicyInterface
{
private $preferStable;

public function __construct($preferStable = false)
{
$this->preferStable = $preferStable;
}

public function versionCompare(PackageInterface $a, PackageInterface $b, $operator)
{
if ($this->preferStable && ($stabA = $a->getStability()) !== ($stabB = $b->getStability())) {
return BasePackage::$stabilities[$stabA] < BasePackage::$stabilities[$stabB];
}

$constraint = new VersionConstraint($operator, $b->getVersion());
$version = new VersionConstraint('==', $a->getVersion());

return $constraint->matchSpecific($version, true);
}

public function findUpdatePackages(Pool $pool, array $installedMap, PackageInterface $package)
{
$packages = array();

foreach ($pool->whatProvides($package->getName()) as $candidate) {
if ($candidate !== $package) {
$packages[] = $candidate;
}
}

return $packages;
}

public function getPriority(Pool $pool, PackageInterface $package)
{
return $pool->getPriority($package->getRepository());
}

public function selectPreferedPackages(Pool $pool, array $installedMap, array $literals, $requiredPackage = null)
{
$packages = $this->groupLiteralsByNamePreferInstalled($pool, $installedMap, $literals);

foreach ($packages as &$literals) {
$policy = $this;
usort($literals, function ($a, $b) use ($policy, $pool, $installedMap, $requiredPackage) {
return $policy->compareByPriorityPreferInstalled($pool, $installedMap, $pool->literalToPackage($a), $pool->literalToPackage($b), $requiredPackage, true);
});
}

foreach ($packages as &$literals) {
$literals = $this->pruneToBestVersion($pool, $literals);

$literals = $this->pruneToHighestPriorityOrInstalled($pool, $installedMap, $literals);

$literals = $this->pruneRemoteAliases($pool, $literals);
}

$selected = call_user_func_array('array_merge', $packages);


 usort($selected, function ($a, $b) use ($policy, $pool, $installedMap, $requiredPackage) {
return $policy->compareByPriorityPreferInstalled($pool, $installedMap, $pool->literalToPackage($a), $pool->literalToPackage($b), $requiredPackage);
});

return $selected;
}

protected function groupLiteralsByNamePreferInstalled(Pool $pool, array $installedMap, $literals)
{
$packages = array();
foreach ($literals as $literal) {
$packageName = $pool->literalToPackage($literal)->getName();

if (!isset($packages[$packageName])) {
$packages[$packageName] = array();
}

if (isset($installedMap[abs($literal)])) {
array_unshift($packages[$packageName], $literal);
} else {
$packages[$packageName][] = $literal;
}
}

return $packages;
}




public function compareByPriorityPreferInstalled(Pool $pool, array $installedMap, PackageInterface $a, PackageInterface $b, $requiredPackage = null, $ignoreReplace = false)
{
if ($a->getRepository() === $b->getRepository()) {

 if ($a->getName() === $b->getName()) {
$aAliased = $a instanceof AliasPackage;
$bAliased = $b instanceof AliasPackage;
if ($aAliased && !$bAliased) {
return -1; 
 }
if (!$aAliased && $bAliased) {
return 1; 
 }
}

if (!$ignoreReplace) {

 if ($this->replaces($a, $b)) {
return 1; 
 }
if ($this->replaces($b, $a)) {
return -1; 
 }


 
 if ($requiredPackage && false !== ($pos = strpos($requiredPackage, '/'))) {
$requiredVendor = substr($requiredPackage, 0, $pos);

$aIsSameVendor = substr($a->getName(), 0, $pos) === $requiredVendor;
$bIsSameVendor = substr($b->getName(), 0, $pos) === $requiredVendor;

if ($bIsSameVendor !== $aIsSameVendor) {
return $aIsSameVendor ? -1 : 1;
}
}
}


 if ($a->getId() === $b->getId()) {
return 0;
}

return ($a->getId() < $b->getId()) ? -1 : 1;
}

if (isset($installedMap[$a->getId()])) {
return -1;
}

if (isset($installedMap[$b->getId()])) {
return 1;
}

return ($this->getPriority($pool, $a) > $this->getPriority($pool, $b)) ? -1 : 1;
}











protected function replaces(PackageInterface $source, PackageInterface $target)
{
foreach ($source->getReplaces() as $link) {
if ($link->getTarget() === $target->getName()


 ) {
return true;
}
}

return false;
}

protected function pruneToBestVersion(Pool $pool, $literals)
{
$bestLiterals = array($literals[0]);
$bestPackage = $pool->literalToPackage($literals[0]);
foreach ($literals as $i => $literal) {
if (0 === $i) {
continue;
}

$package = $pool->literalToPackage($literal);

if ($this->versionCompare($package, $bestPackage, '>')) {
$bestPackage = $package;
$bestLiterals = array($literal);
} elseif ($this->versionCompare($package, $bestPackage, '==')) {
$bestLiterals[] = $literal;
}
}

return $bestLiterals;
}

protected function selectNewestPackages(array $installedMap, array $literals)
{
$maxLiterals = array($literals[0]);
$maxPackage = $literals[0]->getPackage();
foreach ($literals as $i => $literal) {
if (0 === $i) {
continue;
}

if ($this->versionCompare($literal->getPackage(), $maxPackage, '>')) {
$maxPackage = $literal->getPackage();
$maxLiterals = array($literal);
} elseif ($this->versionCompare($literal->getPackage(), $maxPackage, '==')) {
$maxLiterals[] = $literal;
}
}

return $maxLiterals;
}




protected function pruneToHighestPriorityOrInstalled(Pool $pool, array $installedMap, array $literals)
{
$selected = array();

$priority = null;

foreach ($literals as $literal) {
$package = $pool->literalToPackage($literal);

if (isset($installedMap[$package->getId()])) {
$selected[] = $literal;
continue;
}

if (null === $priority) {
$priority = $this->getPriority($pool, $package);
}

if ($this->getPriority($pool, $package) != $priority) {
break;
}

$selected[] = $literal;
}

return $selected;
}






protected function pruneRemoteAliases(Pool $pool, array $literals)
{
$hasLocalAlias = false;

foreach ($literals as $literal) {
$package = $pool->literalToPackage($literal);

if ($package instanceof AliasPackage && $package->isRootPackageAlias()) {
$hasLocalAlias = true;
break;
}
}

if (!$hasLocalAlias) {
return $literals;
}

$selected = array();
foreach ($literals as $literal) {
$package = $pool->literalToPackage($literal);

if ($package instanceof AliasPackage && $package->isRootPackageAlias()) {
$selected[] = $literal;
}
}

return $selected;
}
}
<?php











namespace Composer\DependencyResolver;






class Decisions implements \Iterator, \Countable
{
const DECISION_LITERAL = 0;
const DECISION_REASON = 1;

protected $pool;
protected $decisionMap;
protected $decisionQueue = array();

public function __construct($pool)
{
$this->pool = $pool;
$this->decisionMap = array();
}

public function decide($literal, $level, $why)
{
$this->addDecision($literal, $level);
$this->decisionQueue[] = array(
self::DECISION_LITERAL => $literal,
self::DECISION_REASON => $why,
);
}

public function satisfy($literal)
{
$packageId = abs($literal);

return (
$literal > 0 && isset($this->decisionMap[$packageId]) && $this->decisionMap[$packageId] > 0 ||
$literal < 0 && isset($this->decisionMap[$packageId]) && $this->decisionMap[$packageId] < 0
);
}

public function conflict($literal)
{
$packageId = abs($literal);

return (
(isset($this->decisionMap[$packageId]) && $this->decisionMap[$packageId] > 0 && $literal < 0) ||
(isset($this->decisionMap[$packageId]) && $this->decisionMap[$packageId] < 0 && $literal > 0)
);
}

public function decided($literalOrPackageId)
{
return !empty($this->decisionMap[abs($literalOrPackageId)]);
}

public function undecided($literalOrPackageId)
{
return empty($this->decisionMap[abs($literalOrPackageId)]);
}

public function decidedInstall($literalOrPackageId)
{
$packageId = abs($literalOrPackageId);

return isset($this->decisionMap[$packageId]) && $this->decisionMap[$packageId] > 0;
}

public function decisionLevel($literalOrPackageId)
{
$packageId = abs($literalOrPackageId);
if (isset($this->decisionMap[$packageId])) {
return abs($this->decisionMap[$packageId]);
}

return 0;
}

public function decisionRule($literalOrPackageId)
{
$packageId = abs($literalOrPackageId);

foreach ($this->decisionQueue as $i => $decision) {
if ($packageId === abs($decision[self::DECISION_LITERAL])) {
return $decision[self::DECISION_REASON];
}
}

return null;
}

public function atOffset($queueOffset)
{
return $this->decisionQueue[$queueOffset];
}

public function validOffset($queueOffset)
{
return $queueOffset >= 0 && $queueOffset < count($this->decisionQueue);
}

public function lastReason()
{
return $this->decisionQueue[count($this->decisionQueue) - 1][self::DECISION_REASON];
}

public function lastLiteral()
{
return $this->decisionQueue[count($this->decisionQueue) - 1][self::DECISION_LITERAL];
}

public function reset()
{
while ($decision = array_pop($this->decisionQueue)) {
$this->decisionMap[abs($decision[self::DECISION_LITERAL])] = 0;
}
}

public function resetToOffset($offset)
{
while (count($this->decisionQueue) > $offset + 1) {
$decision = array_pop($this->decisionQueue);
$this->decisionMap[abs($decision[self::DECISION_LITERAL])] = 0;
}
}

public function revertLast()
{
$this->decisionMap[abs($this->lastLiteral())] = 0;
array_pop($this->decisionQueue);
}

public function count()
{
return count($this->decisionQueue);
}

public function rewind()
{
end($this->decisionQueue);
}

public function current()
{
return current($this->decisionQueue);
}

public function key()
{
return key($this->decisionQueue);
}

public function next()
{
return prev($this->decisionQueue);
}

public function valid()
{
return false !== current($this->decisionQueue);
}

public function isEmpty()
{
return count($this->decisionQueue) === 0;
}

protected function addDecision($literal, $level)
{
$packageId = abs($literal);

$previousDecision = isset($this->decisionMap[$packageId]) ? $this->decisionMap[$packageId] : null;
if ($previousDecision != 0) {
$literalString = $this->pool->literalToString($literal);
$package = $this->pool->literalToPackage($literal);
throw new SolverBugException(
"Trying to decide $literalString on level $level, even though $package was previously decided as ".(int) $previousDecision."."
);
}

if ($literal > 0) {
$this->decisionMap[$packageId] = $level;
} else {
$this->decisionMap[$packageId] = -$level;
}
}
}
<?php











namespace Composer\DependencyResolver;








class RuleWatchNode
{
public $watch1;
public $watch2;

protected $rule;






public function __construct($rule)
{
$this->rule = $rule;

$literals = $rule->getLiterals();

$this->watch1 = count($literals) > 0 ? $literals[0] : 0;
$this->watch2 = count($literals) > 1 ? $literals[1] : 0;
}









public function watch2OnHighest(Decisions $decisions)
{
$literals = $this->rule->getLiterals();


 if ($literals < 3) {
return;
}

$watchLevel = 0;

foreach ($literals as $literal) {
$level = $decisions->decisionLevel($literal);

if ($level > $watchLevel) {
$this->watch2 = $literal;
$watchLevel = $level;
}
}
}






public function getRule()
{
return $this->rule;
}







public function getOtherWatch($literal)
{
if ($this->watch1 == $literal) {
return $this->watch2;
} else {
return $this->watch1;
}
}







public function moveWatch($from, $to)
{
if ($this->watch1 == $from) {
$this->watch1 = $to;
} else {
$this->watch2 = $to;
}
}
}
<?php











namespace Composer\DependencyResolver;




class SolverProblemsException extends \RuntimeException
{
protected $problems;
protected $installedMap;

public function __construct(array $problems, array $installedMap)
{
$this->problems = $problems;
$this->installedMap = $installedMap;

parent::__construct($this->createMessage(), 2);
}

protected function createMessage()
{
$text = "\n";
foreach ($this->problems as $i => $problem) {
$text .= "  Problem ".($i+1).$problem->getPrettyString($this->installedMap)."\n";
}

if (strpos($text, 'could not be found') || strpos($text, 'no matching package found')) {
$text .= "\nPotential causes:\n - A typo in the package name\n - The package is not available in a stable-enough version according to your minimum-stability setting\n   see <https://groups.google.com/d/topic/composer-dev/_g3ASeIFlrc/discussion> for more details.\n\nRead <http://getcomposer.org/doc/articles/troubleshooting.md> for further common problems.";
}

return $text;
}

public function getProblems()
{
return $this->problems;
}
}
<?php











namespace Composer\DependencyResolver;

use Composer\Package\AliasPackage;
use Composer\DependencyResolver\Operation;




class Transaction
{
protected $policy;
protected $pool;
protected $installedMap;
protected $decisions;
protected $transaction;

public function __construct($policy, $pool, $installedMap, $decisions)
{
$this->policy = $policy;
$this->pool = $pool;
$this->installedMap = $installedMap;
$this->decisions = $decisions;
$this->transaction = array();
}

public function getOperations()
{
$installMeansUpdateMap = $this->findUpdates();

$updateMap = array();
$installMap = array();
$uninstallMap = array();

foreach ($this->decisions as $i => $decision) {
$literal = $decision[Decisions::DECISION_LITERAL];
$reason = $decision[Decisions::DECISION_REASON];

$package = $this->pool->literalToPackage($literal);


 if (($literal > 0) == (isset($this->installedMap[$package->getId()]))) {
continue;
}

if ($literal > 0) {
if (isset($installMeansUpdateMap[abs($literal)]) && !$package instanceof AliasPackage) {

$source = $installMeansUpdateMap[abs($literal)];

$updateMap[$package->getId()] = array(
'package' => $package,
'source' => $source,
'reason' => $reason,
);


 unset($installMeansUpdateMap[abs($literal)]);
$ignoreRemove[$source->getId()] = true;
} else {
$installMap[$package->getId()] = array(
'package' => $package,
'reason' => $reason,
);
}
}
}

foreach ($this->decisions as $i => $decision) {
$literal = $decision[Decisions::DECISION_LITERAL];
$package = $this->pool->literalToPackage($literal);

if ($literal <= 0 &&
isset($this->installedMap[$package->getId()]) &&
!isset($ignoreRemove[$package->getId()])) {
$uninstallMap[$package->getId()] = array(
'package' => $package,
'reason' => $reason,
);

}
}

$this->transactionFromMaps($installMap, $updateMap, $uninstallMap);

return $this->transaction;
}

protected function transactionFromMaps($installMap, $updateMap, $uninstallMap)
{
$queue = array_map(function ($operation) {
return $operation['package'];
},
$this->findRootPackages($installMap, $updateMap)
);

$visited = array();

while (!empty($queue)) {
$package = array_pop($queue);
$packageId = $package->getId();

if (!isset($visited[$packageId])) {
array_push($queue, $package);

if ($package instanceof AliasPackage) {
array_push($queue, $package->getAliasOf());
} else {
foreach ($package->getRequires() as $link) {
$possibleRequires = $this->pool->whatProvides($link->getTarget(), $link->getConstraint());

foreach ($possibleRequires as $require) {
array_push($queue, $require);
}
}
}

$visited[$package->getId()] = true;
} else {
if (isset($installMap[$packageId])) {
$this->install(
$installMap[$packageId]['package'],
$installMap[$packageId]['reason']
);
unset($installMap[$packageId]);
}
if (isset($updateMap[$packageId])) {
$this->update(
$updateMap[$packageId]['source'],
$updateMap[$packageId]['package'],
$updateMap[$packageId]['reason']
);
unset($updateMap[$packageId]);
}
}
}

foreach ($uninstallMap as $uninstall) {
$this->uninstall($uninstall['package'], $uninstall['reason']);
}
}

protected function findRootPackages($installMap, $updateMap)
{
$packages = $installMap + $updateMap;
$roots = $packages;

foreach ($packages as $packageId => $operation) {
$package = $operation['package'];

if (!isset($roots[$packageId])) {
continue;
}

foreach ($package->getRequires() as $link) {
$possibleRequires = $this->pool->whatProvides($link->getTarget(), $link->getConstraint());

foreach ($possibleRequires as $require) {
unset($roots[$require->getId()]);
}
}
}

return $roots;
}

protected function findUpdates()
{
$installMeansUpdateMap = array();

foreach ($this->decisions as $i => $decision) {
$literal = $decision[Decisions::DECISION_LITERAL];
$package = $this->pool->literalToPackage($literal);

if ($package instanceof AliasPackage) {
continue;
}


 if ($literal <= 0 && isset($this->installedMap[$package->getId()])) {
$updates = $this->policy->findUpdatePackages($this->pool, $this->installedMap, $package);

$literals = array($package->getId());

foreach ($updates as $update) {
$literals[] = $update->getId();
}

foreach ($literals as $updateLiteral) {
if ($updateLiteral !== $literal) {
$installMeansUpdateMap[abs($updateLiteral)] = $package;
}
}
}
}

return $installMeansUpdateMap;
}

protected function install($package, $reason)
{
if ($package instanceof AliasPackage) {
return $this->markAliasInstalled($package, $reason);
}

$this->transaction[] = new Operation\InstallOperation($package, $reason);
}

protected function update($from, $to, $reason)
{
$this->transaction[] = new Operation\UpdateOperation($from, $to, $reason);
}

protected function uninstall($package, $reason)
{
if ($package instanceof AliasPackage) {
return $this->markAliasUninstalled($package, $reason);
}

$this->transaction[] = new Operation\UninstallOperation($package, $reason);
}

protected function markAliasInstalled($package, $reason)
{
$this->transaction[] = new Operation\MarkAliasInstalledOperation($package, $reason);
}

protected function markAliasUninstalled($package, $reason)
{
$this->transaction[] = new Operation\MarkAliasUninstalledOperation($package, $reason);
}
}
<?php











namespace Composer\DependencyResolver\Operation;

use Composer\Package\PackageInterface;






class UninstallOperation extends SolverOperation
{
protected $package;







public function __construct(PackageInterface $package, $reason = null)
{
parent::__construct($reason);

$this->package = $package;
}






public function getPackage()
{
return $this->package;
}






public function getJobType()
{
return 'uninstall';
}




public function __toString()
{
return 'Uninstalling '.$this->package->getPrettyName().' ('.$this->formatVersion($this->package).')';
}
}
<?php











namespace Composer\DependencyResolver\Operation;

use Composer\Package\PackageInterface;






class UpdateOperation extends SolverOperation
{
protected $initialPackage;
protected $targetPackage;








public function __construct(PackageInterface $initial, PackageInterface $target, $reason = null)
{
parent::__construct($reason);

$this->initialPackage = $initial;
$this->targetPackage = $target;
}






public function getInitialPackage()
{
return $this->initialPackage;
}






public function getTargetPackage()
{
return $this->targetPackage;
}






public function getJobType()
{
return 'update';
}




public function __toString()
{
return 'Updating '.$this->initialPackage->getPrettyName().' ('.$this->formatVersion($this->initialPackage).') to '.
$this->targetPackage->getPrettyName(). ' ('.$this->formatVersion($this->targetPackage).')';
}
}
<?php











namespace Composer\DependencyResolver\Operation;

use Composer\Package\AliasPackage;






class MarkAliasInstalledOperation extends SolverOperation
{
protected $package;







public function __construct(AliasPackage $package, $reason = null)
{
parent::__construct($reason);

$this->package = $package;
}






public function getPackage()
{
return $this->package;
}






public function getJobType()
{
return 'markAliasInstalled';
}




public function __toString()
{
return 'Marking '.$this->package->getPrettyName().' ('.$this->formatVersion($this->package).') as installed, alias of '.$this->package->getAliasOf()->getPrettyName().' ('.$this->formatVersion($this->package->getAliasOf()).')';
}
}
<?php











namespace Composer\DependencyResolver\Operation;

use Composer\Package\PackageInterface;






class InstallOperation extends SolverOperation
{
protected $package;







public function __construct(PackageInterface $package, $reason = null)
{
parent::__construct($reason);

$this->package = $package;
}






public function getPackage()
{
return $this->package;
}






public function getJobType()
{
return 'install';
}




public function __toString()
{
return 'Installing '.$this->package->getPrettyName().' ('.$this->formatVersion($this->package).')';
}
}
<?php











namespace Composer\DependencyResolver\Operation;

use Composer\Package\Version\VersionParser;
use Composer\Package\PackageInterface;






abstract class SolverOperation implements OperationInterface
{
protected $reason;






public function __construct($reason = null)
{
$this->reason = $reason;
}






public function getReason()
{
return $this->reason;
}

protected function formatVersion(PackageInterface $package)
{
return VersionParser::formatVersion($package);
}
}
<?php











namespace Composer\DependencyResolver\Operation;

use Composer\Package\AliasPackage;






class MarkAliasUninstalledOperation extends SolverOperation
{
protected $package;







public function __construct(AliasPackage $package, $reason = null)
{
parent::__construct($reason);

$this->package = $package;
}






public function getPackage()
{
return $this->package;
}






public function getJobType()
{
return 'markAliasUninstalled';
}




public function __toString()
{
return 'Marking '.$this->package->getPrettyName().' ('.$this->formatVersion($this->package).') as uninstalled, alias of '.$this->package->getAliasOf()->getPrettyName().' ('.$this->formatVersion($this->package->getAliasOf()).')';
}
}
<?php











namespace Composer\DependencyResolver\Operation;






interface OperationInterface
{





public function getJobType();






public function getReason();






public function __toString();
}
<?php











namespace Composer\DependencyResolver;

use Composer\Package\BasePackage;
use Composer\Package\AliasPackage;
use Composer\Package\Version\VersionParser;
use Composer\Package\Link;
use Composer\Package\LinkConstraint\LinkConstraintInterface;
use Composer\Package\LinkConstraint\VersionConstraint;
use Composer\Repository\RepositoryInterface;
use Composer\Repository\CompositeRepository;
use Composer\Repository\ComposerRepository;
use Composer\Repository\InstalledRepositoryInterface;
use Composer\Repository\StreamableRepositoryInterface;
use Composer\Repository\PlatformRepository;







class Pool
{
const MATCH_NAME = -1;
const MATCH_NONE = 0;
const MATCH = 1;
const MATCH_PROVIDE = 2;
const MATCH_REPLACE = 3;

protected $repositories = array();
protected $providerRepos = array();
protected $packages = array();
protected $packageByName = array();
protected $acceptableStabilities;
protected $stabilityFlags;
protected $versionParser;
protected $providerCache = array();
protected $id = 1;

public function __construct($minimumStability = 'stable', array $stabilityFlags = array())
{
$stabilities = BasePackage::$stabilities;
$this->versionParser = new VersionParser;
$this->acceptableStabilities = array();
foreach (BasePackage::$stabilities as $stability => $value) {
if ($value <= BasePackage::$stabilities[$minimumStability]) {
$this->acceptableStabilities[$stability] = $value;
}
}
$this->stabilityFlags = $stabilityFlags;
}







public function addRepository(RepositoryInterface $repo, $rootAliases = array())
{
if ($repo instanceof CompositeRepository) {
$repos = $repo->getRepositories();
} else {
$repos = array($repo);
}

foreach ($repos as $repo) {
$this->repositories[] = $repo;

$exempt = $repo instanceof PlatformRepository || $repo instanceof InstalledRepositoryInterface;

if ($repo instanceof ComposerRepository && $repo->hasProviders()) {
$this->providerRepos[] = $repo;
$repo->setRootAliases($rootAliases);
$repo->resetPackageIds();
} elseif ($repo instanceof StreamableRepositoryInterface) {
foreach ($repo->getMinimalPackages() as $package) {
$name = $package['name'];
$version = $package['version'];
$stability = VersionParser::parseStability($version);


 $names = array(
$name => true,
);
if (isset($package['provide'])) {
foreach ($package['provide'] as $target => $constraint) {
$names[$target] = true;
}
}
if (isset($package['replace'])) {
foreach ($package['replace'] as $target => $constraint) {
$names[$target] = true;
}
}
$names = array_keys($names);

if ($exempt || $this->isPackageAcceptable($names, $stability)) {
$package['id'] = $this->id++;
$this->packages[] = $package;

foreach ($names as $provided) {
$this->packageByName[$provided][$package['id']] = $this->packages[$this->id - 2];
}


 unset($rootAliasData);
if (isset($rootAliases[$name][$version])) {
$rootAliasData = $rootAliases[$name][$version];
} elseif (isset($package['alias_normalized']) && isset($rootAliases[$name][$package['alias_normalized']])) {
$rootAliasData = $rootAliases[$name][$package['alias_normalized']];
}

if (isset($rootAliasData)) {
$alias = $package;
unset($alias['raw']);
$alias['version'] = $rootAliasData['alias_normalized'];
$alias['alias'] = $rootAliasData['alias'];
$alias['alias_of'] = $package['id'];
$alias['id'] = $this->id++;
$alias['root_alias'] = true;
$this->packages[] = $alias;

foreach ($names as $provided) {
$this->packageByName[$provided][$alias['id']] = $this->packages[$this->id - 2];
}
}


 if (isset($package['alias'])) {
$alias = $package;
unset($alias['raw']);
$alias['version'] = $package['alias_normalized'];
$alias['alias'] = $package['alias'];
$alias['alias_of'] = $package['id'];
$alias['id'] = $this->id++;
$this->packages[] = $alias;

foreach ($names as $provided) {
$this->packageByName[$provided][$alias['id']] = $this->packages[$this->id - 2];
}
}
}
}
} else {
foreach ($repo->getPackages() as $package) {
$names = $package->getNames();
$stability = $package->getStability();
if ($exempt || $this->isPackageAcceptable($names, $stability)) {
$package->setId($this->id++);
$this->packages[] = $package;

foreach ($names as $provided) {
$this->packageByName[$provided][] = $package;
}


 $name = $package->getName();
if (isset($rootAliases[$name][$package->getVersion()])) {
$alias = $rootAliases[$name][$package->getVersion()];
if ($package instanceof AliasPackage) {
$package = $package->getAliasOf();
}
$aliasPackage = new AliasPackage($package, $alias['alias_normalized'], $alias['alias']);
$aliasPackage->setRootPackageAlias(true);
$aliasPackage->setId($this->id++);

$package->getRepository()->addPackage($aliasPackage);
$this->packages[] = $aliasPackage;

foreach ($aliasPackage->getNames() as $name) {
$this->packageByName[$name][] = $aliasPackage;
}
}
}
}
}
}
}

public function getPriority(RepositoryInterface $repo)
{
$priority = array_search($repo, $this->repositories, true);

if (false === $priority) {
throw new \RuntimeException("Could not determine repository priority. The repository was not registered in the pool.");
}

return -$priority;
}







public function packageById($id)
{
return $this->ensurePackageIsLoaded($this->packages[$id - 1]);
}









public function whatProvides($name, LinkConstraintInterface $constraint = null)
{
if (isset($this->providerCache[$name][(string) $constraint])) {
return $this->providerCache[$name][(string) $constraint];
}

return $this->providerCache[$name][(string) $constraint] = $this->computeWhatProvides($name, $constraint);
}




private function computeWhatProvides($name, $constraint)
{
$candidates = array();

foreach ($this->providerRepos as $repo) {
foreach ($repo->whatProvides($this, $name) as $candidate) {
$candidates[] = $candidate;
if ($candidate->getId() < 1) {
$candidate->setId($this->id++);
$this->packages[$this->id - 2] = $candidate;
}
}
}

if (isset($this->packageByName[$name])) {
$candidates = array_merge($candidates, $this->packageByName[$name]);
}

$matches = $provideMatches = array();
$nameMatch = false;

foreach ($candidates as $candidate) {
switch ($this->match($candidate, $name, $constraint)) {
case self::MATCH_NONE:
break;

case self::MATCH_NAME:
$nameMatch = true;
break;

case self::MATCH:
$nameMatch = true;
$matches[] = $this->ensurePackageIsLoaded($candidate);
break;

case self::MATCH_PROVIDE:
$provideMatches[] = $this->ensurePackageIsLoaded($candidate);
break;

case self::MATCH_REPLACE:
$matches[] = $this->ensurePackageIsLoaded($candidate);
break;

default:
throw new \UnexpectedValueException('Unexpected match type');
}
}


 if ($nameMatch) {
return $matches;
}

return array_merge($matches, $provideMatches);
}

public function literalToPackage($literal)
{
$packageId = abs($literal);

return $this->packageById($packageId);
}

public function literalToString($literal)
{
return ($literal > 0 ? '+' : '-') . $this->literalToPackage($literal);
}

public function literalToPrettyString($literal, $installedMap)
{
$package = $this->literalToPackage($literal);

if (isset($installedMap[$package->getId()])) {
$prefix = ($literal > 0 ? 'keep' : 'remove');
} else {
$prefix = ($literal > 0 ? 'install' : 'don\'t install');
}

return $prefix.' '.$package->getPrettyString();
}

public function isPackageAcceptable($name, $stability)
{
foreach ((array) $name as $n) {

 if (!isset($this->stabilityFlags[$n]) && isset($this->acceptableStabilities[$stability])) {
return true;
}


 if (isset($this->stabilityFlags[$n]) && BasePackage::$stabilities[$stability] <= $this->stabilityFlags[$n]) {
return true;
}
}

return false;
}

private function ensurePackageIsLoaded($data)
{
if (is_array($data)) {
if (isset($data['alias_of'])) {
$aliasOf = $this->packageById($data['alias_of']);
$package = $this->packages[$data['id'] - 1] = $data['repo']->loadAliasPackage($data, $aliasOf);
$package->setRootPackageAlias(!empty($data['root_alias']));
} else {
$package = $this->packages[$data['id'] - 1] = $data['repo']->loadPackage($data);
}

foreach ($package->getNames() as $name) {
$this->packageByName[$name][$data['id']] = $package;
}
$package->setId($data['id']);

return $package;
}

return $data;
}










private function match($candidate, $name, LinkConstraintInterface $constraint = null)
{

 if (is_array($candidate)) {
$candidateName = $candidate['name'];
$candidateVersion = $candidate['version'];
} else {

 $candidateName = $candidate->getName();
$candidateVersion = $candidate->getVersion();
}

if ($candidateName === $name) {
if ($constraint === null) {
return self::MATCH;
}
return $constraint->matches(new VersionConstraint('==', $candidateVersion)) ? self::MATCH : self::MATCH_NAME;
}

if (is_array($candidate)) {
$provides = isset($candidate['provide'])
? $this->versionParser->parseLinks($candidateName, $candidateVersion, 'provides', $candidate['provide'])
: array();
$replaces = isset($candidate['replace'])
? $this->versionParser->parseLinks($candidateName, $candidateVersion, 'replaces', $candidate['replace'])
: array();
} else {
$provides = $candidate->getProvides();
$replaces = $candidate->getReplaces();
}


 if (isset($replaces[0]) || isset($provides[0])) {
foreach ($provides as $link) {
if ($link->getTarget() === $name && ($constraint === null || $constraint->matches($link->getConstraint()))) {
return self::MATCH_PROVIDE;
}
}

foreach ($replaces as $link) {
if ($link->getTarget() === $name && ($constraint === null || $constraint->matches($link->getConstraint()))) {
return self::MATCH_REPLACE;
}
}

return self::MATCH_NONE;
}

if (isset($provides[$name]) && ($constraint === null || $constraint->matches($provides[$name]->getConstraint()))) {
return self::MATCH_PROVIDE;
}

if (isset($replaces[$name]) && ($constraint === null || $constraint->matches($replaces[$name]->getConstraint()))) {
return self::MATCH_REPLACE;
}

return self::MATCH_NONE;
}
}
<?php











namespace Composer\DependencyResolver;




class Rule
{
const RULE_INTERNAL_ALLOW_UPDATE = 1;
const RULE_JOB_INSTALL = 2;
const RULE_JOB_REMOVE = 3;
const RULE_PACKAGE_CONFLICT = 6;
const RULE_PACKAGE_REQUIRES = 7;
const RULE_PACKAGE_OBSOLETES = 8;
const RULE_INSTALLED_PACKAGE_OBSOLETES = 9;
const RULE_PACKAGE_SAME_NAME = 10;
const RULE_PACKAGE_IMPLICIT_OBSOLETES = 11;
const RULE_LEARNED = 12;
const RULE_PACKAGE_ALIAS = 13;

protected $pool;

protected $disabled;
protected $literals;
protected $type;
protected $id;
protected $reason;
protected $reasonData;

protected $job;

protected $ruleHash;

public function __construct(Pool $pool, array $literals, $reason, $reasonData, $job = null)
{
$this->pool = $pool;


 sort($literals);

$this->literals = $literals;
$this->reason = $reason;
$this->reasonData = $reasonData;

$this->disabled = false;

$this->job = $job;

$this->type = -1;

$this->ruleHash = substr(md5(implode(',', $this->literals)), 0, 5);
}

public function getHash()
{
return $this->ruleHash;
}

public function setId($id)
{
$this->id = $id;
}

public function getId()
{
return $this->id;
}

public function getJob()
{
return $this->job;
}

public function getReason()
{
return $this->reason;
}

public function getReasonData()
{
return $this->reasonData;
}

public function getRequiredPackage()
{
if ($this->reason === self::RULE_JOB_INSTALL) {
return $this->reasonData;
}

if ($this->reason === self::RULE_PACKAGE_REQUIRES) {
return $this->reasonData->getTarget();
}
}









public function equals(Rule $rule)
{
if ($this->ruleHash !== $rule->ruleHash) {
return false;
}

if (count($this->literals) != count($rule->literals)) {
return false;
}

for ($i = 0, $n = count($this->literals); $i < $n; $i++) {
if ($this->literals[$i] !== $rule->literals[$i]) {
return false;
}
}

return true;
}

public function setType($type)
{
$this->type = $type;
}

public function getType()
{
return $this->type;
}

public function disable()
{
$this->disabled = true;
}

public function enable()
{
$this->disabled = false;
}

public function isDisabled()
{
return $this->disabled;
}

public function isEnabled()
{
return !$this->disabled;
}

public function getLiterals()
{
return $this->literals;
}

public function isAssertion()
{
return 1 === count($this->literals);
}

public function getPrettyString(array $installedMap = array())
{
$ruleText = '';
foreach ($this->literals as $i => $literal) {
if ($i != 0) {
$ruleText .= '|';
}
$ruleText .= $this->pool->literalToPrettyString($literal, $installedMap);
}

switch ($this->reason) {
case self::RULE_INTERNAL_ALLOW_UPDATE:
return $ruleText;

case self::RULE_JOB_INSTALL:
return "Install command rule ($ruleText)";

case self::RULE_JOB_REMOVE:
return "Remove command rule ($ruleText)";

case self::RULE_PACKAGE_CONFLICT:
$package1 = $this->pool->literalToPackage($this->literals[0]);
$package2 = $this->pool->literalToPackage($this->literals[1]);

return $package1->getPrettyString().' conflicts with '.$this->formatPackagesUnique(array($package2)).'.';

case self::RULE_PACKAGE_REQUIRES:
$literals = $this->literals;
$sourceLiteral = array_shift($literals);
$sourcePackage = $this->pool->literalToPackage($sourceLiteral);

$requires = array();
foreach ($literals as $literal) {
$requires[] = $this->pool->literalToPackage($literal);
}

$text = $this->reasonData->getPrettyString($sourcePackage);
if ($requires) {
$text .= ' -> satisfiable by ' . $this->formatPackagesUnique($requires) . '.';
} else {
$targetName = $this->reasonData->getTarget();


 if (0 === strpos($targetName, 'ext-')) {
$ext = substr($targetName, 4);
$error = extension_loaded($ext) ? 'has the wrong version ('.phpversion($ext).') installed' : 'is missing from your system';

$text .= ' -> the requested PHP extension '.$ext.' '.$error.'.';
} elseif (0 === strpos($targetName, 'lib-')) {

 $lib = substr($targetName, 4);

$text .= ' -> the requested linked library '.$lib.' has the wrong version installed or is missing from your system, make sure to have the extension providing it.';
} else {
$text .= ' -> no matching package found.';
}
}

return $text;

case self::RULE_PACKAGE_OBSOLETES:
return $ruleText;
case self::RULE_INSTALLED_PACKAGE_OBSOLETES:
return $ruleText;
case self::RULE_PACKAGE_SAME_NAME:
return 'Can only install one of: ' . $this->formatPackagesUnique($this->literals) . '.';
case self::RULE_PACKAGE_IMPLICIT_OBSOLETES:
return $ruleText;
case self::RULE_LEARNED:
return 'Conclusion: '.$ruleText;
case self::RULE_PACKAGE_ALIAS:
return $ruleText;
}
}

protected function formatPackagesUnique(array $packages)
{
$prepared = array();
foreach ($packages as $package) {
if (!is_object($package)) {
$package = $this->pool->literalToPackage($package);
}
$prepared[$package->getName()]['name'] = $package->getPrettyName();
$prepared[$package->getName()]['versions'][$package->getVersion()] = $package->getPrettyVersion();
}
foreach ($prepared as $name => $package) {
$prepared[$name] = $package['name'].'['.implode(', ', $package['versions']).']';
}

return implode(', ', $prepared);
}






public function __toString()
{
$result = ($this->isDisabled()) ? 'disabled(' : '(';

foreach ($this->literals as $i => $literal) {
if ($i != 0) {
$result .= '|';
}
$result .= $this->pool->literalToString($literal);
}

$result .= ')';

return $result;
}
}
<?php











namespace Composer\DependencyResolver;

use Composer\Package\PackageInterface;
use Composer\Package\AliasPackage;




class RuleSetGenerator
{
protected $policy;
protected $pool;
protected $rules;
protected $jobs;
protected $installedMap;

public function __construct(PolicyInterface $policy, Pool $pool)
{
$this->policy = $policy;
$this->pool = $pool;
}















protected function createRequireRule(PackageInterface $package, array $providers, $reason, $reasonData = null)
{
$literals = array(-$package->getId());

foreach ($providers as $provider) {

 if ($provider === $package) {
return null;
}
$literals[] = $provider->getId();
}

return new Rule($this->pool, $literals, $reason, $reasonData);
}













protected function createInstallOneOfRule(array $packages, $reason, $job)
{
$literals = array();
foreach ($packages as $package) {
$literals[] = $package->getId();
}

return new Rule($this->pool, $literals, $reason, $job['packageName'], $job);
}












protected function createRemoveRule(PackageInterface $package, $reason, $job)
{
return new Rule($this->pool, array(-$package->getId()), $reason, $job['packageName'], $job);
}















protected function createConflictRule(PackageInterface $issuer, PackageInterface $provider, $reason, $reasonData = null)
{

 if ($issuer === $provider) {
return null;
}

return new Rule($this->pool, array(-$issuer->getId(), -$provider->getId()), $reason, $reasonData);
}










private function addRule($type, Rule $newRule = null)
{
if (!$newRule || $this->rules->containsEqual($newRule)) {
return;
}

$this->rules->add($newRule, $type);
}

protected function addRulesForPackage(PackageInterface $package)
{
$workQueue = new \SplQueue;
$workQueue->enqueue($package);

while (!$workQueue->isEmpty()) {
$package = $workQueue->dequeue();
if (isset($this->addedMap[$package->getId()])) {
continue;
}

$this->addedMap[$package->getId()] = true;

foreach ($package->getRequires() as $link) {
$possibleRequires = $this->pool->whatProvides($link->getTarget(), $link->getConstraint());

$this->addRule(RuleSet::TYPE_PACKAGE, $rule = $this->createRequireRule($package, $possibleRequires, Rule::RULE_PACKAGE_REQUIRES, $link));

foreach ($possibleRequires as $require) {
$workQueue->enqueue($require);
}
}

foreach ($package->getConflicts() as $link) {
$possibleConflicts = $this->pool->whatProvides($link->getTarget(), $link->getConstraint());

foreach ($possibleConflicts as $conflict) {
$this->addRule(RuleSet::TYPE_PACKAGE, $this->createConflictRule($package, $conflict, Rule::RULE_PACKAGE_CONFLICT, $link));
}
}


 $isInstalled = (isset($this->installedMap[$package->getId()]));

foreach ($package->getReplaces() as $link) {
$obsoleteProviders = $this->pool->whatProvides($link->getTarget(), $link->getConstraint());

foreach ($obsoleteProviders as $provider) {
if ($provider === $package) {
continue;
}

if (!$this->obsoleteImpossibleForAlias($package, $provider)) {
$reason = ($isInstalled) ? Rule::RULE_INSTALLED_PACKAGE_OBSOLETES : Rule::RULE_PACKAGE_OBSOLETES;
$this->addRule(RuleSet::TYPE_PACKAGE, $this->createConflictRule($package, $provider, $reason, $link));
}
}
}

$obsoleteProviders = $this->pool->whatProvides($package->getName(), null);

foreach ($obsoleteProviders as $provider) {
if ($provider === $package) {
continue;
}

if (($package instanceof AliasPackage) && $package->getAliasOf() === $provider) {
$this->addRule(RuleSet::TYPE_PACKAGE, $rule = $this->createRequireRule($package, array($provider), Rule::RULE_PACKAGE_ALIAS, $package));
} elseif (!$this->obsoleteImpossibleForAlias($package, $provider)) {
$reason = ($package->getName() == $provider->getName()) ? Rule::RULE_PACKAGE_SAME_NAME : Rule::RULE_PACKAGE_IMPLICIT_OBSOLETES;
$this->addRule(RuleSet::TYPE_PACKAGE, $rule = $this->createConflictRule($package, $provider, $reason, $package));
}
}
}
}

protected function obsoleteImpossibleForAlias($package, $provider)
{
$packageIsAlias = $package instanceof AliasPackage;
$providerIsAlias = $provider instanceof AliasPackage;

$impossible = (
($packageIsAlias && $package->getAliasOf() === $provider) ||
($providerIsAlias && $provider->getAliasOf() === $package) ||
($packageIsAlias && $providerIsAlias && $provider->getAliasOf() === $package->getAliasOf())
);

return $impossible;
}







private function addRulesForUpdatePackages(PackageInterface $package)
{
$updates = $this->policy->findUpdatePackages($this->pool, $this->installedMap, $package);

foreach ($updates as $update) {
$this->addRulesForPackage($update);
}
}

protected function addRulesForJobs()
{
foreach ($this->jobs as $job) {
switch ($job['cmd']) {
case 'install':
if ($job['packages']) {
foreach ($job['packages'] as $package) {
if (!isset($this->installedMap[$package->getId()])) {
$this->addRulesForPackage($package);
}
}

$rule = $this->createInstallOneOfRule($job['packages'], Rule::RULE_JOB_INSTALL, $job);
$this->addRule(RuleSet::TYPE_JOB, $rule);
}
break;
case 'remove':

 
 foreach ($job['packages'] as $package) {
$rule = $this->createRemoveRule($package, Rule::RULE_JOB_REMOVE, $job);
$this->addRule(RuleSet::TYPE_JOB, $rule);
}
break;
}
}
}

public function getRulesFor($jobs, $installedMap)
{
$this->jobs = $jobs;
$this->rules = new RuleSet;
$this->installedMap = $installedMap;

foreach ($this->installedMap as $package) {
$this->addRulesForPackage($package);
$this->addRulesForUpdatePackages($package);
}

$this->addRulesForJobs();

return $this->rules;
}
}
<?php











namespace Composer\DependencyResolver;




class DebugSolver extends Solver
{
protected function printDecisionMap()
{
echo "\nDecisionMap: \n";
foreach ($this->decisionMap as $packageId => $level) {
if ($packageId === 0) {
continue;
}
if ($level > 0) {
echo '    +' . $this->pool->packageById($packageId)."\n";
} elseif ($level < 0) {
echo '    -' . $this->pool->packageById($packageId)."\n";
} else {
echo '    ?' . $this->pool->packageById($packageId)."\n";
}
}
echo "\n";
}

protected function printDecisionQueue()
{
echo "DecisionQueue: \n";
foreach ($this->decisionQueue as $i => $literal) {
echo '    ' . $this->pool->literalToString($literal) . ' ' . $this->decisionQueueWhy[$i]." level ".$this->decisionMap[abs($literal)]."\n";
}
echo "\n";
}

protected function printWatches()
{
echo "\nWatches:\n";
foreach ($this->watches as $literalId => $watch) {
echo '  '.$this->literalFromId($literalId)."\n";
$queue = array(array('    ', $watch));

while (!empty($queue)) {
list($indent, $watch) = array_pop($queue);

echo $indent.$watch;

if ($watch) {
echo ' [id='.$watch->getId().',watch1='.$this->literalFromId($watch->watch1).',watch2='.$this->literalFromId($watch->watch2)."]";
}

echo "\n";

if ($watch && ($watch->next1 == $watch || $watch->next2 == $watch)) {
if ($watch->next1 == $watch) {
echo $indent."    1 *RECURSION*";
}
if ($watch->next2 == $watch) {
echo $indent."    2 *RECURSION*";
}
} elseif ($watch && ($watch->next1 || $watch->next2)) {
$indent = str_replace(array('1', '2'), ' ', $indent);

array_push($queue, array($indent.'    2 ', $watch->next2));
array_push($queue, array($indent.'    1 ', $watch->next1));
}
}

echo "\n";
}
}
}
<?php











namespace Composer\DependencyResolver;




class RuleSetIterator implements \Iterator
{
protected $rules;
protected $types;

protected $currentOffset;
protected $currentType;
protected $currentTypeOffset;

public function __construct(array $rules)
{
$this->rules = $rules;
$this->types = array_keys($rules);
sort($this->types);

$this->rewind();
}

public function current()
{
return $this->rules[$this->currentType][$this->currentOffset];
}

public function key()
{
return $this->currentType;
}

public function next()
{
$this->currentOffset++;

if (!isset($this->rules[$this->currentType])) {
return;
}

if ($this->currentOffset >= sizeof($this->rules[$this->currentType])) {
$this->currentOffset = 0;

do {
$this->currentTypeOffset++;

if (!isset($this->types[$this->currentTypeOffset])) {
$this->currentType = -1;
break;
}

$this->currentType = $this->types[$this->currentTypeOffset];
} while (isset($this->types[$this->currentTypeOffset]) && !sizeof($this->rules[$this->currentType]));
}
}

public function rewind()
{
$this->currentOffset = 0;

$this->currentTypeOffset = -1;
$this->currentType = -1;

do {
$this->currentTypeOffset++;

if (!isset($this->types[$this->currentTypeOffset])) {
$this->currentType = -1;
break;
}

$this->currentType = $this->types[$this->currentTypeOffset];
} while (isset($this->types[$this->currentTypeOffset]) && !sizeof($this->rules[$this->currentType]));
}

public function valid()
{
return isset($this->rules[$this->currentType])
&& isset($this->rules[$this->currentType][$this->currentOffset]);
}
}
<?php











namespace Composer\DependencyResolver;









class RuleWatchChain extends \SplDoublyLinkedList
{
protected $offset = 0;






public function seek($offset)
{
$this->rewind();
for ($i = 0; $i < $offset; $i++, $this->next());
}









public function remove()
{
$offset = $this->key();
$this->offsetUnset($offset);
$this->seek($offset);
}
}
<?php











namespace Composer\DependencyResolver;

use Composer\Repository\RepositoryInterface;




class Solver
{
const BRANCH_LITERALS = 0;
const BRANCH_LEVEL = 1;

protected $policy;
protected $pool;
protected $installed;
protected $rules;
protected $ruleSetGenerator;
protected $updateAll;

protected $addedMap = array();
protected $updateMap = array();
protected $watchGraph;
protected $decisions;
protected $installedMap;

protected $propagateIndex;
protected $branches = array();
protected $problems = array();
protected $learnedPool = array();

public function __construct(PolicyInterface $policy, Pool $pool, RepositoryInterface $installed)
{
$this->policy = $policy;
$this->pool = $pool;
$this->installed = $installed;
$this->ruleSetGenerator = new RuleSetGenerator($policy, $pool);
}


 private function makeAssertionRuleDecisions()
{
$decisionStart = count($this->decisions) - 1;

$rulesCount = count($this->rules);
for ($ruleIndex = 0; $ruleIndex < $rulesCount; $ruleIndex++) {
$rule = $this->rules->ruleById($ruleIndex);

if (!$rule->isAssertion() || $rule->isDisabled()) {
continue;
}

$literals = $rule->getLiterals();
$literal = $literals[0];

if (!$this->decisions->decided(abs($literal))) {
$this->decisions->decide($literal, 1, $rule);
continue;
}

if ($this->decisions->satisfy($literal)) {
continue;
}


 if (RuleSet::TYPE_LEARNED === $rule->getType()) {
$rule->disable();
continue;
}

$conflict = $this->decisions->decisionRule($literal);

if ($conflict && RuleSet::TYPE_PACKAGE === $conflict->getType()) {

$problem = new Problem($this->pool);

$problem->addRule($rule);
$problem->addRule($conflict);
$this->disableProblem($rule);
$this->problems[] = $problem;
continue;
}


 $problem = new Problem($this->pool);
$problem->addRule($rule);
$problem->addRule($conflict);


 
 foreach ($this->rules->getIteratorFor(RuleSet::TYPE_JOB) as $assertRule) {
if ($assertRule->isDisabled() || !$assertRule->isAssertion()) {
continue;
}

$assertRuleLiterals = $assertRule->getLiterals();
$assertRuleLiteral = $assertRuleLiterals[0];

if (abs($literal) !== abs($assertRuleLiteral)) {
continue;
}

$problem->addRule($assertRule);
$this->disableProblem($assertRule);
}
$this->problems[] = $problem;

$this->decisions->resetToOffset($decisionStart);
$ruleIndex = -1;
}
}

protected function setupInstalledMap()
{
$this->installedMap = array();
foreach ($this->installed->getPackages() as $package) {
$this->installedMap[$package->getId()] = $package;
}

foreach ($this->jobs as $job) {
switch ($job['cmd']) {
case 'update':
foreach ($job['packages'] as $package) {
if (isset($this->installedMap[$package->getId()])) {
$this->updateMap[$package->getId()] = true;
}
}
break;

case 'update-all':
foreach ($this->installedMap as $package) {
$this->updateMap[$package->getId()] = true;
}
break;

case 'install':
if (!$job['packages']) {
$problem = new Problem($this->pool);
$problem->addRule(new Rule($this->pool, array(), null, null, $job));
$this->problems[] = $problem;
}
break;
}
}
}

public function solve(Request $request)
{
$this->jobs = $request->getJobs();

$this->setupInstalledMap();

$this->decisions = new Decisions($this->pool);

$this->rules = $this->ruleSetGenerator->getRulesFor($this->jobs, $this->installedMap);
$this->watchGraph = new RuleWatchGraph;

foreach ($this->rules as $rule) {
$this->watchGraph->insert(new RuleWatchNode($rule));
}


$this->makeAssertionRuleDecisions();

$this->runSat(true);


 foreach ($this->installedMap as $packageId => $void) {
if ($this->decisions->undecided($packageId)) {
$this->decisions->decide(-$packageId, 1, null);
}
}

if ($this->problems) {
throw new SolverProblemsException($this->problems, $this->installedMap);
}

$transaction = new Transaction($this->policy, $this->pool, $this->installedMap, $this->decisions);

return $transaction->getOperations();
}

protected function literalFromId($id)
{
$package = $this->pool->packageById(abs($id));

return new Literal($package, $id > 0);
}










protected function propagate($level)
{
while ($this->decisions->validOffset($this->propagateIndex)) {
$decision = $this->decisions->atOffset($this->propagateIndex);

$conflict = $this->watchGraph->propagateLiteral(
$decision[Decisions::DECISION_LITERAL],
$level,
$this->decisions
);

$this->propagateIndex++;

if ($conflict) {
return $conflict;
}
}

return null;
}




private function revert($level)
{
while (!$this->decisions->isEmpty()) {
$literal = $this->decisions->lastLiteral();

if ($this->decisions->undecided($literal)) {
break;
}

$decisionLevel = $this->decisions->decisionLevel($literal);

if ($decisionLevel <= $level) {
break;
}

$this->decisions->revertLast();
$this->propagateIndex = count($this->decisions);
}

while (!empty($this->branches) && $this->branches[count($this->branches) - 1][self::BRANCH_LEVEL] >= $level) {
array_pop($this->branches);
}
}
















private function setPropagateLearn($level, $literal, $disableRules, Rule $rule)
{
$level++;

$this->decisions->decide($literal, $level, $rule);

while (true) {
$rule = $this->propagate($level);

if (!$rule) {
break;
}

if ($level == 1) {
return $this->analyzeUnsolvable($rule, $disableRules);
}


 list($learnLiteral, $newLevel, $newRule, $why) = $this->analyze($level, $rule);

if ($newLevel <= 0 || $newLevel >= $level) {
throw new SolverBugException(
"Trying to revert to invalid level ".(int) $newLevel." from level ".(int) $level."."
);
} elseif (!$newRule) {
throw new SolverBugException(
"No rule was learned from analyzing $rule at level $level."
);
}

$level = $newLevel;

$this->revert($level);

$this->rules->add($newRule, RuleSet::TYPE_LEARNED);

$this->learnedWhy[$newRule->getId()] = $why;

$ruleNode = new RuleWatchNode($newRule);
$ruleNode->watch2OnHighest($this->decisions);
$this->watchGraph->insert($ruleNode);

$this->decisions->decide($learnLiteral, $level, $newRule);
}

return $level;
}

private function selectAndInstall($level, array $decisionQueue, $disableRules, Rule $rule)
{

 $literals = $this->policy->selectPreferedPackages($this->pool, $this->installedMap, $decisionQueue, $rule->getRequiredPackage());

$selectedLiteral = array_shift($literals);


 if (count($literals)) {
$this->branches[] = array($literals, $level);
}

return $this->setPropagateLearn($level, $selectedLiteral, $disableRules, $rule);
}

protected function analyze($level, $rule)
{
$analyzedRule = $rule;
$ruleLevel = 1;
$num = 0;
$l1num = 0;
$seen = array();
$learnedLiterals = array(null);

$decisionId = count($this->decisions);

$this->learnedPool[] = array();

while (true) {
$this->learnedPool[count($this->learnedPool) - 1][] = $rule;

foreach ($rule->getLiterals() as $literal) {

 if ($this->decisions->satisfy($literal)) {
continue;
}

if (isset($seen[abs($literal)])) {
continue;
}
$seen[abs($literal)] = true;

$l = $this->decisions->decisionLevel($literal);

if (1 === $l) {
$l1num++;
} elseif ($level === $l) {
$num++;
} else {

 $learnedLiterals[] = $literal;

if ($l > $ruleLevel) {
$ruleLevel = $l;
}
}
}

$l1retry = true;
while ($l1retry) {
$l1retry = false;

if (!$num && !--$l1num) {

 break 2;
}

while (true) {
if ($decisionId <= 0) {
throw new SolverBugException(
"Reached invalid decision id $decisionId while looking through $rule for a literal present in the analyzed rule $analyzedRule."
);
}

$decisionId--;

$decision = $this->decisions->atOffset($decisionId);
$literal = $decision[Decisions::DECISION_LITERAL];

if (isset($seen[abs($literal)])) {
break;
}
}

unset($seen[abs($literal)]);

if ($num && 0 === --$num) {
$learnedLiterals[0] = -abs($literal);

if (!$l1num) {
break 2;
}

foreach ($learnedLiterals as $i => $learnedLiteral) {
if ($i !== 0) {
unset($seen[abs($learnedLiteral)]);
}
}

 $l1num++;
$l1retry = true;
}
}

$decision = $this->decisions->atOffset($decisionId);
$rule = $decision[Decisions::DECISION_REASON];
}

$why = count($this->learnedPool) - 1;

if (!$learnedLiterals[0]) {
throw new SolverBugException(
"Did not find a learnable literal in analyzed rule $analyzedRule."
);
}

$newRule = new Rule($this->pool, $learnedLiterals, Rule::RULE_LEARNED, $why);

return array($learnedLiterals[0], $ruleLevel, $newRule, $why);
}

private function analyzeUnsolvableRule($problem, $conflictRule)
{
$why = $conflictRule->getId();

if ($conflictRule->getType() == RuleSet::TYPE_LEARNED) {
$learnedWhy = $this->learnedWhy[$why];
$problemRules = $this->learnedPool[$learnedWhy];

foreach ($problemRules as $problemRule) {
$this->analyzeUnsolvableRule($problem, $problemRule);
}

return;
}

if ($conflictRule->getType() == RuleSet::TYPE_PACKAGE) {

 return;
}

$problem->nextSection();
$problem->addRule($conflictRule);
}

private function analyzeUnsolvable($conflictRule, $disableRules)
{
$problem = new Problem($this->pool);
$problem->addRule($conflictRule);

$this->analyzeUnsolvableRule($problem, $conflictRule);

$this->problems[] = $problem;

$seen = array();
$literals = $conflictRule->getLiterals();

foreach ($literals as $literal) {

 if ($this->decisions->satisfy($literal)) {
continue;
}
$seen[abs($literal)] = true;
}

foreach ($this->decisions as $decision) {
$literal = $decision[Decisions::DECISION_LITERAL];


 if (!isset($seen[abs($literal)])) {
continue;
}

$why = $decision[Decisions::DECISION_REASON];

$problem->addRule($why);
$this->analyzeUnsolvableRule($problem, $why);

$literals = $why->getLiterals();

foreach ($literals as $literal) {

 if ($this->decisions->satisfy($literal)) {
continue;
}
$seen[abs($literal)] = true;
}
}

if ($disableRules) {
foreach ($this->problems[count($this->problems) - 1] as $reason) {
$this->disableProblem($reason['rule']);
}

$this->resetSolver();

return 1;
}

return 0;
}

private function disableProblem($why)
{
$job = $why->getJob();

if (!$job) {
$why->disable();

return;
}


 foreach ($this->rules as $rule) {
if ($job === $rule->getJob()) {
$rule->disable();
}
}
}

private function resetSolver()
{
$this->decisions->reset();

$this->propagateIndex = 0;
$this->branches = array();

$this->enableDisableLearnedRules();
$this->makeAssertionRuleDecisions();
}








private function enableDisableLearnedRules()
{
foreach ($this->rules->getIteratorFor(RuleSet::TYPE_LEARNED) as $rule) {
$why = $this->learnedWhy[$rule->getId()];
$problemRules = $this->learnedPool[$why];

$foundDisabled = false;
foreach ($problemRules as $problemRule) {
if ($problemRule->isDisabled()) {
$foundDisabled = true;
break;
}
}

if ($foundDisabled && $rule->isEnabled()) {
$rule->disable();
} elseif (!$foundDisabled && $rule->isDisabled()) {
$rule->enable();
}
}
}

private function runSat($disableRules = true)
{
$this->propagateIndex = 0;


 
 
 
 
 
 
 
 

$decisionQueue = array();
$decisionSupplementQueue = array();
$disableRules = array();

$level = 1;
$systemLevel = $level + 1;
$installedPos = 0;

while (true) {

if (1 === $level) {
$conflictRule = $this->propagate($level);
if (null !== $conflictRule) {
if ($this->analyzeUnsolvable($conflictRule, $disableRules)) {
continue;
}

return;
}
}


 if ($level < $systemLevel) {
$iterator = $this->rules->getIteratorFor(RuleSet::TYPE_JOB);
foreach ($iterator as $rule) {
if ($rule->isEnabled()) {
$decisionQueue = array();
$noneSatisfied = true;

foreach ($rule->getLiterals() as $literal) {
if ($this->decisions->satisfy($literal)) {
$noneSatisfied = false;
break;
}
if ($literal > 0 && $this->decisions->undecided($literal)) {
$decisionQueue[] = $literal;
}
}

if ($noneSatisfied && count($decisionQueue)) {

 
 if (count($this->installed) != count($this->updateMap)) {
$prunedQueue = array();
foreach ($decisionQueue as $literal) {
if (isset($this->installedMap[abs($literal)])) {
$prunedQueue[] = $literal;
if (isset($this->updateMap[abs($literal)])) {
$prunedQueue = $decisionQueue;
break;
}
}
}
$decisionQueue = $prunedQueue;
}
}

if ($noneSatisfied && count($decisionQueue)) {

$oLevel = $level;
$level = $this->selectAndInstall($level, $decisionQueue, $disableRules, $rule);

if (0 === $level) {
return;
}
if ($level <= $oLevel) {
break;
}
}
}
}

$systemLevel = $level + 1;


 $iterator->next();
if ($iterator->valid()) {
continue;
}
}

if ($level < $systemLevel) {
$systemLevel = $level;
}

for ($i = 0, $n = 0; $n < count($this->rules); $i++, $n++) {
if ($i == count($this->rules)) {
$i = 0;
}

$rule = $this->rules->ruleById($i);
$literals = $rule->getLiterals();

if ($rule->isDisabled()) {
continue;
}

$decisionQueue = array();


 
 
 
 
 
 foreach ($literals as $literal) {
if ($literal <= 0) {
if (!$this->decisions->decidedInstall(abs($literal))) {
continue 2; 
 }
} else {
if ($this->decisions->decidedInstall(abs($literal))) {
continue 2; 
 }
if ($this->decisions->undecided(abs($literal))) {
$decisionQueue[] = $literal;
}
}
}


 if (count($decisionQueue) < 2) {
continue;
}

$oLevel = $level;
$level = $this->selectAndInstall($level, $decisionQueue, $disableRules, $rule);

if (0 === $level) {
return;
}


 $n = -1;
}

if ($level < $systemLevel) {
continue;
}


 if (count($this->branches)) {

$lastLiteral = null;
$lastLevel = null;
$lastBranchIndex = 0;
$lastBranchOffset = 0;
$l = 0;

for ($i = count($this->branches) - 1; $i >= 0; $i--) {
list($literals, $l) = $this->branches[$i];

foreach ($literals as $offset => $literal) {
if ($literal && $literal > 0 && $this->decisions->decisionLevel($literal) > $l + 1) {
$lastLiteral = $literal;
$lastBranchIndex = $i;
$lastBranchOffset = $offset;
$lastLevel = $l;
}
}
}

if ($lastLiteral) {
unset($this->branches[$lastBranchIndex][self::BRANCH_LITERALS][$lastBranchOffset]);
array_values($this->branches[$lastBranchIndex][self::BRANCH_LITERALS]);

$level = $lastLevel;
$this->revert($level);

$why = $this->decisions->lastReason();

$oLevel = $level;
$level = $this->setPropagateLearn($level, $lastLiteral, $disableRules, $why);

if ($level == 0) {
return;
}

continue;
}
}

break;
}
}
}
<?php











namespace Composer\DependencyResolver;

use Composer\Package\LinkConstraint\LinkConstraintInterface;




class Request
{
protected $jobs;
protected $pool;

public function __construct(Pool $pool)
{
$this->pool = $pool;
$this->jobs = array();
}

public function install($packageName, LinkConstraintInterface $constraint = null)
{
$this->addJob($packageName, 'install', $constraint);
}

public function update($packageName, LinkConstraintInterface $constraint = null)
{
$this->addJob($packageName, 'update', $constraint);
}

public function remove($packageName, LinkConstraintInterface $constraint = null)
{
$this->addJob($packageName, 'remove', $constraint);
}

protected function addJob($packageName, $cmd, LinkConstraintInterface $constraint = null)
{
$packageName = strtolower($packageName);
$packages = $this->pool->whatProvides($packageName, $constraint);

$this->jobs[] = array(
'packages' => $packages,
'cmd' => $cmd,
'packageName' => $packageName,
'constraint' => $constraint,
);
}

public function updateAll()
{
$this->jobs[] = array('cmd' => 'update-all', 'packages' => array());
}

public function getJobs()
{
return $this->jobs;
}
}
<?php











namespace Composer\DependencyResolver;






class Problem
{




protected $reasonSeen;





protected $reasons = array();

protected $section = 0;

protected $pool;

public function __construct(Pool $pool)
{
$this->pool = $pool;
}






public function addRule(Rule $rule)
{
$this->addReason($rule->getId(), array(
'rule' => $rule,
'job' => $rule->getJob(),
));
}






public function getReasons()
{
return $this->reasons;
}







public function getPrettyString(array $installedMap = array())
{
$reasons = call_user_func_array('array_merge', array_reverse($this->reasons));

if (count($reasons) === 1) {
reset($reasons);
$reason = current($reasons);

$rule = $reason['rule'];
$job = $reason['job'];

if ($job && $job['cmd'] === 'install' && empty($job['packages'])) {

 if (0 === stripos($job['packageName'], 'ext-')) {
$ext = substr($job['packageName'], 4);
$error = extension_loaded($ext) ? 'has the wrong version ('.phpversion($ext).') installed' : 'is missing from your system';

return "\n    - The requested PHP extension ".$job['packageName'].$this->constraintToText($job['constraint']).' '.$error.'.';
}


 if (0 === stripos($job['packageName'], 'lib-')) {
if (strtolower($job['packageName']) === 'lib-icu') {
$error = extension_loaded('intl') ? 'has the wrong version installed, try upgrading the intl extension.' : 'is missing from your system, make sure the intl extension is loaded.';

return "\n    - The requested linked library ".$job['packageName'].$this->constraintToText($job['constraint']).' '.$error;
}

return "\n    - The requested linked library ".$job['packageName'].$this->constraintToText($job['constraint']).' has the wrong version installed or is missing from your system, make sure to load the extension providing it.';
}

if (!preg_match('{^[A-Za-z0-9_./-]+$}', $job['packageName'])) {
$illegalChars = preg_replace('{[A-Za-z0-9_./-]+}', '', $job['packageName']);

return "\n    - The requested package ".$job['packageName'].' could not be found, it looks like its name is invalid, "'.$illegalChars.'" is not allowed in package names.';
}

if (!$this->pool->whatProvides($job['packageName'])) {
return "\n    - The requested package ".$job['packageName'].' could not be found in any version, there may be a typo in the package name.';
}

return "\n    - The requested package ".$job['packageName'].$this->constraintToText($job['constraint']).' could not be found.';
}
}

$messages = array();

foreach ($reasons as $reason) {
$rule = $reason['rule'];
$job = $reason['job'];

if ($job) {
$messages[] = $this->jobToText($job);
} elseif ($rule) {
if ($rule instanceof Rule) {
$messages[] = $rule->getPrettyString($installedMap);
}
}
}

return "\n    - ".implode("\n    - ", $messages);
}







protected function addReason($id, $reason)
{
if (!isset($this->reasonSeen[$id])) {
$this->reasonSeen[$id] = true;
$this->reasons[$this->section][] = $reason;
}
}

public function nextSection()
{
$this->section++;
}







protected function jobToText($job)
{
switch ($job['cmd']) {
case 'install':
if (!$job['packages']) {
return 'No package found to satisfy install request for '.$job['packageName'].$this->constraintToText($job['constraint']);
}

return 'Installation request for '.$job['packageName'].$this->constraintToText($job['constraint']).' -> satisfiable by '.$this->getPackageList($job['packages']).'.';
case 'update':
return 'Update request for '.$job['packageName'].$this->constraintToText($job['constraint']).'.';
case 'remove':
return 'Removal request for '.$job['packageName'].$this->constraintToText($job['constraint']).'';
}

return 'Job(cmd='.$job['cmd'].', target='.$job['packageName'].', packages=['.$this->getPackageList($job['packages']).'])';
}

protected function getPackageList($packages)
{
$prepared = array();
foreach ($packages as $package) {
$prepared[$package->getName()]['name'] = $package->getPrettyName();
$prepared[$package->getName()]['versions'][$package->getVersion()] = $package->getPrettyVersion();
}
foreach ($prepared as $name => $package) {
$prepared[$name] = $package['name'].'['.implode(', ', $package['versions']).']';
}

return implode(', ', $prepared);
}







protected function constraintToText($constraint)
{
return ($constraint) ? ' '.$constraint->getPrettyString() : '';
}
}
<?php











namespace Composer\DependencyResolver;











class RuleWatchGraph
{
protected $watchChains = array();













public function insert(RuleWatchNode $node)
{
if ($node->getRule()->isAssertion()) {
return;
}

foreach (array($node->watch1, $node->watch2) as $literal) {
if (!isset($this->watchChains[$literal])) {
$this->watchChains[$literal] = new RuleWatchChain;
}

$this->watchChains[$literal]->unshift($node);
}
}
























public function propagateLiteral($decidedLiteral, $level, $decisions)
{

 
 
 $literal = -$decidedLiteral;

if (!isset($this->watchChains[$literal])) {
return null;
}

$chain = $this->watchChains[$literal];

$chain->rewind();
while ($chain->valid()) {
$node = $chain->current();
$otherWatch = $node->getOtherWatch($literal);

if (!$node->getRule()->isDisabled() && !$decisions->satisfy($otherWatch)) {
$ruleLiterals = $node->getRule()->getLiterals();

$alternativeLiterals = array_filter($ruleLiterals, function ($ruleLiteral) use ($literal, $otherWatch, $decisions) {
return $literal !== $ruleLiteral &&
$otherWatch !== $ruleLiteral &&
!$decisions->conflict($ruleLiteral);
});

if ($alternativeLiterals) {
reset($alternativeLiterals);
$this->moveWatch($literal, current($alternativeLiterals), $node);
continue;
}

if ($decisions->conflict($otherWatch)) {
return $node->getRule();
}

$decisions->decide($otherWatch, $level, $node->getRule());
}

$chain->next();
}

return null;
}










protected function moveWatch($fromLiteral, $toLiteral, $node)
{
if (!isset($this->watchChains[$toLiteral])) {
$this->watchChains[$toLiteral] = new RuleWatchChain;
}

$node->moveWatch($fromLiteral, $toLiteral);
$this->watchChains[$fromLiteral]->remove();
$this->watchChains[$toLiteral]->unshift($node);
}
}
<?php











namespace Composer\Config;







interface ConfigSourceInterface
{






public function addRepository($name, $config);






public function removeRepository($name);







public function addConfigSetting($name, $value);






public function removeConfigSetting($name);








public function addLink($type, $name, $value);







public function removeLink($type, $name);
}
<?php











namespace Composer\Config;

use Composer\Json\JsonFile;
use Composer\Json\JsonManipulator;







class JsonConfigSource implements ConfigSourceInterface
{
private $file;
private $manipulator;






public function __construct(JsonFile $file)
{
$this->file = $file;
}




public function addRepository($name, $config)
{
$this->manipulateJson('addRepository', $name, $config, function (&$config, $repo, $repoConfig) {
$config['repositories'][$repo] = $repoConfig;
});
}




public function removeRepository($name)
{
$this->manipulateJson('removeRepository', $name, function (&$config, $repo) {
unset($config['repositories'][$repo]);
});
}




public function addConfigSetting($name, $value)
{
$this->manipulateJson('addConfigSetting', $name, $value, function (&$config, $key, $val) {
$config['config'][$key] = $val;
});
}




public function removeConfigSetting($name)
{
$this->manipulateJson('removeConfigSetting', $name, function (&$config, $key) {
unset($config['config'][$key]);
});
}




public function addLink($type, $name, $value)
{
$this->manipulateJson('addLink', $type, $name, $value, function (&$config, $type, $name, $value) {
$config[$type][$name] = $value;
});
}




public function removeLink($type, $name)
{
$this->manipulateJson('removeSubNode', $type, $name, function (&$config, $type, $name) {
unset($config[$type][$name]);
});
}

protected function manipulateJson($method, $args, $fallback)
{
$args = func_get_args();

 array_shift($args);
$fallback = array_pop($args);

if ($this->file->exists()) {
$contents = file_get_contents($this->file->getPath());
} else {
$contents = "{\n    \"config\": {\n    }\n}\n";
}
$manipulator = new JsonManipulator($contents);

$newFile = !$this->file->exists();


 if (call_user_func_array(array($manipulator, $method), $args)) {
file_put_contents($this->file->getPath(), $manipulator->getContents());
} else {

 $config = $this->file->read();
array_unshift($args, $config);
call_user_func_array($fallback, $args);
$this->file->write($config);
}

if ($newFile) {
chmod($this->file->getPath(), 0600);
}
}
}
<?php











namespace Composer;

use Composer\Config\JsonConfigSource;
use Composer\Json\JsonFile;
use Composer\IO\IOInterface;
use Composer\Package\Archiver;
use Composer\Repository\ComposerRepository;
use Composer\Repository\RepositoryManager;
use Composer\Util\ProcessExecutor;
use Composer\Util\RemoteFilesystem;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Composer\Script\EventDispatcher;
use Composer\Autoload\AutoloadGenerator;
use Composer\Package\Version\VersionParser;








class Factory
{




public static function createConfig()
{

 $home = getenv('COMPOSER_HOME');
$cacheDir = getenv('COMPOSER_CACHE_DIR');
if (!$home) {
if (defined('PHP_WINDOWS_VERSION_MAJOR')) {
if (!getenv('APPDATA')) {
throw new \RuntimeException('The APPDATA or COMPOSER_HOME environment variable must be set for composer to run correctly');
}
$home = strtr(getenv('APPDATA'), '\\', '/') . '/Composer';
} else {
if (!getenv('HOME')) {
throw new \RuntimeException('The HOME or COMPOSER_HOME environment variable must be set for composer to run correctly');
}
$home = rtrim(getenv('HOME'), '/') . '/.composer';
}
}
if (!$cacheDir) {
if (defined('PHP_WINDOWS_VERSION_MAJOR')) {
if ($cacheDir = getenv('LOCALAPPDATA')) {
$cacheDir .= '/Composer';
} else {
$cacheDir = $home . '/cache';
}
$cacheDir = strtr($cacheDir, '\\', '/');
} else {
$cacheDir = $home.'/cache';
}
}


 
 
 foreach (array($home, $cacheDir) as $dir) {
if (!file_exists($dir . '/.htaccess')) {
if (!is_dir($dir)) {
@mkdir($dir, 0777, true);
}
@file_put_contents($dir . '/.htaccess', 'Deny from all');
}
}

$config = new Config();


 $config->merge(array('config' => array('home' => $home, 'cache-dir' => $cacheDir)));

$file = new JsonFile($home.'/config.json');
if ($file->exists()) {
$config->merge($file->read());
}
$config->setConfigSource(new JsonConfigSource($file));


 $legacyPaths = array(
'cache-repo-dir' => array('/cache' => '/http*', '/cache.svn' => '/*', '/cache.github' => '/*'),
'cache-vcs-dir' => array('/cache.git' => '/*', '/cache.hg' => '/*'),
'cache-files-dir' => array('/cache.files' => '/*'),
);
foreach ($legacyPaths as $key => $oldPaths) {
foreach ($oldPaths as $oldPath => $match) {
$dir = $config->get($key);
if ('/cache.github' === $oldPath) {
$dir .= '/github.com';
}
$oldPath = $config->get('home').$oldPath;
$oldPathMatch = $oldPath . $match;
if (is_dir($oldPath) && $dir !== $oldPath) {
if (!is_dir($dir)) {
if (!@mkdir($dir, 0777, true)) {
continue;
}
}
if (is_array($children = glob($oldPathMatch))) {
foreach ($children as $child) {
@rename($child, $dir.'/'.basename($child));
}
}
@rmdir($oldPath);
}
}
}

return $config;
}

public static function getComposerFile()
{
return trim(getenv('COMPOSER')) ?: './composer.json';
}

public static function createAdditionalStyles()
{
return array(
'highlight' => new OutputFormatterStyle('red'),
'warning' => new OutputFormatterStyle('black', 'yellow'),
);
}

public static function createDefaultRepositories(IOInterface $io = null, Config $config = null, RepositoryManager $rm = null)
{
$repos = array();

if (!$config) {
$config = static::createConfig();
}
if (!$rm) {
if (!$io) {
throw new \InvalidArgumentException('This function requires either an IOInterface or a RepositoryManager');
}
$factory = new static;
$rm = $factory->createRepositoryManager($io, $config);
}

foreach ($config->getRepositories() as $index => $repo) {
if (!is_array($repo)) {
throw new \UnexpectedValueException('Repository '.$index.' ('.json_encode($repo).') should be an array, '.gettype($repo).' given');
}
if (!isset($repo['type'])) {
throw new \UnexpectedValueException('Repository '.$index.' ('.json_encode($repo).') must have a type defined');
}
$name = is_int($index) && isset($repo['url']) ? preg_replace('{^https?://}i', '', $repo['url']) : $index;
while (isset($repos[$name])) {
$name .= '2';
}
$repos[$name] = $rm->createRepository($repo['type'], $repo);
}

return $repos;
}











public function createComposer(IOInterface $io, $localConfig = null)
{

 if (null === $localConfig) {
$localConfig = static::getComposerFile();
}

if (is_string($localConfig)) {
$composerFile = $localConfig;
$file = new JsonFile($localConfig, new RemoteFilesystem($io));

if (!$file->exists()) {
if ($localConfig === './composer.json' || $localConfig === 'composer.json') {
$message = 'Composer could not find a composer.json file in '.getcwd();
} else {
$message = 'Composer could not find the config file: '.$localConfig;
}
$instructions = 'To initialize a project, please create a composer.json file as described in the http://getcomposer.org/ "Getting Started" section';
throw new \InvalidArgumentException($message.PHP_EOL.$instructions);
}

$file->validateSchema(JsonFile::LAX_SCHEMA);
$localConfig = $file->read();
}


 $config = static::createConfig();
$config->merge($localConfig);
$io->loadConfiguration($config);

$vendorDir = $config->get('vendor-dir');
$binDir = $config->get('bin-dir');


 ProcessExecutor::setTimeout((int) $config->get('process-timeout'));


 $rm = $this->createRepositoryManager($io, $config);


 $this->addLocalRepository($rm, $vendorDir);


 $parser = new VersionParser;
$loader = new Package\Loader\RootPackageLoader($rm, $config, $parser, new ProcessExecutor($io));
$package = $loader->load($localConfig);


 $dm = $this->createDownloadManager($io, $config);


 $im = $this->createInstallationManager();


 $composer = new Composer();
$composer->setConfig($config);
$composer->setPackage($package);
$composer->setRepositoryManager($rm);
$composer->setDownloadManager($dm);
$composer->setInstallationManager($im);


 $dispatcher = new EventDispatcher($composer, $io);
$composer->setEventDispatcher($dispatcher);


 $generator = new AutoloadGenerator($dispatcher);
$composer->setAutoloadGenerator($generator);


 $this->createDefaultInstallers($im, $composer, $io);


 $this->purgePackages($rm, $im);


 if (isset($composerFile)) {
$lockFile = "json" === pathinfo($composerFile, PATHINFO_EXTENSION)
? substr($composerFile, 0, -4).'lock'
: $composerFile . '.lock';
$locker = new Package\Locker($io, new JsonFile($lockFile, new RemoteFilesystem($io)), $rm, $im, md5_file($composerFile));
$composer->setLocker($locker);
}

return $composer;
}






protected function createRepositoryManager(IOInterface $io, Config $config)
{
$rm = new RepositoryManager($io, $config);
$rm->setRepositoryClass('composer', 'Composer\Repository\ComposerRepository');
$rm->setRepositoryClass('vcs', 'Composer\Repository\VcsRepository');
$rm->setRepositoryClass('package', 'Composer\Repository\PackageRepository');
$rm->setRepositoryClass('pear', 'Composer\Repository\PearRepository');
$rm->setRepositoryClass('git', 'Composer\Repository\VcsRepository');
$rm->setRepositoryClass('svn', 'Composer\Repository\VcsRepository');
$rm->setRepositoryClass('hg', 'Composer\Repository\VcsRepository');
$rm->setRepositoryClass('artifact', 'Composer\Repository\ArtifactRepository');

return $rm;
}





protected function addLocalRepository(RepositoryManager $rm, $vendorDir)
{
$rm->setLocalRepository(new Repository\InstalledFilesystemRepository(new JsonFile($vendorDir.'/composer/installed.json')));
}






public function createDownloadManager(IOInterface $io, Config $config)
{
$cache = null;
if ($config->get('cache-files-ttl') > 0) {
$cache = new Cache($io, $config->get('cache-files-dir'), 'a-z0-9_./');
}

$dm = new Downloader\DownloadManager();
switch ($config->get('preferred-install')) {
case 'dist':
$dm->setPreferDist(true);
break;
case 'source':
$dm->setPreferSource(true);
break;
case 'auto':
default:

 break;
}

$dm->setDownloader('git', new Downloader\GitDownloader($io, $config));
$dm->setDownloader('svn', new Downloader\SvnDownloader($io, $config));
$dm->setDownloader('hg', new Downloader\HgDownloader($io, $config));
$dm->setDownloader('zip', new Downloader\ZipDownloader($io, $config, $cache));
$dm->setDownloader('tar', new Downloader\TarDownloader($io, $config, $cache));
$dm->setDownloader('phar', new Downloader\PharDownloader($io, $config, $cache));
$dm->setDownloader('file', new Downloader\FileDownloader($io, $config, $cache));

return $dm;
}







public function createArchiveManager(Config $config, Downloader\DownloadManager $dm = null)
{
if (null === $dm) {
$io = new IO\NullIO();
$io->loadConfiguration($config);
$dm = $this->createDownloadManager($io, $config);
}

$am = new Archiver\ArchiveManager($dm);
$am->addArchiver(new Archiver\PharArchiver);

return $am;
}




protected function createInstallationManager()
{
return new Installer\InstallationManager();
}






protected function createDefaultInstallers(Installer\InstallationManager $im, Composer $composer, IOInterface $io)
{
$im->addInstaller(new Installer\LibraryInstaller($io, $composer, null));
$im->addInstaller(new Installer\PearInstaller($io, $composer, 'pear-library'));
$im->addInstaller(new Installer\InstallerInstaller($io, $composer));
$im->addInstaller(new Installer\MetapackageInstaller($io));
}





protected function purgePackages(Repository\RepositoryManager $rm, Installer\InstallationManager $im)
{
$repo = $rm->getLocalRepository();
foreach ($repo->getPackages() as $package) {
if (!$im->isPackageInstalled($repo, $package)) {
$repo->removePackage($package);
}
}
}







public static function create(IOInterface $io, $config = null)
{
$factory = new static();

return $factory->createComposer($io, $config);
}
}
<?php











namespace Composer\Util;

use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;





class Filesystem
{
private $processExecutor;

public function __construct(ProcessExecutor $executor = null)
{
$this->processExecutor = $executor ?: new ProcessExecutor();
}

public function remove($file)
{
if (is_dir($file)) {
return $this->removeDirectory($file);
}

if (file_exists($file)) {
return unlink($file);
}

return false;
}










public function removeDirectory($directory)
{
if (!is_dir($directory)) {
return true;
}

if (!function_exists('proc_open')) {
return $this->removeDirectoryPhp($directory);
}

if (defined('PHP_WINDOWS_VERSION_BUILD')) {
$cmd = sprintf('rmdir /S /Q %s', escapeshellarg(realpath($directory)));
} else {
$cmd = sprintf('rm -rf %s', escapeshellarg($directory));
}

$result = $this->getProcess()->execute($cmd, $output) === 0;


 clearstatcache();

return $result && !is_dir($directory);
}











public function removeDirectoryPhp($directory)
{
$it = new RecursiveDirectoryIterator($directory, RecursiveDirectoryIterator::SKIP_DOTS);
$ri = new RecursiveIteratorIterator($it, RecursiveIteratorIterator::CHILD_FIRST);

foreach ($ri as $file) {
if ($file->isDir()) {
rmdir($file->getPathname());
} else {
unlink($file->getPathname());
}
}

return rmdir($directory);
}

public function ensureDirectoryExists($directory)
{
if (!is_dir($directory)) {
if (file_exists($directory)) {
throw new \RuntimeException(
$directory.' exists and is not a directory.'
);
}
if (!@mkdir($directory, 0777, true)) {
throw new \RuntimeException(
$directory.' does not exist and could not be created.'
);
}
}
}










public function copyThenRemove($source, $target)
{
$it = new RecursiveDirectoryIterator($source, RecursiveDirectoryIterator::SKIP_DOTS);
$ri = new RecursiveIteratorIterator($it, RecursiveIteratorIterator::SELF_FIRST);

if (!file_exists($target)) {
mkdir($target, 0777, true);
}

foreach ($ri as $file) {
$targetPath = $target . DIRECTORY_SEPARATOR . $ri->getSubPathName();
if ($file->isDir()) {
mkdir($targetPath);
} else {
copy($file->getPathname(), $targetPath);
}
}

$this->removeDirectoryPhp($source);
}

public function rename($source, $target)
{
if (true === @rename($source, $target)) {
return;
}

if (!function_exists('proc_open')) {
return $this->copyThenRemove($source, $target);
}

if (defined('PHP_WINDOWS_VERSION_BUILD')) {

 $command = sprintf('xcopy %s %s /E /I /Q', escapeshellarg($source), escapeshellarg($target));
$result = $this->processExecutor->execute($command, $output);


 clearstatcache();

if (0 === $result) {
$this->remove($source);

return;
}
} else {

 
 $command = sprintf('mv %s %s', escapeshellarg($source), escapeshellarg($target));
$result = $this->processExecutor->execute($command, $output);


 clearstatcache();

if (0 === $result) {
return;
}
}

return $this->copyThenRemove($source, $target);
}










public function findShortestPath($from, $to, $directories = false)
{
if (!$this->isAbsolutePath($from) || !$this->isAbsolutePath($to)) {
throw new \InvalidArgumentException(sprintf('$from (%s) and $to (%s) must be absolute paths.', $from, $to));
}

$from = lcfirst($this->normalizePath($from));
$to = lcfirst($this->normalizePath($to));

if ($directories) {
$from .= '/dummy_file';
}

if (dirname($from) === dirname($to)) {
return './'.basename($to);
}

$commonPath = $to.'/';
while (strpos($from, $commonPath) !== 0 && '/' !== $commonPath && !preg_match('{^[a-z]:/?$}i', $commonPath) && '.' !== $commonPath) {
$commonPath = strtr(dirname($commonPath), '\\', '/');
}

if (0 !== strpos($from, $commonPath) || '/' === $commonPath || '.' === $commonPath) {
return $to;
}

$commonPath = rtrim($commonPath, '/') . '/';
$sourcePathDepth = substr_count(substr($from, strlen($commonPath)), '/');
$commonPathCode = str_repeat('../', $sourcePathDepth);

return ($commonPathCode . substr($to, strlen($commonPath))) ?: './';
}










public function findShortestPathCode($from, $to, $directories = false)
{
if (!$this->isAbsolutePath($from) || !$this->isAbsolutePath($to)) {
throw new \InvalidArgumentException(sprintf('$from (%s) and $to (%s) must be absolute paths.', $from, $to));
}

$from = lcfirst($this->normalizePath($from));
$to = lcfirst($this->normalizePath($to));

if ($from === $to) {
return $directories ? '__DIR__' : '__FILE__';
}

$commonPath = $to.'/';
while (strpos($from, $commonPath) !== 0 && '/' !== $commonPath && !preg_match('{^[a-z]:/?$}i', $commonPath) && '.' !== $commonPath) {
$commonPath = strtr(dirname($commonPath), '\\', '/');
}

if (0 !== strpos($from, $commonPath) || '/' === $commonPath || '.' === $commonPath) {
return var_export($to, true);
}

$commonPath = rtrim($commonPath, '/') . '/';
if (strpos($to, $from.'/') === 0) {
return '__DIR__ . '.var_export(substr($to, strlen($from)), true);
}
$sourcePathDepth = substr_count(substr($from, strlen($commonPath)), '/') + $directories;
$commonPathCode = str_repeat('dirname(', $sourcePathDepth).'__DIR__'.str_repeat(')', $sourcePathDepth);
$relTarget = substr($to, strlen($commonPath));

return $commonPathCode . (strlen($relTarget) ? '.' . var_export('/' . $relTarget, true) : '');
}







public function isAbsolutePath($path)
{
return substr($path, 0, 1) === '/' || substr($path, 1, 1) === ':';
}









public function size($path)
{
if (!file_exists($path)) {
throw new \RuntimeException("$path does not exist.");
}
if (is_dir($path)) {
return $this->directorySize($path);
}

return filesize($path);
}








public function normalizePath($path)
{
$parts = array();
$path = strtr($path, '\\', '/');
$prefix = '';
$absolute = false;

if (preg_match('{^([0-9a-z]+:(?://(?:[a-z]:)?)?)}i', $path, $match)) {
$prefix = $match[1];
$path = substr($path, strlen($prefix));
}

if (substr($path, 0, 1) === '/') {
$absolute = true;
$path = substr($path, 1);
}

$up = false;
foreach (explode('/', $path) as $chunk) {
if ('..' === $chunk && ($absolute || $up)) {
array_pop($parts);
$up = !(empty($parts) || '..' === end($parts));
} elseif ('.' !== $chunk && '' !== $chunk) {
$parts[] = $chunk;
$up = '..' !== $chunk;
}
}

return $prefix.($absolute ? '/' : '').implode('/', $parts);
}

protected function directorySize($directory)
{
$it = new RecursiveDirectoryIterator($directory, RecursiveDirectoryIterator::SKIP_DOTS);
$ri = new RecursiveIteratorIterator($it, RecursiveIteratorIterator::CHILD_FIRST);

$size = 0;
foreach ($ri as $file) {
if ($file->isFile()) {
$size += $file->getSize();
}
}

return $size;
}

protected function getProcess()
{
return new ProcessExecutor;
}
}
<?php











namespace Composer\Util;

use Composer\IO\IOInterface;
use Composer\Config;
use Composer\Downloader\TransportException;
use Composer\Json\JsonFile;




class GitHub
{
protected $io;
protected $config;
protected $process;
protected $remoteFilesystem;









public function __construct(IOInterface $io, Config $config, ProcessExecutor $process = null, RemoteFilesystem $remoteFilesystem = null)
{
$this->io = $io;
$this->config = $config;
$this->process = $process ?: new ProcessExecutor;
$this->remoteFilesystem = $remoteFilesystem ?: new RemoteFilesystem($io);
}







public function authorizeOAuth($originUrl)
{
if ('github.com' !== $originUrl) {
return false;
}


 if (0 === $this->process->execute('git config github.accesstoken', $output)) {
$this->io->setAuthentication($originUrl, trim($output), 'x-oauth-basic');

return true;
}

return false;
}










public function authorizeOAuthInteractively($originUrl, $message = null)
{
$attemptCounter = 0;

if ($message) {
$this->io->write($message);
}
$this->io->write('The credentials will be swapped for an OAuth token stored in '.$this->config->get('home').'/config.json, your password will not be stored');
$this->io->write('To revoke access to this token you can visit https://github.com/settings/applications');
while ($attemptCounter++ < 5) {
try {
$username = $this->io->ask('Username: ');
$password = $this->io->askAndHideAnswer('Password: ');
$this->io->setAuthentication($originUrl, $username, $password);


 $appName = 'Composer';
if (0 === $this->process->execute('hostname', $output)) {
$appName .= ' on ' . trim($output);
}

$contents = JsonFile::parseJson($this->remoteFilesystem->getContents($originUrl, 'https://api.github.com/authorizations', false, array(
'http' => array(
'method' => 'POST',
'follow_location' => false,
'header' => "Content-Type: application/json\r\n",
'content' => json_encode(array(
'scopes' => array('repo'),
'note' => $appName,
'note_url' => 'https://getcomposer.org/',
)),
)
)));
} catch (TransportException $e) {
if (in_array($e->getCode(), array(403, 401))) {
$this->io->write('Invalid credentials.');
continue;
}

throw $e;
}

$this->io->setAuthentication($originUrl, $contents['token'], 'x-oauth-basic');


 $githubTokens = $this->config->get('github-oauth') ?: array();
$githubTokens[$originUrl] = $contents['token'];
$this->config->getConfigSource()->addConfigSetting('github-oauth', $githubTokens);

return true;
}

throw new \RuntimeException("Invalid GitHub credentials 5 times in a row, aborting.");
}
}
<?php











namespace Composer\Util;

use Symfony\Component\Process\Process;
use Composer\IO\IOInterface;




class ProcessExecutor
{
protected static $timeout = 300;

protected $captureOutput;
protected $errorOutput;
protected $io;

public function __construct(IOInterface $io = null)
{
$this->io = $io;
}










public function execute($command, &$output = null, $cwd = null)
{
if ($this->io && $this->io->isDebug()) {
$safeCommand = preg_replace('{(://[^:/\s]+:)[^@\s/]+}i', '$1****', $command);
$this->io->write('Executing command ('.($cwd ?: 'CWD').'): '.$safeCommand);
}


 
 if (null === $cwd && defined('PHP_WINDOWS_VERSION_BUILD') && false !== strpos($command, 'git') && getcwd()) {
$cwd = realpath(getcwd());
}

$this->captureOutput = count(func_get_args()) > 1;
$this->errorOutput = null;
$process = new Process($command, $cwd, null, null, static::getTimeout());

$callback = is_callable($output) ? $output : array($this, 'outputHandler');
$process->run($callback);

if ($this->captureOutput && !is_callable($output)) {
$output = $process->getOutput();
}

$this->errorOutput = $process->getErrorOutput();

return $process->getExitCode();
}

public function splitLines($output)
{
$output = trim($output);

return ((string) $output === '') ? array() : preg_split('{\r?\n}', $output);
}






public function getErrorOutput()
{
return $this->errorOutput;
}

public function outputHandler($type, $buffer)
{
if ($this->captureOutput) {
return;
}

echo $buffer;
}

public static function getTimeout()
{
return static::$timeout;
}

public static function setTimeout($timeout)
{
static::$timeout = $timeout;
}
}
<?php











namespace Composer\Util;

use Composer\IO\IOInterface;




class Git
{
public function cleanEnv()
{
if (ini_get('safe_mode') && false === strpos(ini_get('safe_mode_allowed_env_vars'), 'GIT_ASKPASS')) {
throw new \RuntimeException('safe_mode is enabled and safe_mode_allowed_env_vars does not contain GIT_ASKPASS, can not set env var. You can disable safe_mode with "-dsafe_mode=0" when running composer');
}


 if (getenv('GIT_ASKPASS') !== 'echo') {
putenv('GIT_ASKPASS=echo');
}


 if (getenv('GIT_DIR')) {
putenv('GIT_DIR');
}
if (getenv('GIT_WORK_TREE')) {
putenv('GIT_WORK_TREE');
}
}
}
<?php











namespace Composer\Util;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Downloader\TransportException;





class RemoteFilesystem
{
private $io;
private $firstCall;
private $bytesMax;
private $originUrl;
private $fileUrl;
private $fileName;
private $retry;
private $progress;
private $lastProgress;
private $options;







public function __construct(IOInterface $io, $options = array())
{
$this->io = $io;
$this->options = $options;
}












public function copy($originUrl, $fileUrl, $fileName, $progress = true, $options = array())
{
return $this->get($originUrl, $fileUrl, $options, $fileName, $progress);
}











public function getContents($originUrl, $fileUrl, $progress = true, $options = array())
{
return $this->get($originUrl, $fileUrl, $options, null, $progress);
}















protected function get($originUrl, $fileUrl, $additionalOptions = array(), $fileName = null, $progress = true)
{
$this->bytesMax = 0;
$this->originUrl = $originUrl;
$this->fileUrl = $fileUrl;
$this->fileName = $fileName;
$this->progress = $progress;
$this->lastProgress = null;


 if (preg_match('{^https?://(.+):(.+)@([^/]+)}i', $fileUrl, $match)) {
$this->io->setAuthentication($originUrl, urldecode($match[1]), urldecode($match[2]));
}

$options = $this->getOptionsForUrl($originUrl, $additionalOptions);

if ($this->io->isDebug()) {
$this->io->write((substr($fileUrl, 0, 4) === 'http' ? 'Downloading ' : 'Reading ') . $fileUrl);
}
if (isset($options['github-token'])) {
$fileUrl .= (false === strpos($fileUrl, '?') ? '?' : '&') . 'access_token='.$options['github-token'];
unset($options['github-token']);
}
$ctx = StreamContextFactory::getContext($fileUrl, $options, array('notification' => array($this, 'callbackGet')));

if ($this->progress) {
$this->io->write("    Downloading: <comment>connection...</comment>", false);
}

$errorMessage = '';
$errorCode = 0;
$result = false;
set_error_handler(function ($code, $msg) use (&$errorMessage) {
if ($errorMessage) {
$errorMessage .= "\n";
}
$errorMessage .= preg_replace('{^file_get_contents\(.*?\): }', '', $msg);
});
try {
$result = file_get_contents($fileUrl, false, $ctx);
} catch (\Exception $e) {
if ($e instanceof TransportException && !empty($http_response_header[0])) {
$e->setHeaders($http_response_header);
}
}
if ($errorMessage && !ini_get('allow_url_fopen')) {
$errorMessage = 'allow_url_fopen must be enabled in php.ini ('.$errorMessage.')';
}
restore_error_handler();
if (isset($e) && !$this->retry) {
throw $e;
}


 if (!empty($http_response_header[0]) && preg_match('{^HTTP/\S+ ([45]\d\d)}i', $http_response_header[0], $match)) {
$result = false;
$errorCode = $match[1];
}


 if ($result && extension_loaded('zlib') && substr($fileUrl, 0, 4) === 'http') {
$decode = false;
foreach ($http_response_header as $header) {
if (preg_match('{^content-encoding: *gzip *$}i', $header)) {
$decode = true;
continue;
} elseif (preg_match('{^HTTP/}i', $header)) {
$decode = false;
}
}

if ($decode) {
if (version_compare(PHP_VERSION, '5.4.0', '>=')) {
$result = zlib_decode($result);
} else {

 $result = file_get_contents('compress.zlib://data:application/octet-stream;base64,'.base64_encode($result));
}
}
}

if ($this->progress) {
$this->io->overwrite("    Downloading: <comment>100%</comment>");
}


 if (false !== $result && null !== $fileName) {
if ('' === $result) {
throw new TransportException('"'.$this->fileUrl.'" appears broken, and returned an empty 200 response');
}

$errorMessage = '';
set_error_handler(function ($code, $msg) use (&$errorMessage) {
if ($errorMessage) {
$errorMessage .= "\n";
}
$errorMessage .= preg_replace('{^file_put_contents\(.*?\): }', '', $msg);
});
$result = (bool) file_put_contents($fileName, $result);
restore_error_handler();
if (false === $result) {
throw new TransportException('The "'.$this->fileUrl.'" file could not be written to '.$fileName.': '.$errorMessage);
}
}

if ($this->retry) {
$this->retry = false;

return $this->get($this->originUrl, $this->fileUrl, $additionalOptions, $this->fileName, $this->progress);
}

if (false === $result) {
$e = new TransportException('The "'.$this->fileUrl.'" file could not be downloaded: '.$errorMessage, $errorCode);
if (!empty($http_response_header[0])) {
$e->setHeaders($http_response_header);
}

throw $e;
}

return $result;
}












protected function callbackGet($notificationCode, $severity, $message, $messageCode, $bytesTransferred, $bytesMax)
{
switch ($notificationCode) {
case STREAM_NOTIFY_FAILURE:
case STREAM_NOTIFY_AUTH_REQUIRED:
if (401 === $messageCode) {
if (!$this->io->isInteractive()) {
$message = "The '" . $this->fileUrl . "' URL required authentication.\nYou must be using the interactive console";

throw new TransportException($message, 401);
}

$this->io->overwrite('    Authentication required (<info>'.parse_url($this->fileUrl, PHP_URL_HOST).'</info>):');
$username = $this->io->ask('      Username: ');
$password = $this->io->askAndHideAnswer('      Password: ');
$this->io->setAuthentication($this->originUrl, $username, $password);

$this->retry = true;
throw new TransportException('RETRY');
break;
}

if ($notificationCode === STREAM_NOTIFY_AUTH_REQUIRED) {
break;
}

throw new TransportException('The "'.$this->fileUrl.'" file could not be downloaded ('.trim($message).')', $messageCode);

case STREAM_NOTIFY_AUTH_RESULT:
if (403 === $messageCode) {
$message = "The '" . $this->fileUrl . "' URL could not be accessed: " . $message;

throw new TransportException($message, 403);
}
break;

case STREAM_NOTIFY_FILE_SIZE_IS:
if ($this->bytesMax < $bytesMax) {
$this->bytesMax = $bytesMax;
}
break;

case STREAM_NOTIFY_PROGRESS:
if ($this->bytesMax > 0 && $this->progress) {
$progression = 0;

if ($this->bytesMax > 0) {
$progression = round($bytesTransferred / $this->bytesMax * 100);
}

if ((0 === $progression % 5) && $progression !== $this->lastProgress) {
$this->lastProgress = $progression;
$this->io->overwrite("    Downloading: <comment>$progression%</comment>", false);
}
}
break;

default:
break;
}
}

protected function getOptionsForUrl($originUrl, $additionalOptions)
{
$headers = array(
sprintf(
'User-Agent: Composer/%s (%s; %s; PHP %s.%s.%s)',
Composer::VERSION === 'ef072ff8c008f35d90fe3460608bdb1365a8d7a7' ? 'source' : Composer::VERSION,
php_uname('s'),
php_uname('r'),
PHP_MAJOR_VERSION,
PHP_MINOR_VERSION,
PHP_RELEASE_VERSION
)
);

if (extension_loaded('zlib')) {
$headers[] = 'Accept-Encoding: gzip';
}

$options = array_replace_recursive($this->options, $additionalOptions);

if ($this->io->hasAuthentication($originUrl)) {
$auth = $this->io->getAuthentication($originUrl);
if ('github.com' === $originUrl && 'x-oauth-basic' === $auth['password']) {
$options['github-token'] = $auth['username'];
} else {
$authStr = base64_encode($auth['username'] . ':' . $auth['password']);
$headers[] = 'Authorization: Basic '.$authStr;
}
}

if (isset($options['http']['header']) && !is_array($options['http']['header'])) {
$options['http']['header'] = explode("\r\n", trim($options['http']['header'], "\r\n"));
}
foreach ($headers as $header) {
$options['http']['header'][] = $header;
}

return $options;
}
}
<?php











namespace Composer\Util;







final class StreamContextFactory
{









public static function getContext($url, array $defaultOptions = array(), array $defaultParams = array())
{
$options = array('http' => array(

 'follow_location' => 1,
'max_redirects' => 20,
));


 if (!empty($_SERVER['HTTP_PROXY']) || !empty($_SERVER['http_proxy'])) {

 $proxy = parse_url(!empty($_SERVER['http_proxy']) ? $_SERVER['http_proxy'] : $_SERVER['HTTP_PROXY']);
}

if (!empty($proxy)) {
$proxyURL = isset($proxy['scheme']) ? $proxy['scheme'] . '://' : '';
$proxyURL .= isset($proxy['host']) ? $proxy['host'] : '';

if (isset($proxy['port'])) {
$proxyURL .= ":" . $proxy['port'];
} elseif ('http://' == substr($proxyURL, 0, 7)) {
$proxyURL .= ":80";
} elseif ('https://' == substr($proxyURL, 0, 8)) {
$proxyURL .= ":443";
}


 $proxyURL = str_replace(array('http://', 'https://'), array('tcp://', 'ssl://'), $proxyURL);

if (0 === strpos($proxyURL, 'ssl:') && !extension_loaded('openssl')) {
throw new \RuntimeException('You must enable the openssl extension to use a proxy over https');
}

$options['http']['proxy'] = $proxyURL;


 if (!empty($_SERVER['no_proxy']) && parse_url($url, PHP_URL_HOST)) {
$pattern = new NoProxyPattern($_SERVER['no_proxy']);
if ($pattern->test($url)) {
unset($options['http']['proxy']);
}
}


 if (!empty($options['http']['proxy'])) {

 switch (parse_url($url, PHP_URL_SCHEME)) {
case 'http': 
 $reqFullUriEnv = getenv('HTTP_PROXY_REQUEST_FULLURI');
if ($reqFullUriEnv === false || $reqFullUriEnv === '' || (strtolower($reqFullUriEnv) !== 'false' && (bool) $reqFullUriEnv)) {
$options['http']['request_fulluri'] = true;
}
break;
case 'https': 
 $reqFullUriEnv = getenv('HTTPS_PROXY_REQUEST_FULLURI');
if ($reqFullUriEnv === false || $reqFullUriEnv === '' || (strtolower($reqFullUriEnv) !== 'false' && (bool) $reqFullUriEnv)) {
$options['http']['request_fulluri'] = true;
}
break;
}

if (isset($proxy['user'])) {
$auth = $proxy['user'];
if (isset($proxy['pass'])) {
$auth .= ':' . $proxy['pass'];
}
$auth = base64_encode($auth);


 if (isset($defaultOptions['http']['header'])) {
if (is_string($defaultOptions['http']['header'])) {
$defaultOptions['http']['header'] = array($defaultOptions['http']['header']);
}
$defaultOptions['http']['header'][] = "Proxy-Authorization: Basic {$auth}";
} else {
$options['http']['header'] = array("Proxy-Authorization: Basic {$auth}");
}
}
}
}

$options = array_replace_recursive($options, $defaultOptions);

if (isset($options['http']['header'])) {
$options['http']['header'] = self::fixHttpHeaderField($options['http']['header']);
}

return stream_context_create($options, $defaultParams);
}











private static function fixHttpHeaderField($header)
{
if (!is_array($header)) {
$header = explode("\r\n", $header);
}
uasort($header, function ($el) {
return preg_match('{^content-type}i', $el) ? 1 : -1;
});

return $header;
}
}
<?php











namespace Composer\Util;

use Composer\Package\Loader\ArrayLoader;
use Composer\Package\Loader\ValidatingArrayLoader;
use Composer\Package\Loader\InvalidPackageException;
use Composer\Json\JsonValidationException;
use Composer\IO\IOInterface;
use Composer\Json\JsonFile;







class ConfigValidator
{
private $io;

public function __construct(IOInterface $io)
{
$this->io = $io;
}








public function validate($file)
{
$errors = array();
$publishErrors = array();
$warnings = array();


 $laxValid = false;
try {
$json = new JsonFile($file, new RemoteFilesystem($this->io));
$manifest = $json->read();

$json->validateSchema(JsonFile::LAX_SCHEMA);
$laxValid = true;
$json->validateSchema();
} catch (JsonValidationException $e) {
foreach ($e->getErrors() as $message) {
if ($laxValid) {
$publishErrors[] = $message;
} else {
$errors[] = $message;
}
}
} catch (\Exception $e) {
$errors[] = $e->getMessage();

return array($errors, $publishErrors, $warnings);
}


 if (!empty($manifest['license'])) {

 if (is_array($manifest['license'])) {
foreach ($manifest['license'] as $key => $license) {
if ('proprietary' === $license) {
unset($manifest['license'][$key]);
}
}
}

$licenseValidator = new SpdxLicenseIdentifier();
if ('proprietary' !== $manifest['license'] && array() !== $manifest['license'] && !$licenseValidator->validate($manifest['license'])) {
$warnings[] = sprintf(
'License %s is not a valid SPDX license identifier, see http://www.spdx.org/licenses/ if you use an open license.'
."\nIf the software is closed-source, you may use \"proprietary\" as license.",
json_encode($manifest['license'])
);
}
} else {
$warnings[] = 'No license specified, it is recommended to do so. For closed-source software you may use "proprietary" as license.';
}

if (!empty($manifest['name']) && preg_match('{[A-Z]}', $manifest['name'])) {
$suggestName = preg_replace('{(?:([a-z])([A-Z])|([A-Z])([A-Z][a-z]))}', '\\1\\3-\\2\\4', $manifest['name']);
$suggestName = strtolower($suggestName);

$warnings[] = sprintf(
'Name "%s" does not match the best practice (e.g. lower-cased/with-dashes). We suggest using "%s" instead. As such you will not be able to submit it to Packagist.',
$manifest['name'],
$suggestName
);
}

try {
$loader = new ValidatingArrayLoader(new ArrayLoader());
if (!isset($manifest['version'])) {
$manifest['version'] = '1.0.0';
}
if (!isset($manifest['name'])) {
$manifest['name'] = 'dummy/dummy';
}
$loader->load($manifest);
} catch (InvalidPackageException $e) {
$errors = array_merge($errors, $e->getErrors());
}

$warnings = array_merge($warnings, $loader->getWarnings());

return array($errors, $publishErrors, $warnings);
}
}
<?php











namespace Composer\Util;






class ErrorHandler
{











public static function handle($level, $message, $file, $line)
{

 if (!error_reporting()) {
return;
}

if (ini_get('xdebug.scream')) {
$message .= "\n\nWarning: You have xdebug.scream enabled, the warning above may be".
"\na legitimately suppressed error that you were not supposed to see.";
}

throw new \ErrorException($message, 0, $level, $file, $line);
}






public static function register()
{
set_error_handler(array(__CLASS__, 'handle'));
}
}
<?php











namespace Composer\Util;

use Composer\Json\JsonFile;







class SpdxLicenseIdentifier
{



private $identifiers;

public function __construct()
{
$this->initIdentifiers();
}







public function validate($license)
{
if (is_array($license)) {
$count = count($license);
if ($count !== count(array_filter($license, 'is_string'))) {
throw new \InvalidArgumentException('Array of strings expected.');
}
$license = $count > 1 ? '('.implode(' or ', $license).')' : (string) reset($license);
}
if (!is_string($license)) {
throw new \InvalidArgumentException(sprintf(
'Array or String expected, %s given.', gettype($license)
));
}

return $this->isValidLicenseString($license);
}




private function initIdentifiers()
{
$jsonFile = new JsonFile(__DIR__ . '/../../../res/spdx-identifier.json');
$this->identifiers = $jsonFile->read();
}






private function isValidLicenseIdentifier($identifier)
{
return in_array($identifier, $this->identifiers);
}







private function isValidLicenseString($license)
{
$tokens = array(
'po' => '\(',
'pc' => '\)',
'op' => '(?:or|and)',
'lix' => '(?:NONE|NOASSERTION)',
'lir' => 'LicenseRef-\d+',
'lic' => '[-+_.a-zA-Z0-9]{3,}',
'ws' => '\s+',
'_' => '.',
);

$next = function () use ($license, $tokens) {
static $offset = 0;

if ($offset >= strlen($license)) {
return null;
}

foreach ($tokens as $name => $token) {
if (false === $r = preg_match('{' . $token . '}', $license, $matches, PREG_OFFSET_CAPTURE, $offset)) {
throw new \RuntimeException('Pattern for token %s failed (regex error).', $name);
}
if ($r === 0) {
continue;
}
if ($matches[0][1] !== $offset) {
continue;
}
$offset += strlen($matches[0][0]);

return array($name, $matches[0][0]);
}

throw new \RuntimeException('At least the last pattern needs to match, but it did not (dot-match-all is missing?).');
};

$open = 0;
$require = 1;
$lastop = null;

while (list($token, $string) = $next()) {
switch ($token) {
case 'po':
if ($open || !$require) {
return false;
}
$open = 1;
break;
case 'pc':
if ($open !== 1 || $require || !$lastop) {
return false;
}
$open = 2;
break;
case 'op':
if ($require || !$open) {
return false;
}
$lastop || $lastop = $string;
if ($lastop !== $string) {
return false;
}
$require = 1;
break;
case 'lix':
if ($open) {
return false;
}
goto lir;
case 'lic':
if (!$this->isValidLicenseIdentifier($string)) {
return false;
}

 case 'lir':
lir:
if (!$require) {
return false;
}
$require = 0;
break;
case 'ws':
break;
case '_':
return false;
default:
throw new \RuntimeException(sprintf('Unparsed token: %s.', print_r($token, true)));
}
}

return !($open % 2 || $require);
}
}
<?php











namespace Composer\Util;




class NoProxyPattern
{



protected $rules = array();




public function __construct($pattern)
{
$this->rules = preg_split("/[\s,]+/", $pattern);
}








public function test($url)
{
$host = parse_url($url, PHP_URL_HOST);
$port = parse_url($url, PHP_URL_PORT);

if (empty($port)) {
switch (parse_url($url, PHP_URL_SCHEME)) {
case 'http':
$port = 80;
break;
case 'https':
$port = 443;
break;
}
}

foreach ($this->rules as $rule) {
if ($rule == '*') {
return true;
}

$match = false;

list($ruleHost) = explode(':', $rule);
list($base) = explode('/', $ruleHost);

if (filter_var($base, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {


if (!isset($ip)) {
$ip = gethostbyname($host);
}

if (strpos($ruleHost, '/') === false) {
$match = $ip === $ruleHost;
} else {
$match = self::inCIDRBlock($ruleHost, $ip);
}
} else {


$haystack = '.' . trim($host, '.') . '.';
$needle = '.'. trim($ruleHost, '.') .'.';
$match = stripos(strrev($haystack), strrev($needle)) === 0;
}


 if ($match && strpos($rule, ':') !== false) {
list(, $rulePort) = explode(':', $rule);
if (!empty($rulePort) && $port != $rulePort) {
$match = false;
}
}

if ($match) {
return true;
}
}

return false;
}











private static function inCIDRBlock($cidr, $ip)
{

 list($base, $bits) = explode('/', $cidr);


 list($a, $b, $c, $d) = explode('.', $base);


 $i = ($a << 24) + ($b << 16) + ($c << 8) + $d;
$mask = $bits == 0 ? 0: (~0 << (32 - $bits));


 $low = $i & $mask;


 $high = $i | (~$mask & 0xFFFFFFFF);


 list($a, $b, $c, $d) = explode('.', $ip);


 $check = ($a << 24) + ($b << 16) + ($c << 8) + $d;


 
 return $check >= $low && $check <= $high;
}
}
<?php











namespace Composer\Util;

use Composer\IO\IOInterface;





class Svn
{
const MAX_QTY_AUTH_TRIES = 5;




protected $credentials;




protected $hasAuth;




protected $io;




protected $url;




protected $cacheCredentials = true;




protected $process;




protected $qtyAuthTries = 0;






public function __construct($url, IOInterface $io, ProcessExecutor $process = null)
{
$this->url = $url;
$this->io = $io;
$this->process = $process ?: new ProcessExecutor;
}















public function execute($command, $url, $cwd = null, $path = null, $verbose = false)
{
$svnCommand = $this->getCommand($command, $url, $path);
$output = null;
$io = $this->io;
$handler = function ($type, $buffer) use (&$output, $io, $verbose) {
if ($type !== 'out') {
return;
}
$output .= $buffer;
if ($verbose) {
$io->write($buffer, false);
}
};
$status = $this->process->execute($svnCommand, $handler, $cwd);
if (0 === $status) {
return $output;
}

if (empty($output)) {
$output = $this->process->getErrorOutput();
}


 if (false === stripos($output, 'Could not authenticate to server:')
&& false === stripos($output, 'authorization failed')
&& false === stripos($output, 'svn: E170001:')) {
throw new \RuntimeException($output);
}


 if (!$this->io->isInteractive()) {
throw new \RuntimeException(
'can not ask for authentication in non interactive mode ('.$output.')'
);
}


 if ($this->qtyAuthTries++ < self::MAX_QTY_AUTH_TRIES || !$this->hasAuth()) {
$this->doAuthDance();


 return $this->execute($command, $url, $cwd, $path, $verbose);
}

throw new \RuntimeException(
'wrong credentials provided ('.$output.')'
);
}






protected function doAuthDance()
{
$this->io->write("The Subversion server ({$this->url}) requested credentials:");

$this->hasAuth = true;
$this->credentials['username'] = $this->io->ask("Username: ");
$this->credentials['password'] = $this->io->askAndHideAnswer("Password: ");

$this->cacheCredentials = $this->io->askConfirmation("Should Subversion cache these credentials? (yes/no) ", true);

return $this;
}










protected function getCommand($cmd, $url, $path = null)
{
$cmd = sprintf('%s %s%s %s',
$cmd,
'--non-interactive ',
$this->getCredentialString(),
escapeshellarg($url)
);

if ($path) {
$cmd .= ' ' . escapeshellarg($path);
}

return $cmd;
}








protected function getCredentialString()
{
if (!$this->hasAuth()) {
return '';
}

return sprintf(
' %s--username %s --password %s ',
$this->getAuthCache(),
escapeshellarg($this->getUsername()),
escapeshellarg($this->getPassword())
);
}







protected function getPassword()
{
if ($this->credentials === null) {
throw new \LogicException("No svn auth detected.");
}

return isset($this->credentials['password']) ? $this->credentials['password'] : '';
}







protected function getUsername()
{
if ($this->credentials === null) {
throw new \LogicException("No svn auth detected.");
}

return $this->credentials['username'];
}






protected function hasAuth()
{
if (null !== $this->hasAuth) {
return $this->hasAuth;
}

$uri = parse_url($this->url);
if (empty($uri['user'])) {
return $this->hasAuth = false;
}

$this->credentials['username'] = $uri['user'];
if (!empty($uri['pass'])) {
$this->credentials['password'] = $uri['pass'];
}

return $this->hasAuth = true;
}






protected function getAuthCache()
{
return $this->cacheCredentials ? '' : '--no-auth-cache ';
}
}
<?php











namespace Composer;

use Composer\Package\RootPackageInterface;
use Composer\Package\Locker;
use Composer\Repository\RepositoryManager;
use Composer\Installer\InstallationManager;
use Composer\Downloader\DownloadManager;
use Composer\Script\EventDispatcher;
use Composer\Autoload\AutoloadGenerator;





class Composer
{
const VERSION = 'ef072ff8c008f35d90fe3460608bdb1365a8d7a7';




private $package;




private $locker;




private $repositoryManager;




private $downloadManager;




private $installationManager;




private $config;




private $eventDispatcher;




private $autoloadGenerator;





public function setPackage(RootPackageInterface $package)
{
$this->package = $package;
}




public function getPackage()
{
return $this->package;
}




public function setConfig(Config $config)
{
$this->config = $config;
}




public function getConfig()
{
return $this->config;
}




public function setLocker(Locker $locker)
{
$this->locker = $locker;
}




public function getLocker()
{
return $this->locker;
}




public function setRepositoryManager(RepositoryManager $manager)
{
$this->repositoryManager = $manager;
}




public function getRepositoryManager()
{
return $this->repositoryManager;
}




public function setDownloadManager(DownloadManager $manager)
{
$this->downloadManager = $manager;
}




public function getDownloadManager()
{
return $this->downloadManager;
}




public function setInstallationManager(InstallationManager $manager)
{
$this->installationManager = $manager;
}




public function getInstallationManager()
{
return $this->installationManager;
}




public function setEventDispatcher(EventDispatcher $eventDispatcher)
{
$this->eventDispatcher = $eventDispatcher;
}




public function getEventDispatcher()
{
return $this->eventDispatcher;
}




public function setAutoloadGenerator(AutoloadGenerator $autoloadGenerator)
{
$this->autoloadGenerator = $autoloadGenerator;
}




public function getAutoloadGenerator()
{
return $this->autoloadGenerator;
}
}
<?php











namespace Composer\Json;




class JsonManipulator
{
private static $RECURSE_BLOCKS;
private static $JSON_VALUE;
private static $JSON_STRING;

private $contents;
private $newline;
private $indent;

public function __construct($contents)
{
if (!self::$RECURSE_BLOCKS) {
self::$RECURSE_BLOCKS = '(?:[^{}]*|\{(?:[^{}]*|\{(?:[^{}]*|\{(?:[^{}]*|\{[^{}]*\})*\})*\})*\})*';
self::$JSON_STRING = '"(?:\\\\["bfnrt/\\\\]|\\\\u[a-fA-F0-9]{4}|[^\0-\x09\x0a-\x1f\\\\"])*"';
self::$JSON_VALUE = '(?:[0-9.]+|null|true|false|'.self::$JSON_STRING.'|\[[^\]]*\]|\{'.self::$RECURSE_BLOCKS.'\})';
}

$contents = trim($contents);
if (!preg_match('#^\{(.*)\}$#s', $contents)) {
throw new \InvalidArgumentException('The json file must be an object ({})');
}
$this->newline = false !== strpos($contents, "\r\n") ? "\r\n": "\n";
$this->contents = $contents === '{}' ? '{' . $this->newline . '}' : $contents;
$this->detectIndenting();
}

public function getContents()
{
return $this->contents . $this->newline;
}

public function addLink($type, $package, $constraint)
{
$data = @json_decode($this->contents, true);


 if (null === $data) {
return false;
}


 if (!isset($data[$type])) {
return $this->addMainKey($type, array($package => $constraint));
}

$regex = '{^(\s*\{\s*(?:'.self::$JSON_STRING.'\s*:\s*'.self::$JSON_VALUE.'\s*,\s*)*?)'.
'('.preg_quote(JsonFile::encode($type)).'\s*:\s*)('.self::$JSON_VALUE.')(.*)}s';
if (!preg_match($regex, $this->contents, $matches)) {
return false;
}

$links = $matches[3];

if (isset($data[$type][$package])) {

 $packageRegex = str_replace('/', '\\\\?/', preg_quote($package));

 $links = preg_replace('{"'.$packageRegex.'"(\s*:\s*)'.self::$JSON_STRING.'}i', addcslashes(JsonFile::encode($package).'${1}"'.$constraint.'"', '\\'), $links);
} else {
if (preg_match('#^\s*\{\s*\S+.*?(\s*\}\s*)$#s', $links, $match)) {

 $links = preg_replace(
'{'.preg_quote($match[1]).'$}',
addcslashes(',' . $this->newline . $this->indent . $this->indent . JsonFile::encode($package).': '.JsonFile::encode($constraint) . $match[1], '\\'),
$links
);
} else {

 $links = '{' . $this->newline .
$this->indent . $this->indent . JsonFile::encode($package).': '.JsonFile::encode($constraint) . $this->newline .
$this->indent . '}';
}
}

$this->contents = $matches[1] . $matches[2] . $links . $matches[4];

return true;
}

public function addRepository($name, $config)
{
return $this->addSubNode('repositories', $name, $config);
}

public function removeRepository($name)
{
return $this->removeSubNode('repositories', $name);
}

public function addConfigSetting($name, $value)
{
return $this->addSubNode('config', $name, $value);
}

public function removeConfigSetting($name)
{
return $this->removeSubNode('config', $name);
}

public function addSubNode($mainNode, $name, $value)
{

 if (!preg_match('#"'.$mainNode.'":\s*\{#', $this->contents)) {
$this->addMainKey(''.$mainNode.'', array($name => $value));

return true;
}

$subName = null;
if (false !== strpos($name, '.')) {
list($name, $subName) = explode('.', $name, 2);
}


 $nodeRegex = '#("'.$mainNode.'":\s*\{)('.self::$RECURSE_BLOCKS.')(\})#s';
if (!preg_match($nodeRegex, $this->contents, $match)) {
return false;
}

$children = $match[2];


 if (!@json_decode('{'.$children.'}')) {
return false;
}

$that = $this;


 if (preg_match('{("'.preg_quote($name).'"\s*:\s*)('.self::$JSON_VALUE.')(,?)}', $children, $matches)) {
$children = preg_replace_callback('{("'.preg_quote($name).'"\s*:\s*)('.self::$JSON_VALUE.')(,?)}', function ($matches) use ($name, $subName, $value, $that) {
if ($subName !== null) {
$curVal = json_decode($matches[2], true);
$curVal[$subName] = $value;
$value = $curVal;
}

return $matches[1] . $that->format($value, 1) . $matches[3];
}, $children);
} elseif (preg_match('#[^\s](\s*)$#', $children, $match)) {
if ($subName !== null) {
$value = array($subName => $value);
}


 $children = preg_replace(
'#'.$match[1].'$#',
addcslashes(',' . $this->newline . $this->indent . $this->indent . JsonFile::encode($name).': '.$this->format($value, 1) . $match[1], '\\'),
$children
);
} else {
if ($subName !== null) {
$value = array($subName => $value);
}


 $children = $this->newline . $this->indent . $this->indent . JsonFile::encode($name).': '.$this->format($value, 1) . $children;
}

$this->contents = preg_replace($nodeRegex, addcslashes('${1}'.$children.'$3', '\\'), $this->contents);

return true;
}

public function removeSubNode($mainNode, $name)
{

 if (!preg_match('#"'.$mainNode.'":\s*\{#', $this->contents)) {
return true;
}


 if (preg_match('#"'.$mainNode.'":\s*\{\s*\}#s', $this->contents)) {
return true;
}


 $nodeRegex = '#("'.$mainNode.'":\s*\{)('.self::$RECURSE_BLOCKS.')(\})#s';
if (!preg_match($nodeRegex, $this->contents, $match)) {
return false;
}

$children = $match[2];


 if (!@json_decode('{'.$children.'}')) {
return false;
}

$subName = null;
if (false !== strpos($name, '.')) {
list($name, $subName) = explode('.', $name, 2);
}


 if (preg_match('{"'.preg_quote($name).'"\s*:}i', $children)) {

 if (preg_match_all('{"'.preg_quote($name).'"\s*:\s*(?:'.self::$JSON_VALUE.')}', $children, $matches)) {
$bestMatch = '';
foreach ($matches[0] as $match) {
if (strlen($bestMatch) < strlen($match)) {
$bestMatch = $match;
}
}
$childrenClean = preg_replace('{,\s*'.preg_quote($bestMatch).'}i', '', $children, -1, $count);
if (1 !== $count) {
$childrenClean = preg_replace('{'.preg_quote($bestMatch).'\s*,?\s*}i', '', $childrenClean, -1, $count);
if (1 !== $count) {
return false;
}
}
}
}


 if (!trim($childrenClean)) {
$this->contents = preg_replace($nodeRegex, '$1'.$this->newline.$this->indent.'}', $this->contents);


 if ($subName !== null) {
$curVal = json_decode('{'.$children.'}', true);
unset($curVal[$name][$subName]);
$this->addSubNode($mainNode, $name, $curVal[$name]);
}

return true;
}

$that = $this;
$this->contents = preg_replace_callback($nodeRegex, function ($matches) use ($that, $name, $subName, $childrenClean) {
if ($subName !== null) {
$curVal = json_decode('{'.$matches[2].'}', true);
unset($curVal[$name][$subName]);
$childrenClean = substr($that->format($curVal, 0), 1, -1);
}

return $matches[1] . $childrenClean . $matches[3];
}, $this->contents);

return true;
}

public function addMainKey($key, $content)
{
$content = $this->format($content);


 $regex = '{^(\s*\{\s*(?:'.self::$JSON_STRING.'\s*:\s*'.self::$JSON_VALUE.'\s*,\s*)*?)'.
'('.preg_quote(JsonFile::encode($key)).'\s*:\s*'.self::$JSON_VALUE.')(.*)}s';
if (preg_match($regex, $this->contents, $matches)) {

 if (!@json_decode('{'.$matches[2].'}')) {
return false;
}

$this->contents = $matches[1] . JsonFile::encode($key).': '.$content . $matches[3];

return true;
}


 if (preg_match('#[^{\s](\s*)\}$#', $this->contents, $match)) {
$this->contents = preg_replace(
'#'.$match[1].'\}$#',
addcslashes(',' . $this->newline . $this->indent . JsonFile::encode($key). ': '. $content . $this->newline . '}', '\\'),
$this->contents
);

return true;
}


 $this->contents = preg_replace(
'#\}$#',
addcslashes($this->indent . JsonFile::encode($key). ': '.$content . $this->newline . '}', '\\'),
$this->contents
);

return true;
}

public function format($data, $depth = 0)
{
if (is_array($data)) {
reset($data);

if (is_numeric(key($data))) {
foreach ($data as $key => $val) {
$data[$key] = $this->format($val, $depth + 1);
}

return '['.implode(', ', $data).']';
}

$out = '{' . $this->newline;
$elems = array();
foreach ($data as $key => $val) {
$elems[] = str_repeat($this->indent, $depth + 2) . JsonFile::encode($key). ': '.$this->format($val, $depth + 1);
}

return $out . implode(','.$this->newline, $elems) . $this->newline . str_repeat($this->indent, $depth + 1) . '}';
}

return JsonFile::encode($data);
}

protected function detectIndenting()
{
if (preg_match('{^(\s+)"}m', $this->contents, $match)) {
$this->indent = $match[1];
} else {
$this->indent = '    ';
}
}
}
<?php











namespace Composer\Json;

use Composer\Composer;
use JsonSchema\Validator;
use Seld\JsonLint\JsonParser;
use Seld\JsonLint\ParsingException;
use Composer\Util\RemoteFilesystem;
use Composer\Downloader\TransportException;







class JsonFile
{
const LAX_SCHEMA = 1;
const STRICT_SCHEMA = 2;

const JSON_UNESCAPED_SLASHES = 64;
const JSON_PRETTY_PRINT = 128;
const JSON_UNESCAPED_UNICODE = 256;

private $path;
private $rfs;








public function __construct($path, RemoteFilesystem $rfs = null)
{
$this->path = $path;

if (null === $rfs && preg_match('{^https?://}i', $path)) {
throw new \InvalidArgumentException('http urls require a RemoteFilesystem instance to be passed');
}
$this->rfs = $rfs;
}




public function getPath()
{
return $this->path;
}






public function exists()
{
return is_file($this->path);
}







public function read()
{
try {
if ($this->rfs) {
$json = $this->rfs->getContents($this->path, $this->path, false);
} else {
$json = file_get_contents($this->path);
}
} catch (TransportException $e) {
throw new \RuntimeException($e->getMessage(), 0, $e);
} catch (\Exception $e) {
throw new \RuntimeException('Could not read '.$this->path."\n\n".$e->getMessage());
}

return static::parseJson($json, $this->path);
}








public function write(array $hash, $options = 448)
{
$dir = dirname($this->path);
if (!is_dir($dir)) {
if (file_exists($dir)) {
throw new \UnexpectedValueException(
$dir.' exists and is not a directory.'
);
}
if (!@mkdir($dir, 0777, true)) {
throw new \UnexpectedValueException(
$dir.' does not exist and could not be created.'
);
}
}
file_put_contents($this->path, static::encode($hash, $options). ($options & self::JSON_PRETTY_PRINT ? "\n" : ''));
}








public function validateSchema($schema = self::STRICT_SCHEMA)
{
$content = file_get_contents($this->path);
$data = json_decode($content);

if (null === $data && 'null' !== $content) {
self::validateSyntax($content, $this->path);
}

$schemaFile = __DIR__ . '/../../../res/composer-schema.json';
$schemaData = json_decode(file_get_contents($schemaFile));

if ($schema === self::LAX_SCHEMA) {
$schemaData->additionalProperties = true;
$schemaData->properties->name->required = false;
$schemaData->properties->description->required = false;
}

$validator = new Validator();
$validator->check($data, $schemaData);



if (!$validator->isValid()) {
$errors = array();
foreach ((array) $validator->getErrors() as $error) {
$errors[] = ($error['property'] ? $error['property'].' : ' : '').$error['message'];
}
throw new JsonValidationException('"'.$this->path.'" does not match the expected JSON schema', $errors);
}

return true;
}













public static function encode($data, $options = 448)
{
if (version_compare(PHP_VERSION, '5.4', '>=')) {
return json_encode($data, $options);
}

$json = json_encode($data);

$prettyPrint = (bool) ($options & self::JSON_PRETTY_PRINT);
$unescapeUnicode = (bool) ($options & self::JSON_UNESCAPED_UNICODE);
$unescapeSlashes = (bool) ($options & self::JSON_UNESCAPED_SLASHES);

if (!$prettyPrint && !$unescapeUnicode && !$unescapeSlashes) {
return $json;
}

$result = '';
$pos = 0;
$strLen = strlen($json);
$indentStr = '    ';
$newLine = "\n";
$outOfQuotes = true;
$buffer = '';
$noescape = true;

for ($i = 0; $i < $strLen; $i++) {

 $char = substr($json, $i, 1);


 if ('"' === $char && $noescape) {
$outOfQuotes = !$outOfQuotes;
}

if (!$outOfQuotes) {
$buffer .= $char;
$noescape = '\\' === $char ? !$noescape : true;
continue;
} elseif ('' !== $buffer) {
if ($unescapeSlashes) {
$buffer = str_replace('\\/', '/', $buffer);
}

if ($unescapeUnicode && function_exists('mb_convert_encoding')) {

 $buffer = preg_replace_callback('/\\\\u([0-9a-f]{4})/i', function($match) {
return mb_convert_encoding(pack('H*', $match[1]), 'UTF-8', 'UCS-2BE');
}, $buffer);
}

$result .= $buffer.$char;
$buffer = '';
continue;
}

if (':' === $char) {

 $char .= ' ';
} elseif (('}' === $char || ']' === $char)) {
$pos--;
$prevChar = substr($json, $i - 1, 1);

if ('{' !== $prevChar && '[' !== $prevChar) {

 
 $result .= $newLine;
for ($j = 0; $j < $pos; $j++) {
$result .= $indentStr;
}
} else {

 $result = rtrim($result)."\n\n".$indentStr;
}
}

$result .= $char;


 
 if (',' === $char || '{' === $char || '[' === $char) {
$result .= $newLine;

if ('{' === $char || '[' === $char) {
$pos++;
}

for ($j = 0; $j < $pos; $j++) {
$result .= $indentStr;
}
}
}

return $result;
}









public static function parseJson($json, $file = null)
{
$data = json_decode($json, true);
if (null === $data && JSON_ERROR_NONE !== json_last_error()) {
self::validateSyntax($json, $file);
}

return $data;
}











protected static function validateSyntax($json, $file = null)
{
$parser = new JsonParser();
$result = $parser->lint($json);
if (null === $result) {
if (defined('JSON_ERROR_UTF8') && JSON_ERROR_UTF8 === json_last_error()) {
throw new \UnexpectedValueException('"'.$file.'" is not UTF-8, could not parse as JSON');
}

return true;
}

throw new ParsingException('"'.$file.'" does not contain valid JSON'."\n".$result->getMessage(), $result->getDetails());
}
}
<?php











namespace Composer\Json;

use Exception;




class JsonValidationException extends Exception
{
protected $errors;

public function __construct($message, $errors = array())
{
$this->errors = $errors;
parent::__construct($message);
}

public function getErrors()
{
return $this->errors;
}
}
<?php











namespace Composer;

use Composer\Config\ConfigSourceInterface;




class Config
{
public static $defaultConfig = array(
'process-timeout' => 300,
'use-include-path' => false,
'preferred-install' => 'auto',
'notify-on-install' => true,
'github-protocols' => array('git', 'https'),
'vendor-dir' => 'vendor',
'bin-dir' => '{$vendor-dir}/bin',
'cache-dir' => '{$home}/cache',
'cache-files-dir' => '{$cache-dir}/files',
'cache-repo-dir' => '{$cache-dir}/repo',
'cache-vcs-dir' => '{$cache-dir}/vcs',
'cache-ttl' => 15552000, 
 'cache-files-ttl' => null, 
 'cache-files-maxsize' => '300MiB',
'discard-changes' => false,
);

public static $defaultRepositories = array(
'packagist' => array(
'type' => 'composer',
'url' => 'https?://packagist.org',
'allow_ssl_downgrade' => true,
)
);

private $config;
private $repositories;
private $configSource;

public function __construct()
{

 $this->config = static::$defaultConfig;
$this->repositories = static::$defaultRepositories;
}

public function setConfigSource(ConfigSourceInterface $source)
{
$this->configSource = $source;
}

public function getConfigSource()
{
return $this->configSource;
}






public function merge(array $config)
{

 if (!empty($config['config']) && is_array($config['config'])) {
foreach ($config['config'] as $key => $val) {
if (in_array($key, array('github-oauth')) && isset($this->config[$key])) {
$this->config[$key] = array_merge($this->config[$key], $val);
} else {
$this->config[$key] = $val;
}
}
}

if (!empty($config['repositories']) && is_array($config['repositories'])) {
$this->repositories = array_reverse($this->repositories, true);
$newRepos = array_reverse($config['repositories'], true);
foreach ($newRepos as $name => $repository) {

 if (false === $repository) {
unset($this->repositories[$name]);
continue;
}


 if (1 === count($repository) && false === current($repository)) {
unset($this->repositories[key($repository)]);
continue;
}


 if (is_int($name)) {
$this->repositories[] = $repository;
} else {
$this->repositories[$name] = $repository;
}
}
$this->repositories = array_reverse($this->repositories, true);
}
}




public function getRepositories()
{
return $this->repositories;
}








public function get($key)
{
switch ($key) {
case 'vendor-dir':
case 'bin-dir':
case 'process-timeout':
case 'cache-dir':
case 'cache-files-dir':
case 'cache-repo-dir':
case 'cache-vcs-dir':

 $env = 'COMPOSER_' . strtoupper(strtr($key, '-', '_'));

return rtrim($this->process(getenv($env) ?: $this->config[$key]), '/\\');

case 'cache-ttl':
return (int) $this->config[$key];

case 'cache-files-maxsize':
if (!preg_match('/^\s*([0-9.]+)\s*(?:([kmg])(?:i?b)?)?\s*$/i', $this->config[$key], $matches)) {
throw new \RuntimeException(
"Could not parse the value of 'cache-files-maxsize': {$this->config[$key]}"
);
}
$size = $matches[1];
if (isset($matches[2])) {
switch (strtolower($matches[2])) {
case 'g':
$size *= 1024;

 case 'm':
$size *= 1024;

 case 'k':
$size *= 1024;
break;
}
}

return $size;

case 'cache-files-ttl':
if (isset($this->config[$key])) {
return (int) $this->config[$key];
}

return (int) $this->config['cache-ttl'];

case 'home':
return rtrim($this->process($this->config[$key]), '/\\');

case 'discard-changes':
if ($env = getenv('COMPOSER_DISCARD_CHANGES')) {
if (!in_array($env, array('stash', 'true', 'false', '1', '0'), true)) {
throw new \RuntimeException(
"Invalid value for COMPOSER_DISCARD_CHANGES: {$env}. Expected 1, 0, true, false or stash"
);
}
if ('stash' === $env) {
return 'stash';
}


 return $env !== 'false' && (bool) $env;
}

if (!in_array($this->config[$key], array(true, false, 'stash'), true)) {
throw new \RuntimeException(
"Invalid value for 'discard-changes': {$this->config[$key]}. Expected true, false or stash"
);
}

return $this->config[$key];

case 'github-protocols':
if (reset($this->config['github-protocols']) === 'http') {
throw new \RuntimeException('The http protocol for github is not available anymore, update your config\'s github-protocols to use "https" or "git"');
}

return $this->config[$key];

default:
if (!isset($this->config[$key])) {
return null;
}

return $this->process($this->config[$key]);
}
}

public function all()
{
$all = array(
'repositories' => $this->getRepositories(),
);
foreach (array_keys($this->config) as $key) {
$all['config'][$key] = $this->get($key);
}

return $all;
}

public function raw()
{
return array(
'repositories' => $this->getRepositories(),
'config' => $this->config,
);
}







public function has($key)
{
return array_key_exists($key, $this->config);
}







private function process($value)
{
$config = $this;

if (!is_string($value)) {
return $value;
}

return preg_replace_callback('#\{\$(.+)\}#', function ($match) use ($config) {
return $config->get($match[1]);
}, $value);
}
}
<?php











namespace Composer\Script;

use Composer\Composer;
use Composer\IO\IOInterface;






class Event
{



private $name;




private $composer;




private $io;




private $devMode;









public function __construct($name, Composer $composer, IOInterface $io, $devMode = false)
{
$this->name = $name;
$this->composer = $composer;
$this->io = $io;
$this->devMode = $devMode;
}






public function getName()
{
return $this->name;
}






public function getComposer()
{
return $this->composer;
}






public function getIO()
{
return $this->io;
}






public function isDevMode()
{
return $this->devMode;
}
}
<?php











namespace Composer\Script;







class ScriptEvents
{







const PRE_INSTALL_CMD = 'pre-install-cmd';








const POST_INSTALL_CMD = 'post-install-cmd';








const PRE_UPDATE_CMD = 'pre-update-cmd';








const POST_UPDATE_CMD = 'post-update-cmd';








const PRE_STATUS_CMD = 'pre-status-cmd';








const POST_STATUS_CMD = 'post-status-cmd';








const PRE_PACKAGE_INSTALL = 'pre-package-install';








const POST_PACKAGE_INSTALL = 'post-package-install';








const PRE_PACKAGE_UPDATE = 'pre-package-update';








const POST_PACKAGE_UPDATE = 'post-package-update';








const PRE_PACKAGE_UNINSTALL = 'pre-package-uninstall';








const POST_PACKAGE_UNINSTALL = 'post-package-uninstall';








const PRE_AUTOLOAD_DUMP = 'pre-autoload-dump';








const POST_AUTOLOAD_DUMP = 'post-autoload-dump';








const POST_ROOT_PACKAGE_INSTALL = 'post-root-package-install';









const POST_CREATE_PROJECT_CMD = 'post-create-project-cmd';

}
<?php











namespace Composer\Script;

use Composer\Composer;






class CommandEvent extends Event
{
}
<?php











namespace Composer\Script;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\DependencyResolver\Operation\OperationInterface;






class PackageEvent extends Event
{



private $operation;










public function __construct($name, Composer $composer, IOInterface $io, $devMode, OperationInterface $operation)
{
parent::__construct($name, $composer, $io, $devMode);
$this->operation = $operation;
}






public function getOperation()
{
return $this->operation;
}
}
<?php











namespace Composer\Script;

use Composer\IO\IOInterface;
use Composer\Composer;
use Composer\DependencyResolver\Operation\OperationInterface;
use Composer\Util\ProcessExecutor;













class EventDispatcher
{
protected $composer;
protected $io;
protected $loader;
protected $process;








public function __construct(Composer $composer, IOInterface $io, ProcessExecutor $process = null)
{
$this->composer = $composer;
$this->io = $io;
$this->process = $process ?: new ProcessExecutor($io);
}







public function dispatch($eventName, Event $event = null)
{
if (null == $event) {
$event = new Event($eventName, $this->composer, $this->io);
}

$this->doDispatch($event);
}








public function dispatchPackageEvent($eventName, $devMode, OperationInterface $operation)
{
$this->doDispatch(new PackageEvent($eventName, $this->composer, $this->io, $devMode, $operation));
}







public function dispatchCommandEvent($eventName, $devMode)
{
$this->doDispatch(new CommandEvent($eventName, $this->composer, $this->io, $devMode));
}








protected function doDispatch(Event $event)
{
$listeners = $this->getListeners($event);

foreach ($listeners as $callable) {
if ($this->isPhpScript($callable)) {
$className = substr($callable, 0, strpos($callable, '::'));
$methodName = substr($callable, strpos($callable, '::') + 2);

if (!class_exists($className)) {
$this->io->write('<warning>Class '.$className.' is not autoloadable, can not call '.$event->getName().' script</warning>');
continue;
}
if (!is_callable($callable)) {
$this->io->write('<warning>Method '.$callable.' is not callable, can not call '.$event->getName().' script</warning>');
continue;
}

try {
$this->executeEventPhpScript($className, $methodName, $event);
} catch (\Exception $e) {
$message = "Script %s handling the %s event terminated with an exception";
$this->io->write('<error>'.sprintf($message, $callable, $event->getName()).'</error>');
throw $e;
}
} else {
if (0 !== ($exitCode = $this->process->execute($callable))) {
$event->getIO()->write(sprintf('<error>Script %s handling the %s event returned with an error</error>', $callable, $event->getName()));

throw new \RuntimeException('Error Output: '.$this->process->getErrorOutput(), $exitCode);
}
}
}
}






protected function executeEventPhpScript($className, $methodName, Event $event)
{
$className::$methodName($event);
}





protected function getListeners(Event $event)
{
$package = $this->composer->getPackage();
$scripts = $package->getScripts();

if (empty($scripts[$event->getName()])) {
return array();
}

if ($this->loader) {
$this->loader->unregister();
}

$generator = $this->composer->getAutoloadGenerator();
$packages = $this->composer->getRepositoryManager()->getLocalRepository()->getCanonicalPackages();
$packageMap = $generator->buildPackageMap($this->composer->getInstallationManager(), $package, $packages);
$map = $generator->parseAutoloads($packageMap, $package);
$this->loader = $generator->createLoader($map);
$this->loader->register();

return $scripts[$event->getName()];
}







protected function isPhpScript($callable)
{
return false === strpos($callable, ' ') && false !== strpos($callable, '::');
}
}
<?php











namespace Composer\Installer;

use Composer\Repository\InstalledRepositoryInterface;
use Composer\Package\PackageInterface;








class NoopInstaller implements InstallerInterface
{



public function supports($packageType)
{
return true;
}




public function isInstalled(InstalledRepositoryInterface $repo, PackageInterface $package)
{
return $repo->hasPackage($package);
}




public function install(InstalledRepositoryInterface $repo, PackageInterface $package)
{
if (!$repo->hasPackage($package)) {
$repo->addPackage(clone $package);
}
}




public function update(InstalledRepositoryInterface $repo, PackageInterface $initial, PackageInterface $target)
{
if (!$repo->hasPackage($initial)) {
throw new \InvalidArgumentException('Package is not installed: '.$initial);
}

$repo->removePackage($initial);
if (!$repo->hasPackage($target)) {
$repo->addPackage(clone $target);
}
}




public function uninstall(InstalledRepositoryInterface $repo, PackageInterface $package)
{
if (!$repo->hasPackage($package)) {
throw new \InvalidArgumentException('Package is not installed: '.$package);
}
$repo->removePackage($package);
}




public function getInstallPath(PackageInterface $package)
{
$targetDir = $package->getTargetDir();

return $package->getPrettyName() . ($targetDir ? '/'.$targetDir : '');
}
}
<?php











namespace Composer\Installer;

use Composer\Repository\InstalledRepositoryInterface;
use Composer\Package\PackageInterface;






class MetapackageInstaller implements InstallerInterface
{



public function supports($packageType)
{
return $packageType === 'metapackage';
}




public function isInstalled(InstalledRepositoryInterface $repo, PackageInterface $package)
{
return $repo->hasPackage($package);
}




public function install(InstalledRepositoryInterface $repo, PackageInterface $package)
{
$repo->addPackage(clone $package);
}




public function update(InstalledRepositoryInterface $repo, PackageInterface $initial, PackageInterface $target)
{
if (!$repo->hasPackage($initial)) {
throw new \InvalidArgumentException('Package is not installed: '.$initial);
}

$repo->removePackage($initial);
$repo->addPackage(clone $target);
}




public function uninstall(InstalledRepositoryInterface $repo, PackageInterface $package)
{
if (!$repo->hasPackage($package)) {
throw new \InvalidArgumentException('Package is not installed: '.$package);
}

$repo->removePackage($package);
}




public function getInstallPath(PackageInterface $package)
{
return '';
}
}
<?php











namespace Composer\Installer;

use Composer\IO\IOInterface;
use Composer\Composer;
use Composer\Downloader\PearPackageExtractor;
use Composer\Repository\InstalledRepositoryInterface;
use Composer\Package\PackageInterface;







class PearInstaller extends LibraryInstaller
{







public function __construct(IOInterface $io, Composer $composer, $type = 'pear-library')
{
parent::__construct($io, $composer, $type);
}




public function update(InstalledRepositoryInterface $repo, PackageInterface $initial, PackageInterface $target)
{
$this->uninstall($repo, $initial);
$this->install($repo, $target);
}

protected function installCode(PackageInterface $package)
{
parent::installCode($package);
parent::initializeBinDir();

$isWindows = defined('PHP_WINDOWS_VERSION_BUILD');
$php_bin = $this->binDir . ($isWindows ? '/composer-php.bat' : '/composer-php');

if (!$isWindows) {
$php_bin = '/usr/bin/env ' . $php_bin;
}

$installPath = $this->getInstallPath($package);
$vars = array(
'os' => $isWindows ? 'windows' : 'linux',
'php_bin' => $php_bin,
'pear_php' => $installPath,
'php_dir' => $installPath,
'bin_dir' => $installPath . '/bin',
'data_dir' => $installPath . '/data',
'version' => $package->getPrettyVersion(),
);

$packageArchive = $this->getInstallPath($package).'/'.pathinfo($package->getDistUrl(), PATHINFO_BASENAME);
$pearExtractor = new PearPackageExtractor($packageArchive);
$pearExtractor->extractTo($this->getInstallPath($package), array('php' => '/', 'script' => '/bin', 'data' => '/data'), $vars);

if ($this->io->isVerbose()) {
$this->io->write('    Cleaning up');
}
unlink($packageArchive);
}

protected function getBinaries(PackageInterface $package)
{
$binariesPath = $this->getInstallPath($package) . '/bin/';
$binaries = array();
if (file_exists($binariesPath)) {
foreach (new \FilesystemIterator($binariesPath, \FilesystemIterator::KEY_AS_FILENAME | \FilesystemIterator::CURRENT_AS_FILEINFO) as $fileName => $value) {
if (!$value->isDir()) {
$binaries[] = 'bin/'.$fileName;
}
}
}

return $binaries;
}

protected function initializeBinDir()
{
parent::initializeBinDir();
file_put_contents($this->binDir.'/composer-php', $this->generateUnixyPhpProxyCode());
chmod($this->binDir.'/composer-php', 0777);
file_put_contents($this->binDir.'/composer-php.bat', $this->generateWindowsPhpProxyCode());
chmod($this->binDir.'/composer-php.bat', 0777);
}

protected function generateWindowsProxyCode($bin, $link)
{
$binPath = $this->filesystem->findShortestPath($link, $bin);
if ('.bat' === substr($bin, -4)) {
$caller = 'call';
} else {
$handle = fopen($bin, 'r');
$line = fgets($handle);
fclose($handle);
if (preg_match('{^#!/(?:usr/bin/env )?(?:[^/]+/)*(.+)$}m', $line, $match)) {
$caller = trim($match[1]);
} else {
$caller = 'php';
}

if ($caller === 'php') {
return "@echo off\r\n".
"pushd .\r\n".
"cd %~dp0\r\n".
"set PHP_PROXY=%CD%\\composer-php.bat\r\n".
"cd ".escapeshellarg(dirname($binPath))."\r\n".
"set BIN_TARGET=%CD%\\".basename($binPath)."\r\n".
"popd\r\n".
"%PHP_PROXY% \"%BIN_TARGET%\" %*\r\n";
}
}

return "@echo off\r\n".
"pushd .\r\n".
"cd %~dp0\r\n".
"cd ".escapeshellarg(dirname($binPath))."\r\n".
"set BIN_TARGET=%CD%\\".basename($binPath)."\r\n".
"popd\r\n".
$caller." \"%BIN_TARGET%\" %*\r\n";
}

private function generateWindowsPhpProxyCode()
{
$binToVendor = $this->filesystem->findShortestPath($this->binDir, $this->vendorDir, true);

return
"@echo off\r\n" .
"setlocal enabledelayedexpansion\r\n" .
"set BIN_DIR=%~dp0\r\n" .
"set VENDOR_DIR=%BIN_DIR%\\".$binToVendor."\r\n" .
"set DIRS=.\r\n" .
"FOR /D %%V IN (%VENDOR_DIR%\\*) DO (\r\n" .
"    FOR /D %%P IN (%%V\\*) DO (\r\n" .
"        set DIRS=!DIRS!;%%~fP\r\n" .
"    )\r\n" .
")\r\n" .
"php.exe -d include_path=!DIRS! %*\r\n";
}

private function generateUnixyPhpProxyCode()
{
$binToVendor = $this->filesystem->findShortestPath($this->binDir, $this->vendorDir, true);

return
"#!/usr/bin/env sh\n".
"SRC_DIR=`pwd`\n".
"BIN_DIR=`dirname $0`\n".
"VENDOR_DIR=\$BIN_DIR/".escapeshellarg($binToVendor)."\n".
"DIRS=\"\"\n".
"for vendor in \$VENDOR_DIR/*; do\n".
"    if [ -d \"\$vendor\" ]; then\n".
"        for package in \$vendor/*; do\n".
"            if [ -d \"\$package\" ]; then\n".
"                DIRS=\"\${DIRS}:\${package}\"\n".
"            fi\n".
"        done\n".
"    fi\n".
"done\n".
"php -d include_path=\".\$DIRS\" $@\n";
}
}
<?php











namespace Composer\Installer;

use Composer\Package\PackageInterface;
use Composer\Downloader\DownloadManager;
use Composer\Repository\InstalledRepositoryInterface;







class ProjectInstaller implements InstallerInterface
{
private $installPath;
private $downloadManager;

public function __construct($installPath, DownloadManager $dm)
{
$this->installPath = rtrim(strtr($installPath, '\\', '/'), '/').'/';
$this->downloadManager = $dm;
}







public function supports($packageType)
{
return true;
}




public function isInstalled(InstalledRepositoryInterface $repo, PackageInterface $package)
{
return false;
}




public function install(InstalledRepositoryInterface $repo, PackageInterface $package)
{
$installPath = $this->installPath;
if (file_exists($installPath) && (count(glob($installPath.'*')) || (count(glob($installPath.'.*')) > 2))) {
throw new \InvalidArgumentException("Project directory $installPath is not empty.");
}
if (!is_dir($installPath)) {
mkdir($installPath, 0777, true);
}
$this->downloadManager->download($package, $installPath);
}




public function update(InstalledRepositoryInterface $repo, PackageInterface $initial, PackageInterface $target)
{
throw new \InvalidArgumentException("not supported");
}




public function uninstall(InstalledRepositoryInterface $repo, PackageInterface $package)
{
throw new \InvalidArgumentException("not supported");
}







public function getInstallPath(PackageInterface $package)
{
return $this->installPath;
}
}
<?php











namespace Composer\Installer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Downloader\DownloadManager;
use Composer\Repository\InstalledRepositoryInterface;
use Composer\Package\PackageInterface;
use Composer\Util\Filesystem;







class LibraryInstaller implements InstallerInterface
{
protected $composer;
protected $vendorDir;
protected $binDir;
protected $downloadManager;
protected $io;
protected $type;
protected $filesystem;








public function __construct(IOInterface $io, Composer $composer, $type = 'library')
{
$this->composer = $composer;
$this->downloadManager = $composer->getDownloadManager();
$this->io = $io;
$this->type = $type;

$this->filesystem = new Filesystem();
$this->vendorDir = rtrim($composer->getConfig()->get('vendor-dir'), '/');
$this->binDir = rtrim($composer->getConfig()->get('bin-dir'), '/');
}




public function supports($packageType)
{
return $packageType === $this->type || null === $this->type;
}




public function isInstalled(InstalledRepositoryInterface $repo, PackageInterface $package)
{
return $repo->hasPackage($package) && is_readable($this->getInstallPath($package));
}




public function install(InstalledRepositoryInterface $repo, PackageInterface $package)
{
$this->initializeVendorDir();
$downloadPath = $this->getInstallPath($package);


 if (!is_readable($downloadPath) && $repo->hasPackage($package)) {
$this->removeBinaries($package);
}

$this->installCode($package);
$this->installBinaries($package);
if (!$repo->hasPackage($package)) {
$repo->addPackage(clone $package);
}
}




public function update(InstalledRepositoryInterface $repo, PackageInterface $initial, PackageInterface $target)
{
if (!$repo->hasPackage($initial)) {
throw new \InvalidArgumentException('Package is not installed: '.$initial);
}

$this->initializeVendorDir();

$this->removeBinaries($initial);
$this->updateCode($initial, $target);
$this->installBinaries($target);
$repo->removePackage($initial);
if (!$repo->hasPackage($target)) {
$repo->addPackage(clone $target);
}
}




public function uninstall(InstalledRepositoryInterface $repo, PackageInterface $package)
{
if (!$repo->hasPackage($package)) {
throw new \InvalidArgumentException('Package is not installed: '.$package);
}

$this->removeCode($package);
$this->removeBinaries($package);
$repo->removePackage($package);

$downloadPath = $this->getPackageBasePath($package);
if (strpos($package->getName(), '/')) {
$packageVendorDir = dirname($downloadPath);
if (is_dir($packageVendorDir) && !glob($packageVendorDir.'/*')) {
@rmdir($packageVendorDir);
}
}
}




public function getInstallPath(PackageInterface $package)
{
$targetDir = $package->getTargetDir();

return $this->getPackageBasePath($package) . ($targetDir ? '/'.$targetDir : '');
}

protected function getPackageBasePath(PackageInterface $package)
{
$this->initializeVendorDir();

return ($this->vendorDir ? $this->vendorDir.'/' : '') . $package->getPrettyName();
}

protected function installCode(PackageInterface $package)
{
$downloadPath = $this->getInstallPath($package);
$this->downloadManager->download($package, $downloadPath);
}

protected function updateCode(PackageInterface $initial, PackageInterface $target)
{
$downloadPath = $this->getInstallPath($initial);
$this->downloadManager->update($initial, $target, $downloadPath);
}

protected function removeCode(PackageInterface $package)
{
$downloadPath = $this->getPackageBasePath($package);
$this->downloadManager->remove($package, $downloadPath);
}

protected function getBinaries(PackageInterface $package)
{
return $package->getBinaries();
}

protected function installBinaries(PackageInterface $package)
{
$binaries = $this->getBinaries($package);
if (!$binaries) {
return;
}
foreach ($binaries as $bin) {
$binPath = $this->getInstallPath($package).'/'.$bin;
if (!file_exists($binPath)) {
$this->io->write('    <warning>Skipped installation of '.$bin.' for package '.$package->getName().': file not found in package</warning>');
continue;
}

$this->initializeBinDir();
$link = $this->binDir.'/'.basename($bin);
if (file_exists($link)) {
if (is_link($link)) {

 
 
 chmod($link, 0777 & ~umask());
}
$this->io->write('    Skipped installation of '.$bin.' for package '.$package->getName().': name conflicts with an existing file');
continue;
}
if (defined('PHP_WINDOWS_VERSION_BUILD')) {

 if ('.bat' !== substr($binPath, -4)) {
file_put_contents($link, $this->generateUnixyProxyCode($binPath, $link));
chmod($link, 0777 & ~umask());
$link .= '.bat';
if (file_exists($link)) {
$this->io->write('    Skipped installation of '.$bin.'.bat proxy for package '.$package->getName().': a .bat proxy was already installed');
}
}
if (!file_exists($link)) {
file_put_contents($link, $this->generateWindowsProxyCode($binPath, $link));
}
} else {
$cwd = getcwd();
try {

 
 $relativeBin = $this->filesystem->findShortestPath($link, $binPath);
chdir(dirname($link));
if (false === symlink($relativeBin, $link)) {
throw new \ErrorException();
}
} catch (\ErrorException $e) {
file_put_contents($link, $this->generateUnixyProxyCode($binPath, $link));
}
chdir($cwd);
}
chmod($link, 0777 & ~umask());
}
}

protected function removeBinaries(PackageInterface $package)
{
$binaries = $this->getBinaries($package);
if (!$binaries) {
return;
}
foreach ($binaries as $bin) {
$link = $this->binDir.'/'.basename($bin);
if (is_link($link) || file_exists($link)) {
unlink($link);
}
if (file_exists($link.'.bat')) {
unlink($link.'.bat');
}
}
}

protected function initializeVendorDir()
{
$this->filesystem->ensureDirectoryExists($this->vendorDir);
$this->vendorDir = realpath($this->vendorDir);
}

protected function initializeBinDir()
{
$this->filesystem->ensureDirectoryExists($this->binDir);
$this->binDir = realpath($this->binDir);
}

protected function generateWindowsProxyCode($bin, $link)
{
$binPath = $this->filesystem->findShortestPath($link, $bin);
if ('.bat' === substr($bin, -4) || '.exe' === substr($bin, -4)) {
$caller = 'call';
} else {
$handle = fopen($bin, 'r');
$line = fgets($handle);
fclose($handle);
if (preg_match('{^#!/(?:usr/bin/env )?(?:[^/]+/)*(.+)$}m', $line, $match)) {
$caller = trim($match[1]);
} else {
$caller = 'php';
}
}

return "@ECHO OFF\r\n".
"SET BIN_TARGET=%~dp0/".trim(escapeshellarg($binPath), '"')."\r\n".
"{$caller} \"%BIN_TARGET%\" %*\r\n";
}

protected function generateUnixyProxyCode($bin, $link)
{
$binPath = $this->filesystem->findShortestPath($link, $bin);

return "#!/usr/bin/env sh\n".
'SRC_DIR="`pwd`"'."\n".
'cd "`dirname "$0"`"'."\n".
'cd '.escapeshellarg(dirname($binPath))."\n".
'BIN_TARGET="`pwd`/'.basename($binPath)."\"\n".
'cd "$SRC_DIR"'."\n".
'"$BIN_TARGET" "$@"'."\n";
}
}
<?php











namespace Composer\Installer;

use Composer\Package\PackageInterface;
use Composer\Package\AliasPackage;
use Composer\Repository\RepositoryInterface;
use Composer\Repository\InstalledRepositoryInterface;
use Composer\DependencyResolver\Operation\OperationInterface;
use Composer\DependencyResolver\Operation\InstallOperation;
use Composer\DependencyResolver\Operation\UpdateOperation;
use Composer\DependencyResolver\Operation\UninstallOperation;
use Composer\DependencyResolver\Operation\MarkAliasInstalledOperation;
use Composer\DependencyResolver\Operation\MarkAliasUninstalledOperation;
use Composer\Util\StreamContextFactory;







class InstallationManager
{
private $installers = array();
private $cache = array();
private $notifiablePackages = array();

public function reset()
{
$this->notifiablePackages = array();
}






public function addInstaller(InstallerInterface $installer)
{
array_unshift($this->installers, $installer);
$this->cache = array();
}






public function removeInstaller(InstallerInterface $installer)
{
if (false !== ($key = array_search($installer, $this->installers, true))) {
array_splice($this->installers, $key, 1);
$this->cache = array();
}
}








public function disableCustomInstallers()
{
foreach ($this->installers as $i => $installer) {
if (!$installer instanceof InstallerInstaller) {
continue;
}

unset($this->installers[$i]);
}
}










public function getInstaller($type)
{
$type = strtolower($type);

if (isset($this->cache[$type])) {
return $this->cache[$type];
}

foreach ($this->installers as $installer) {
if ($installer->supports($type)) {
return $this->cache[$type] = $installer;
}
}

throw new \InvalidArgumentException('Unknown installer type: '.$type);
}









public function isPackageInstalled(InstalledRepositoryInterface $repo, PackageInterface $package)
{
if ($package instanceof AliasPackage) {
return $repo->hasPackage($package) && $this->isPackageInstalled($repo, $package->getAliasOf());
}

return $this->getInstaller($package->getType())->isInstalled($repo, $package);
}







public function execute(RepositoryInterface $repo, OperationInterface $operation)
{
$method = $operation->getJobType();
$this->$method($repo, $operation);
}







public function install(RepositoryInterface $repo, InstallOperation $operation)
{
$package = $operation->getPackage();
$installer = $this->getInstaller($package->getType());
$installer->install($repo, $package);
$this->markForNotification($package);
}







public function update(RepositoryInterface $repo, UpdateOperation $operation)
{
$initial = $operation->getInitialPackage();
$target = $operation->getTargetPackage();

$initialType = $initial->getType();
$targetType = $target->getType();

if ($initialType === $targetType) {
$installer = $this->getInstaller($initialType);
$installer->update($repo, $initial, $target);
$this->markForNotification($target);
} else {
$this->getInstaller($initialType)->uninstall($repo, $initial);
$this->getInstaller($targetType)->install($repo, $target);
}
}







public function uninstall(RepositoryInterface $repo, UninstallOperation $operation)
{
$package = $operation->getPackage();
$installer = $this->getInstaller($package->getType());
$installer->uninstall($repo, $package);
}







public function markAliasInstalled(RepositoryInterface $repo, MarkAliasInstalledOperation $operation)
{
$package = $operation->getPackage();

if (!$repo->hasPackage($package)) {
$repo->addPackage(clone $package);
}
}







public function markAliasUninstalled(RepositoryInterface $repo, MarkAliasUninstalledOperation $operation)
{
$package = $operation->getPackage();

$repo->removePackage($package);
}







public function getInstallPath(PackageInterface $package)
{
$installer = $this->getInstaller($package->getType());

return $installer->getInstallPath($package);
}

public function notifyInstalls()
{
foreach ($this->notifiablePackages as $repoUrl => $packages) {

 if (strpos($repoUrl, '%package%')) {
foreach ($packages as $package) {
$url = str_replace('%package%', $package->getPrettyName(), $repoUrl);

$params = array(
'version' => $package->getPrettyVersion(),
'version_normalized' => $package->getVersion(),
);
$opts = array('http' =>
array(
'method' => 'POST',
'header' => array('Content-type: application/x-www-form-urlencoded'),
'content' => http_build_query($params, '', '&'),
'timeout' => 3,
)
);

$context = StreamContextFactory::getContext($url, $opts);
@file_get_contents($url, false, $context);
}

continue;
}

$postData = array('downloads' => array());
foreach ($packages as $package) {
$postData['downloads'][] = array(
'name' => $package->getPrettyName(),
'version' => $package->getVersion(),
);
}

$opts = array('http' =>
array(
'method' => 'POST',
'header' => array('Content-Type: application/json'),
'content' => json_encode($postData),
'timeout' => 6,
)
);

$context = StreamContextFactory::getContext($repoUrl, $opts);
@file_get_contents($repoUrl, false, $context);
}

$this->reset();
}

private function markForNotification(PackageInterface $package)
{
if ($package->getNotificationUrl()) {
$this->notifiablePackages[$package->getNotificationUrl()][$package->getName()] = $package;
}
}
}
<?php











namespace Composer\Installer;

use Composer\Package\PackageInterface;
use Composer\Repository\InstalledRepositoryInterface;







interface InstallerInterface
{






public function supports($packageType);









public function isInstalled(InstalledRepositoryInterface $repo, PackageInterface $package);







public function install(InstalledRepositoryInterface $repo, PackageInterface $package);










public function update(InstalledRepositoryInterface $repo, PackageInterface $initial, PackageInterface $target);







public function uninstall(InstalledRepositoryInterface $repo, PackageInterface $package);







public function getInstallPath(PackageInterface $package);
}
<?php











namespace Composer\Installer;

use Composer\Composer;
use Composer\Package\Package;
use Composer\IO\IOInterface;
use Composer\Repository\InstalledRepositoryInterface;
use Composer\Package\PackageInterface;






class InstallerInstaller extends LibraryInstaller
{
private $installationManager;
private static $classCounter = 0;








public function __construct(IOInterface $io, Composer $composer, $type = 'library')
{
parent::__construct($io, $composer, 'composer-installer');
$this->installationManager = $composer->getInstallationManager();

$repo = $composer->getRepositoryManager()->getLocalRepository();
foreach ($repo->getPackages() as $package) {
if ('composer-installer' === $package->getType()) {
$this->registerInstaller($package);
}
}
}




public function install(InstalledRepositoryInterface $repo, PackageInterface $package)
{
$extra = $package->getExtra();
if (empty($extra['class'])) {
throw new \UnexpectedValueException('Error while installing '.$package->getPrettyName().', composer-installer packages should have a class defined in their extra key to be usable.');
}

parent::install($repo, $package);
$this->registerInstaller($package);
}




public function update(InstalledRepositoryInterface $repo, PackageInterface $initial, PackageInterface $target)
{
$extra = $target->getExtra();
if (empty($extra['class'])) {
throw new \UnexpectedValueException('Error while installing '.$target->getPrettyName().', composer-installer packages should have a class defined in their extra key to be usable.');
}

parent::update($repo, $initial, $target);
$this->registerInstaller($target);
}

private function registerInstaller(PackageInterface $package)
{
$downloadPath = $this->getInstallPath($package);

$extra = $package->getExtra();
$classes = is_array($extra['class']) ? $extra['class'] : array($extra['class']);

$generator = $this->composer->getAutoloadGenerator();
$map = $generator->parseAutoloads(array(array($package, $downloadPath)), new Package('dummy', '1.0.0.0', '1.0.0'));
$classLoader = $generator->createLoader($map);
$classLoader->register();

foreach ($classes as $class) {
if (class_exists($class, false)) {
$code = file_get_contents($classLoader->findFile($class));
$code = preg_replace('{^(\s*)class\s+(\S+)}mi', '$1class $2_composer_tmp'.self::$classCounter, $code);
eval('?>'.$code);
$class .= '_composer_tmp'.self::$classCounter;
self::$classCounter++;
}

$installer = new $class($this->io, $this->composer);
$this->installationManager->addInstaller($installer);
}
}
}
<?php











namespace Composer\Console;

use Symfony\Component\Console\Application as BaseApplication;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Formatter\OutputFormatter;
use Composer\Command;
use Composer\Command\Helper\DialogHelper;
use Composer\Composer;
use Composer\Factory;
use Composer\IO\IOInterface;
use Composer\IO\ConsoleIO;
use Composer\Json\JsonValidationException;
use Composer\Util\ErrorHandler;








class Application extends BaseApplication
{



protected $composer;




protected $io;

private static $logo = '   ______
  / ____/___  ____ ___  ____  ____  ________  _____
 / /   / __ \/ __ `__ \/ __ \/ __ \/ ___/ _ \/ ___/
/ /___/ /_/ / / / / / / /_/ / /_/ (__  )  __/ /
\____/\____/_/ /_/ /_/ .___/\____/____/\___/_/
                    /_/
';

public function __construct()
{
if (function_exists('ini_set')) {
ini_set('xdebug.show_exception_trace', false);
ini_set('xdebug.scream', false);

}
if (function_exists('date_default_timezone_set') && function_exists('date_default_timezone_get')) {
date_default_timezone_set(@date_default_timezone_get());
}

ErrorHandler::register();
parent::__construct('Composer', Composer::VERSION);
}




public function run(InputInterface $input = null, OutputInterface $output = null)
{
if (null === $output) {
$styles = Factory::createAdditionalStyles();
$formatter = new OutputFormatter(null, $styles);
$output = new ConsoleOutput(ConsoleOutput::VERBOSITY_NORMAL, null, $formatter);
}

return parent::run($input, $output);
}




public function doRun(InputInterface $input, OutputInterface $output)
{
$this->io = new ConsoleIO($input, $output, $this->getHelperSet());

if (version_compare(PHP_VERSION, '5.3.2', '<')) {
$output->writeln('<warning>Composer only officially supports PHP 5.3.2 and above, you will most likely encounter problems with your PHP '.PHP_VERSION.', upgrading is strongly recommended.</warning>');
}

if (defined('COMPOSER_DEV_WARNING_TIME') && $this->getCommandName($input) !== 'self-update' && $this->getCommandName($input) !== 'selfupdate') {
if (time() > COMPOSER_DEV_WARNING_TIME) {
$output->writeln(sprintf('<warning>Warning: This development build of composer is over 30 days old. It is recommended to update it by running "%s self-update" to get the latest version.</warning>', $_SERVER['PHP_SELF']));
}
}

if (getenv('COMPOSER_NO_INTERACTION')) {
$input->setInteractive(false);
}

if ($input->hasParameterOption('--profile')) {
$startTime = microtime(true);
$this->io->enableDebugging($startTime);
}

if ($newWorkDir = $this->getNewWorkingDir($input)) {
$oldWorkingDir = getcwd();
chdir($newWorkDir);
}

$result = parent::doRun($input, $output);

if (isset($oldWorkingDir)) {
chdir($oldWorkingDir);
}

if (isset($startTime)) {
$output->writeln('<info>Memory usage: '.round(memory_get_usage() / 1024 / 1024, 2).'MB (peak: '.round(memory_get_peak_usage() / 1024 / 1024, 2).'MB), time: '.round(microtime(true) - $startTime, 2).'s');
}

return $result;
}





private function getNewWorkingDir(InputInterface $input)
{
$workingDir = $input->getParameterOption(array('--working-dir', '-d'));
if (false !== $workingDir && !is_dir($workingDir)) {
throw new \RuntimeException('Invalid working directory specified.');
}

return $workingDir;
}




public function renderException($exception, $output)
{
try {
$composer = $this->getComposer(false);
if ($composer) {
$config = $composer->getConfig();

$minSpaceFree = 1024*1024;
if ((($df = @disk_free_space($dir = $config->get('home'))) !== false && $df < $minSpaceFree)
|| (($df = @disk_free_space($dir = $config->get('vendor-dir'))) !== false && $df < $minSpaceFree)
) {
$output->writeln('<error>The disk hosting '.$dir.' is full, this may be the cause of the following exception</error>');
}
}
} catch (\Exception $e) {}

return parent::renderException($exception, $output);
}






public function getComposer($required = true)
{
if (null === $this->composer) {
try {
$this->composer = Factory::create($this->io);
} catch (\InvalidArgumentException $e) {
if ($required) {
$this->io->write($e->getMessage());
exit(1);
}
} catch (JsonValidationException $e) {
$errors = ' - ' . implode(PHP_EOL . ' - ', $e->getErrors());
$message = $e->getMessage() . ':' . PHP_EOL . $errors;
throw new JsonValidationException($message);
}

}

return $this->composer;
}




public function getIO()
{
return $this->io;
}

public function getHelp()
{
return self::$logo . parent::getHelp();
}




protected function getDefaultCommands()
{
$commands = parent::getDefaultCommands();
$commands[] = new Command\AboutCommand();
$commands[] = new Command\ConfigCommand();
$commands[] = new Command\DependsCommand();
$commands[] = new Command\InitCommand();
$commands[] = new Command\InstallCommand();
$commands[] = new Command\CreateProjectCommand();
$commands[] = new Command\UpdateCommand();
$commands[] = new Command\SearchCommand();
$commands[] = new Command\ValidateCommand();
$commands[] = new Command\ShowCommand();
$commands[] = new Command\RequireCommand();
$commands[] = new Command\DumpAutoloadCommand();
$commands[] = new Command\StatusCommand();
$commands[] = new Command\ArchiveCommand();
$commands[] = new Command\DiagnoseCommand();
$commands[] = new Command\RunScriptCommand();
$commands[] = new Command\LicensesCommand();
$commands[] = new Command\GlobalCommand();

if ('phar:' === substr(__FILE__, 0, 5)) {
$commands[] = new Command\SelfUpdateCommand();
}

return $commands;
}




protected function getDefaultInputDefinition()
{
$definition = parent::getDefaultInputDefinition();
$definition->addOption(new InputOption('--profile', null, InputOption::VALUE_NONE, 'Display timing and memory usage information'));
$definition->addOption(new InputOption('--working-dir', '-d', InputOption::VALUE_REQUIRED, 'If specified, use the given directory as working directory.'));

return $definition;
}




protected function getDefaultHelperSet()
{
$helperSet = parent::getDefaultHelperSet();

$helperSet->set(new DialogHelper());

return $helperSet;
}
}
<?php











namespace Composer\Console;

use Symfony\Component\Console\Formatter\OutputFormatter;




class HtmlOutputFormatter extends OutputFormatter
{
private static $availableForegroundColors = array(
30 => 'black',
31 => 'red',
32 => 'green',
33 => 'yellow',
34 => 'blue',
35 => 'magenta',
36 => 'cyan',
37 => 'white'
);
private static $availableBackgroundColors = array(
40 => 'black',
41 => 'red',
42 => 'green',
43 => 'yellow',
44 => 'blue',
45 => 'magenta',
46 => 'cyan',
47 => 'white'
);
private static $availableOptions = array(
1 => 'bold',
4 => 'underscore',

 
 
 );




public function __construct(array $styles = array())
{
parent::__construct(true, $styles);
}

public function format($message)
{
$formatted = parent::format($message);

return preg_replace_callback("{\033\[([0-9;]+)m(.*?)\033\[0m}s", array($this, 'formatHtml'), $formatted);
}

private function formatHtml($matches)
{
$out = '<span style="';
foreach (explode(';', $matches[1]) as $code) {
if (isset(self::$availableForegroundColors[$code])) {
$out .= 'color:'.self::$availableForegroundColors[$code].';';
} elseif (isset(self::$availableBackgroundColors[$code])) {
$out .= 'background-color:'.self::$availableBackgroundColors[$code].';';
} elseif (isset(self::$availableOptions[$code])) {
switch (self::$availableOptions[$code]) {
case 'bold':
$out .= 'font-weight:bold;';
break;

case 'underscore':
$out .= 'text-decoration:underline;';
break;
}
}
}

return $out . '">'.$matches[2].'</span>';
}
}
<?php











namespace Composer\Autoload;

use Composer\Config;
use Composer\Installer\InstallationManager;
use Composer\Package\AliasPackage;
use Composer\Package\PackageInterface;
use Composer\Repository\InstalledRepositoryInterface;
use Composer\Util\Filesystem;
use Composer\Script\EventDispatcher;
use Composer\Script\ScriptEvents;





class AutoloadGenerator
{



private $eventDispatcher;

public function __construct(EventDispatcher $eventDispatcher)
{
$this->eventDispatcher = $eventDispatcher;
}

public function dump(Config $config, InstalledRepositoryInterface $localRepo, PackageInterface $mainPackage, InstallationManager $installationManager, $targetDir, $scanPsr0Packages = false, $suffix = '')
{
$this->eventDispatcher->dispatch(ScriptEvents::PRE_AUTOLOAD_DUMP);

$filesystem = new Filesystem();
$filesystem->ensureDirectoryExists($config->get('vendor-dir'));
$basePath = $filesystem->normalizePath(getcwd());
$vendorPath = $filesystem->normalizePath(realpath($config->get('vendor-dir')));
$useGlobalIncludePath = (bool) $config->get('use-include-path');
$targetDir = $vendorPath.'/'.$targetDir;
$filesystem->ensureDirectoryExists($targetDir);

$vendorPathCode = $filesystem->findShortestPathCode(realpath($targetDir), $vendorPath, true);
$vendorPathCode52 = str_replace('__DIR__', 'dirname(__FILE__)', $vendorPathCode);
$vendorPathToTargetDirCode = $filesystem->findShortestPathCode($vendorPath, realpath($targetDir), true);

$appBaseDirCode = $filesystem->findShortestPathCode($vendorPath, $basePath, true);
$appBaseDirCode = str_replace('__DIR__', '$vendorDir', $appBaseDirCode);

$namespacesFile = <<<EOF
<?php

// autoload_namespaces.php generated by Composer

\$vendorDir = $vendorPathCode52;
\$baseDir = $appBaseDirCode;

return array(

EOF;

$packageMap = $this->buildPackageMap($installationManager, $mainPackage, $localRepo->getCanonicalPackages());
$autoloads = $this->parseAutoloads($packageMap, $mainPackage);

foreach ($autoloads['psr-0'] as $namespace => $paths) {
$exportedPaths = array();
foreach ($paths as $path) {
$exportedPaths[] = $this->getPathCode($filesystem, $basePath, $vendorPath, $path);
}
$exportedPrefix = var_export($namespace, true);
$namespacesFile .= "    $exportedPrefix => ";
$namespacesFile .= "array(".implode(', ', $exportedPaths)."),\n";
}
$namespacesFile .= ");\n";

$classmapFile = <<<EOF
<?php

// autoload_classmap.php generated by Composer

\$vendorDir = $vendorPathCode52;
\$baseDir = $appBaseDirCode;

return array(

EOF;


 $targetDirLoader = null;
$mainAutoload = $mainPackage->getAutoload();
if ($mainPackage->getTargetDir() && !empty($mainAutoload['psr-0'])) {
$levels = count(explode('/', $filesystem->normalizePath($mainPackage->getTargetDir())));
$prefixes = implode(', ', array_map(function ($prefix) {
return var_export($prefix, true);
}, array_keys($mainAutoload['psr-0'])));
$baseDirFromTargetDirCode = $filesystem->findShortestPathCode($targetDir, $basePath, true);

$targetDirLoader = <<<EOF

    public static function autoload(\$class)
    {
        \$dir = $baseDirFromTargetDirCode . '/';
        \$prefixes = array($prefixes);
        foreach (\$prefixes as \$prefix) {
            if (0 !== strpos(\$class, \$prefix)) {
                continue;
            }
            \$path = \$dir . implode('/', array_slice(explode('\\\\', \$class), $levels)).'.php';
            if (!\$path = stream_resolve_include_path(\$path)) {
                return false;
            }
            require \$path;

            return true;
        }
    }

EOF;
}


 $classMap = array();
if ($scanPsr0Packages) {
foreach ($autoloads['psr-0'] as $namespace => $paths) {
foreach ($paths as $dir) {
$dir = $filesystem->normalizePath($filesystem->isAbsolutePath($dir) ? $dir : $basePath.'/'.$dir);
if (!is_dir($dir)) {
continue;
}
$whitelist = sprintf(
'{%s/%s.+(?<!(?<!/)Test\.php)$}',
preg_quote($dir),
strpos($namespace, '_') === false ? preg_quote(strtr($namespace, '\\', '/')) : ''
);
foreach (ClassMapGenerator::createMap($dir, $whitelist) as $class => $path) {
if ('' === $namespace || 0 === strpos($class, $namespace)) {
if (!isset($classMap[$class])) {
$path = $this->getPathCode($filesystem, $basePath, $vendorPath, $path);
$classMap[$class] = $path.",\n";
}
}
}
}
}
}

$autoloads['classmap'] = new \RecursiveIteratorIterator(new \RecursiveArrayIterator($autoloads['classmap']));
foreach ($autoloads['classmap'] as $dir) {
foreach (ClassMapGenerator::createMap($dir) as $class => $path) {
$path = $this->getPathCode($filesystem, $basePath, $vendorPath, $path);
$classMap[$class] = $path.",\n";
}
}

ksort($classMap);
foreach ($classMap as $class => $code) {
$classmapFile .= '    '.var_export($class, true).' => '.$code;
}
$classmapFile .= ");\n";

if (!$suffix) {
$suffix = md5(uniqid('', true));
}

file_put_contents($targetDir.'/autoload_namespaces.php', $namespacesFile);
file_put_contents($targetDir.'/autoload_classmap.php', $classmapFile);
if ($includePathFile = $this->getIncludePathsFile($packageMap, $filesystem, $basePath, $vendorPath, $vendorPathCode52, $appBaseDirCode)) {
file_put_contents($targetDir.'/include_paths.php', $includePathFile);
}
if ($includeFilesFile = $this->getIncludeFilesFile($autoloads['files'], $filesystem, $basePath, $vendorPath, $vendorPathCode52, $appBaseDirCode)) {
file_put_contents($targetDir.'/autoload_files.php', $includeFilesFile);
}
file_put_contents($vendorPath.'/autoload.php', $this->getAutoloadFile($vendorPathToTargetDirCode, $suffix));
file_put_contents($targetDir.'/autoload_real.php', $this->getAutoloadRealFile(true, true, (bool) $includePathFile, $targetDirLoader, (bool) $includeFilesFile, $vendorPathCode, $appBaseDirCode, $suffix, $useGlobalIncludePath));


 
 $sourceLoader = fopen(__DIR__.'/ClassLoader.php', 'r');
$targetLoader = fopen($targetDir.'/ClassLoader.php', 'w+');
stream_copy_to_stream($sourceLoader, $targetLoader);
fclose($sourceLoader);
fclose($targetLoader);
unset($sourceLoader, $targetLoader);

$this->eventDispatcher->dispatch(ScriptEvents::POST_AUTOLOAD_DUMP);
}

public function buildPackageMap(InstallationManager $installationManager, PackageInterface $mainPackage, array $packages)
{

 $packageMap = array(array($mainPackage, ''));

foreach ($packages as $package) {
if ($package instanceof AliasPackage) {
continue;
}

$packageMap[] = array(
$package,
$installationManager->getInstallPath($package)
);
}

return $packageMap;
}








public function parseAutoloads(array $packageMap, PackageInterface $mainPackage)
{
$mainPackageMap = array_shift($packageMap);
$sortedPackageMap = $this->sortPackageMap($packageMap);
$sortedPackageMap[] = $mainPackageMap;
array_unshift($packageMap, $mainPackageMap);

$psr0 = $this->parseAutoloadsType($packageMap, 'psr-0', $mainPackage);
$classmap = $this->parseAutoloadsType($sortedPackageMap, 'classmap', $mainPackage);
$files = $this->parseAutoloadsType($sortedPackageMap, 'files', $mainPackage);

krsort($psr0);

return array('psr-0' => $psr0, 'classmap' => $classmap, 'files' => $files);
}







public function createLoader(array $autoloads)
{
$loader = new ClassLoader();

if (isset($autoloads['psr-0'])) {
foreach ($autoloads['psr-0'] as $namespace => $path) {
$loader->add($namespace, $path);
}
}

return $loader;
}

protected function getIncludePathsFile(array $packageMap, Filesystem $filesystem, $basePath, $vendorPath, $vendorPathCode, $appBaseDirCode)
{
$includePaths = array();

foreach ($packageMap as $item) {
list($package, $installPath) = $item;

if (null !== $package->getTargetDir() && strlen($package->getTargetDir()) > 0) {
$installPath = substr($installPath, 0, -strlen('/'.$package->getTargetDir()));
}

foreach ($package->getIncludePaths() as $includePath) {
$includePath = trim($includePath, '/');
$includePaths[] = empty($installPath) ? $includePath : $installPath.'/'.$includePath;
}
}

if (!$includePaths) {
return;
}

$includePathsCode = '';
foreach ($includePaths as $path) {
$includePathsCode .= "    " . $this->getPathCode($filesystem, $basePath, $vendorPath, $path) . ",\n";
}

return <<<EOF
<?php

// include_paths.php generated by Composer

\$vendorDir = $vendorPathCode;
\$baseDir = $appBaseDirCode;

return array(
$includePathsCode);

EOF;
}

protected function getIncludeFilesFile(array $files, Filesystem $filesystem, $basePath, $vendorPath, $vendorPathCode, $appBaseDirCode)
{
$filesCode = '';
$files = new \RecursiveIteratorIterator(new \RecursiveArrayIterator($files));
foreach ($files as $functionFile) {
$filesCode .= '    '.$this->getPathCode($filesystem, $basePath, $vendorPath, $functionFile).",\n";
}

if (!$filesCode) {
return FALSE;
}

return <<<EOF
<?php

// autoload_files.php generated by Composer

\$vendorDir = $vendorPathCode;
\$baseDir = $appBaseDirCode;

return array(
$filesCode);
EOF;
}

protected function getPathCode(Filesystem $filesystem, $basePath, $vendorPath, $path)
{
if (!$filesystem->isAbsolutePath($path)) {
$path = $basePath . '/' . $path;
}
$path = $filesystem->normalizePath($path);

$baseDir = '';
if (strpos($path, $vendorPath) === 0) {
$path = substr($path, strlen($vendorPath));
$baseDir = '$vendorDir';

if ($path !== false) {
$baseDir .= " . ";
}
} else {
$path = $filesystem->normalizePath($filesystem->findShortestPath($basePath, $path, true));
if (!$filesystem->isAbsolutePath($path)) {
$baseDir = '$baseDir . ';
$path = '/' . $path;
}
}

if (preg_match('/\.phar$/', $path)) {
$baseDir = "'phar://' . " . $baseDir;
}

return $baseDir . (($path !== false) ? var_export($path, true) : "");
}

protected function getAutoloadFile($vendorPathToTargetDirCode, $suffix)
{
return <<<AUTOLOAD
<?php

// autoload.php generated by Composer

require_once $vendorPathToTargetDirCode . '/autoload_real.php';

return ComposerAutoloaderInit$suffix::getLoader();

AUTOLOAD;
}

protected function getAutoloadRealFile($usePSR0, $useClassMap, $useIncludePath, $targetDirLoader, $useIncludeFiles, $vendorPathCode, $appBaseDirCode, $suffix, $useGlobalIncludePath)
{

 
 
 
 
 

$file = <<<HEADER
<?php

// autoload_real.php generated by Composer

class ComposerAutoloaderInit$suffix
{
    private static \$loader;

    public static function loadClassLoader(\$class)
    {
        if ('Composer\\Autoload\\ClassLoader' === \$class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::\$loader) {
            return self::\$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit$suffix', 'loadClassLoader'), true, true);
        self::\$loader = \$loader = new \\Composer\\Autoload\\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit$suffix', 'loadClassLoader'));

        \$vendorDir = $vendorPathCode;
        \$baseDir = $appBaseDirCode;


HEADER;

if ($useIncludePath) {
$file .= <<<'INCLUDE_PATH'
        $includePaths = require __DIR__ . '/include_paths.php';
        array_push($includePaths, get_include_path());
        set_include_path(join(PATH_SEPARATOR, $includePaths));


INCLUDE_PATH;
}

if ($usePSR0) {
$file .= <<<'PSR0'
        $map = require __DIR__ . '/autoload_namespaces.php';
        foreach ($map as $namespace => $path) {
            $loader->set($namespace, $path);
        }


PSR0;
}

if ($useClassMap) {
$file .= <<<'CLASSMAP'
        $classMap = require __DIR__ . '/autoload_classmap.php';
        if ($classMap) {
            $loader->addClassMap($classMap);
        }


CLASSMAP;
}

if ($useGlobalIncludePath) {
$file .= <<<'INCLUDEPATH'
        $loader->setUseIncludePath(true);

INCLUDEPATH;
}

if ($targetDirLoader) {
$file .= <<<REGISTER_AUTOLOAD
        spl_autoload_register(array('ComposerAutoloaderInit$suffix', 'autoload'), true, true);


REGISTER_AUTOLOAD;

}

$file .= <<<REGISTER_LOADER
        \$loader->register(true);


REGISTER_LOADER;

if ($useIncludeFiles) {
$file .= <<<INCLUDE_FILES
        foreach (require __DIR__ . '/autoload_files.php' as \$file) {
            require \$file;
        }


INCLUDE_FILES;

}

$file .= <<<METHOD_FOOTER
        return \$loader;
    }

METHOD_FOOTER;

$file .= $targetDirLoader;

return $file . <<<FOOTER
}

FOOTER;

}

protected function parseAutoloadsType(array $packageMap, $type, PackageInterface $mainPackage)
{
$autoloads = array();

foreach ($packageMap as $item) {
list($package, $installPath) = $item;

$autoload = $package->getAutoload();


 if (!isset($autoload[$type]) || !is_array($autoload[$type])) {
continue;
}
if (null !== $package->getTargetDir() && $package !== $mainPackage) {
$installPath = substr($installPath, 0, -strlen('/'.$package->getTargetDir()));
}

foreach ($autoload[$type] as $namespace => $paths) {
foreach ((array) $paths as $path) {

 if ($type === 'files' && $package === $mainPackage && $package->getTargetDir() && !is_readable($installPath.'/'.$path)) {
$targetDir = str_replace('\\<dirsep\\>', '[\\\\/]', preg_quote(str_replace(array('/', '\\'), '<dirsep>', $package->getTargetDir())));
$path = ltrim(preg_replace('{^'.$targetDir.'}', '', ltrim($path, '\\/')), '\\/');
}


 if ($type === 'files' && $package !== $mainPackage && $package->getTargetDir() && !is_readable($installPath.'/'.$path)) {
$path = $package->getTargetDir() . '/' . $path;
}


 if ($type === 'classmap' && $package === $mainPackage && $package->getTargetDir() && !is_readable($installPath.'/'.$path)) {
$targetDir = str_replace('\\<dirsep\\>', '[\\\\/]', preg_quote(str_replace(array('/', '\\'), '<dirsep>', $package->getTargetDir())));
$path = ltrim(preg_replace('{^'.$targetDir.'}', '', ltrim($path, '\\/')), '\\/');
}


 if ($type === 'classmap' && $package !== $mainPackage && $package->getTargetDir() && !is_readable($installPath.'/'.$path)) {
$path = $package->getTargetDir() . '/' . $path;
}

if (empty($installPath)) {
$autoloads[$namespace][] = empty($path) ? '.' : $path;
} else {
$autoloads[$namespace][] = $installPath.'/'.$path;
}
}
}
}

return $autoloads;
}

protected function sortPackageMap(array $packageMap)
{
$positions = array();
$names = array();
$indexes = array();

foreach ($packageMap as $position => $item) {
$mainName = $item[0]->getName();
$names = array_merge(array_fill_keys($item[0]->getNames(), $mainName), $names);
$names[$mainName] = $mainName;
$indexes[$mainName] = $positions[$mainName] = $position;
}

foreach ($packageMap as $item) {
$position = $positions[$item[0]->getName()];
foreach (array_merge($item[0]->getRequires(), $item[0]->getDevRequires()) as $link) {
$target = $link->getTarget();
if (!isset($names[$target])) {
continue;
}

$target = $names[$target];
if ($positions[$target] <= $position) {
continue;
}

foreach ($positions as $key => $value) {
if ($value >= $position) {
break;
}
$positions[$key]--;
}

$positions[$target] = $position - 1;
}
asort($positions);
}

$sortedPackageMap = array();
foreach (array_keys($positions) as $packageName) {
$sortedPackageMap[] = $packageMap[$indexes[$packageName]];
}

return $sortedPackageMap;
}
}
<?php












namespace Composer\Autoload;
use Symfony\Component\Finder\Finder;






class ClassMapGenerator
{






public static function dump($dirs, $file)
{
$maps = array();

foreach ($dirs as $dir) {
$maps = array_merge($maps, static::createMap($dir));
}

file_put_contents($file, sprintf('<?php return %s;', var_export($maps, true)));
}











public static function createMap($path, $whitelist = null)
{
if (is_string($path)) {
if (is_file($path)) {
$path = array(new \SplFileInfo($path));
} elseif (is_dir($path)) {
$path = Finder::create()->files()->followLinks()->name('/\.(php|inc)$/')->in($path);
} else {
throw new \RuntimeException(
'Could not scan for classes inside "'.$path.
'" which does not appear to be a file nor a folder'
);
}
}

$map = array();

foreach ($path as $file) {
$filePath = $file->getRealPath();

if (!in_array(pathinfo($filePath, PATHINFO_EXTENSION), array('php', 'inc'))) {
continue;
}

if ($whitelist && !preg_match($whitelist, strtr($filePath, '\\', '/'))) {
continue;
}

$classes = self::findClasses($filePath);

foreach ($classes as $class) {
$map[$class] = $filePath;
}
}

return $map;
}








private static function findClasses($path)
{
$traits = version_compare(PHP_VERSION, '5.4', '<') ? '' : '|trait';

try {
$contents = php_strip_whitespace($path);
} catch (\Exception $e) {
throw new \RuntimeException('Could not scan for classes inside '.$path.": \n".$e->getMessage(), 0, $e);
}


 if (!preg_match('{\b(?:class|interface'.$traits.')\s}i', $contents)) {
return array();
}


 $contents = preg_replace('{<<<\'?(\w+)\'?(?:\r\n|\n|\r)(?:.*?)(?:\r\n|\n|\r)\\1(?=\r\n|\n|\r|;)}s', 'null', $contents);

 $contents = preg_replace('{"[^"\\\\]*(\\\\.[^"\\\\]*)*"|\'[^\'\\\\]*(\\\\.[^\'\\\\]*)*\'}s', 'null', $contents);

 if (substr($contents, 0, 2) !== '<?') {
$contents = preg_replace('{^.+?<\?}s', '<?', $contents);
}

 $contents = preg_replace('{\?>.+<\?}s', '?><?', $contents);

 $pos = strrpos($contents, '?>');
if (false !== $pos && false === strpos(substr($contents, $pos), '<?')) {
$contents = substr($contents, 0, $pos);
}

preg_match_all('{
            (?:
                 \b(?<![\$:>])(?P<type>class|interface'.$traits.') \s+ (?P<name>[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)
               | \b(?<![\$:>])(?P<ns>namespace) (?P<nsname>\s+[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*(?:\s*\\\\\s*[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)*)? \s*[\{;]
            )
        }ix', $contents, $matches);

$classes = array();
$namespace = '';

for ($i = 0, $len = count($matches['type']); $i < $len; $i++) {
if (!empty($matches['ns'][$i])) {
$namespace = str_replace(array(' ', "\t", "\r", "\n"), '', $matches['nsname'][$i]) . '\\';
} else {
$classes[] = ltrim($namespace . $matches['name'][$i], '\\');
}
}

return $classes;
}
}
<?php











namespace Composer;

use Composer\Autoload\AutoloadGenerator;
use Composer\DependencyResolver\DefaultPolicy;
use Composer\DependencyResolver\Operation\UpdateOperation;
use Composer\DependencyResolver\Operation\InstallOperation;
use Composer\DependencyResolver\Operation\UninstallOperation;
use Composer\DependencyResolver\Operation\OperationInterface;
use Composer\DependencyResolver\Pool;
use Composer\DependencyResolver\Request;
use Composer\DependencyResolver\Rule;
use Composer\DependencyResolver\Solver;
use Composer\DependencyResolver\SolverProblemsException;
use Composer\Downloader\DownloadManager;
use Composer\Installer\InstallationManager;
use Composer\Config;
use Composer\Installer\NoopInstaller;
use Composer\IO\IOInterface;
use Composer\Json\JsonFile;
use Composer\Package\AliasPackage;
use Composer\Package\Link;
use Composer\Package\LinkConstraint\VersionConstraint;
use Composer\Package\Locker;
use Composer\Package\PackageInterface;
use Composer\Package\RootPackageInterface;
use Composer\Repository\CompositeRepository;
use Composer\Repository\InstalledArrayRepository;
use Composer\Repository\InstalledFilesystemRepository;
use Composer\Repository\PlatformRepository;
use Composer\Repository\RepositoryInterface;
use Composer\Repository\RepositoryManager;
use Composer\Script\EventDispatcher;
use Composer\Script\ScriptEvents;






class Installer
{



protected $io;




protected $config;




protected $package;




protected $downloadManager;




protected $repositoryManager;




protected $locker;




protected $installationManager;




protected $eventDispatcher;




protected $autoloadGenerator;

protected $preferSource = false;
protected $preferDist = false;
protected $optimizeAutoloader = false;
protected $devMode = false;
protected $dryRun = false;
protected $verbose = false;
protected $update = false;
protected $runScripts = true;
protected $updateWhitelist = null;




protected $suggestedPackages;




protected $additionalInstalledRepository;














public function __construct(IOInterface $io, Config $config, RootPackageInterface $package, DownloadManager $downloadManager, RepositoryManager $repositoryManager, Locker $locker, InstallationManager $installationManager, EventDispatcher $eventDispatcher, AutoloadGenerator $autoloadGenerator)
{
$this->io = $io;
$this->config = $config;
$this->package = $package;
$this->downloadManager = $downloadManager;
$this->repositoryManager = $repositoryManager;
$this->locker = $locker;
$this->installationManager = $installationManager;
$this->eventDispatcher = $eventDispatcher;
$this->autoloadGenerator = $autoloadGenerator;
}




public function run()
{
if ($this->dryRun) {
$this->verbose = true;
$this->runScripts = false;
$this->installationManager->addInstaller(new NoopInstaller);
$this->mockLocalRepositories($this->repositoryManager);
}


 
 $devRepo = new InstalledFilesystemRepository(new JsonFile($this->config->get('vendor-dir').'/composer/installed_dev.json'));
if ($devRepo->getPackages()) {
$this->io->write('<warning>BC Notice: Removing old dev packages to migrate to the new require-dev handling.</warning>');
foreach ($devRepo->getPackages() as $package) {
if ($this->installationManager->isPackageInstalled($devRepo, $package)) {
$this->installationManager->uninstall($devRepo, new UninstallOperation($package));
}
}
unlink($this->config->get('vendor-dir').'/composer/installed_dev.json');
}
unset($devRepo, $package);


if ($this->preferSource) {
$this->downloadManager->setPreferSource(true);
}
if ($this->preferDist) {
$this->downloadManager->setPreferDist(true);
}


 
 
 $installedRootPackage = clone $this->package;
$installedRootPackage->setRequires(array());
$installedRootPackage->setDevRequires(array());


 $localRepo = $this->repositoryManager->getLocalRepository();
$platformRepo = new PlatformRepository();
$repos = array(
$localRepo,
new InstalledArrayRepository(array($installedRootPackage)),
$platformRepo,
);
$installedRepo = new CompositeRepository($repos);
if ($this->additionalInstalledRepository) {
$installedRepo->addRepository($this->additionalInstalledRepository);
}

$aliases = $this->getRootAliases();
$this->aliasPlatformPackages($platformRepo, $aliases);

if ($this->runScripts) {

 $eventName = $this->update ? ScriptEvents::PRE_UPDATE_CMD : ScriptEvents::PRE_INSTALL_CMD;
$this->eventDispatcher->dispatchCommandEvent($eventName, $this->devMode);
}

try {
$this->suggestedPackages = array();
if (!$this->doInstall($localRepo, $installedRepo, $platformRepo, $aliases, $this->devMode)) {
return false;
}
} catch (\Exception $e) {
$this->installationManager->notifyInstalls();

throw $e;
}
$this->installationManager->notifyInstalls();


 foreach ($this->suggestedPackages as $suggestion) {
$target = $suggestion['target'];
foreach ($installedRepo->getPackages() as $package) {
if (in_array($target, $package->getNames())) {
continue 2;
}
}

$this->io->write($suggestion['source'].' suggests installing '.$suggestion['target'].' ('.$suggestion['reason'].')');
}

if (!$this->dryRun) {

 if ($this->update || !$this->locker->isLocked()) {
$localRepo->reload();


 
 $devPackages = ($this->devMode || !$this->package->getDevRequires()) ? array() : null;


 if ($this->devMode && $this->package->getDevRequires()) {
$policy = $this->createPolicy();
$pool = $this->createPool();
$pool->addRepository($installedRepo, $aliases);


 $request = $this->createRequest($pool, $this->package, $platformRepo);
$request->updateAll();
foreach ($this->package->getRequires() as $link) {
$request->install($link->getTarget(), $link->getConstraint());
}

$solver = new Solver($policy, $pool, $installedRepo);
$ops = $solver->solve($request);
foreach ($ops as $op) {
if ($op->getJobType() === 'uninstall') {
$devPackages[] = $op->getPackage();
}
}
}

$platformReqs = $this->extractPlatformRequirements($this->package->getRequires());
$platformDevReqs = $this->devMode ? $this->extractPlatformRequirements($this->package->getDevRequires()) : array();

$updatedLock = $this->locker->setLockData(
array_diff($localRepo->getCanonicalPackages(), (array) $devPackages),
$devPackages,
$platformReqs,
$platformDevReqs,
$aliases,
$this->package->getMinimumStability(),
$this->package->getStabilityFlags()
);
if ($updatedLock) {
$this->io->write('<info>Writing lock file</info>');
}
}


 $this->io->write('<info>Generating autoload files</info>');
$this->autoloadGenerator->dump($this->config, $localRepo, $this->package, $this->installationManager, 'composer', $this->optimizeAutoloader);

if ($this->runScripts) {

 $eventName = $this->update ? ScriptEvents::POST_UPDATE_CMD : ScriptEvents::POST_INSTALL_CMD;
$this->eventDispatcher->dispatchCommandEvent($eventName, $this->devMode);
}
}

return true;
}

protected function doInstall($localRepo, $installedRepo, $platformRepo, $aliases, $withDevReqs)
{

 $lockedRepository = null;
$repositories = null;


 $installFromLock = false;
if (!$this->update && $this->locker->isLocked()) {
$installFromLock = true;
try {
$lockedRepository = $this->locker->getLockedRepository($withDevReqs);
} catch (\RuntimeException $e) {

 if ($this->package->getDevRequires()) {
throw $e;
}

 $lockedRepository = $this->locker->getLockedRepository();
}
}

$this->whitelistUpdateDependencies(
$localRepo,
$withDevReqs,
$this->package->getRequires(),
$this->package->getDevRequires()
);

$this->io->write('<info>Loading composer repositories with package information</info>');


 $policy = $this->createPolicy();
$pool = $this->createPool();
$pool->addRepository($installedRepo, $aliases);
if ($installFromLock) {
$pool->addRepository($lockedRepository, $aliases);
}

if (!$installFromLock) {
$repositories = $this->repositoryManager->getRepositories();
foreach ($repositories as $repository) {
$pool->addRepository($repository, $aliases);
}
}


 $request = $this->createRequest($pool, $this->package, $platformRepo);

if (!$installFromLock) {

 $removedUnstablePackages = array();
foreach ($localRepo->getPackages() as $package) {
if (
!$pool->isPackageAcceptable($package->getNames(), $package->getStability())
&& $this->installationManager->isPackageInstalled($localRepo, $package)
) {
$removedUnstablePackages[$package->getName()] = true;
$request->remove($package->getName(), new VersionConstraint('=', $package->getVersion()));
}
}
}

if ($this->update) {
$this->io->write('<info>Updating dependencies'.($withDevReqs?' (including require-dev)':'').'</info>');

$request->updateAll();

if ($withDevReqs) {
$links = array_merge($this->package->getRequires(), $this->package->getDevRequires());
} else {
$links = $this->package->getRequires();
}

foreach ($links as $link) {
$request->install($link->getTarget(), $link->getConstraint());
}


 
 if ($this->updateWhitelist) {
if ($this->locker->isLocked()) {
try {
$currentPackages = $this->locker->getLockedRepository($withDevReqs)->getPackages();
} catch (\RuntimeException $e) {

 $currentPackages = $this->locker->getLockedRepository()->getPackages();
}
} else {
$currentPackages = $installedRepo->getPackages();
}


 $candidates = array();
foreach ($links as $link) {
$candidates[$link->getTarget()] = true;
}
foreach ($localRepo->getPackages() as $package) {
$candidates[$package->getName()] = true;
}


 foreach ($candidates as $candidate => $dummy) {
foreach ($currentPackages as $curPackage) {
if ($curPackage->getName() === $candidate) {
if (!$this->isUpdateable($curPackage) && !isset($removedUnstablePackages[$curPackage->getName()])) {
$constraint = new VersionConstraint('=', $curPackage->getVersion());
$request->install($curPackage->getName(), $constraint);
}
break;
}
}
}
}
} elseif ($installFromLock) {
$this->io->write('<info>Installing dependencies'.($withDevReqs?' (including require-dev)':'').' from lock file</info>');

if (!$this->locker->isFresh()) {
$this->io->write('<warning>Warning: The lock file is not up to date with the latest changes in composer.json. You may be getting outdated dependencies. Run update to update them.</warning>');
}

foreach ($lockedRepository->getPackages() as $package) {
$version = $package->getVersion();
if (isset($aliases[$package->getName()][$version])) {
$version = $aliases[$package->getName()][$version]['alias_normalized'];
}
$constraint = new VersionConstraint('=', $version);
$constraint->setPrettyString($package->getPrettyVersion());
$request->install($package->getName(), $constraint);
}

foreach ($this->locker->getPlatformRequirements($withDevReqs) as $link) {
$request->install($link->getTarget(), $link->getConstraint());
}
} else {
$this->io->write('<info>Installing dependencies'.($withDevReqs?' (including require-dev)':'').'</info>');

if ($withDevReqs) {
$links = array_merge($this->package->getRequires(), $this->package->getDevRequires());
} else {
$links = $this->package->getRequires();
}

foreach ($links as $link) {
$request->install($link->getTarget(), $link->getConstraint());
}
}


 $this->processDevPackages($localRepo, $pool, $policy, $repositories, $lockedRepository, $installFromLock, 'force-links');


 $solver = new Solver($policy, $pool, $installedRepo);
try {
$operations = $solver->solve($request);
} catch (SolverProblemsException $e) {
$this->io->write('<error>Your requirements could not be resolved to an installable set of packages.</error>');
$this->io->write($e->getMessage());

return false;
}


 $operations = $this->processDevPackages($localRepo, $pool, $policy, $repositories, $lockedRepository, $installFromLock, 'force-updates', $operations);


 if (!$operations) {
$this->io->write('Nothing to install or update');
}

$operations = $this->moveCustomInstallersToFront($operations);

foreach ($operations as $operation) {

 if ('install' === $operation->getJobType()) {
foreach ($operation->getPackage()->getSuggests() as $target => $reason) {
$this->suggestedPackages[] = array(
'source' => $operation->getPackage()->getPrettyName(),
'target' => $target,
'reason' => $reason,
);
}
}

$event = 'Composer\Script\ScriptEvents::PRE_PACKAGE_'.strtoupper($operation->getJobType());
if (defined($event) && $this->runScripts) {
$this->eventDispatcher->dispatchPackageEvent(constant($event), $this->devMode, $operation);
}


 if (!$installFromLock) {
$package = null;
if ('update' === $operation->getJobType()) {
$package = $operation->getTargetPackage();
} elseif ('install' === $operation->getJobType()) {
$package = $operation->getPackage();
}
if ($package && $package->isDev()) {
$references = $this->package->getReferences();
if (isset($references[$package->getName()])) {
$package->setSourceReference($references[$package->getName()]);
$package->setDistReference($references[$package->getName()]);
}
}
}


 if ($this->dryRun && false === strpos($operation->getJobType(), 'Alias')) {
$this->io->write('  - ' . $operation);
$this->io->write('');
} elseif ($this->io->isDebug() && false !== strpos($operation->getJobType(), 'Alias')) {
$this->io->write('  - ' . $operation);
$this->io->write('');
}

$this->installationManager->execute($localRepo, $operation);


 if ($this->verbose && $this->io->isVeryVerbose() && in_array($operation->getJobType(), array('install', 'update'))) {
$reason = $operation->getReason();
if ($reason instanceof Rule) {
switch ($reason->getReason()) {
case Rule::RULE_JOB_INSTALL:
$this->io->write('    REASON: Required by root: '.$reason->getRequiredPackage());
$this->io->write('');
break;
case Rule::RULE_PACKAGE_REQUIRES:
$this->io->write('    REASON: '.$reason->getPrettyString());
$this->io->write('');
break;
}
}
}

$event = 'Composer\Script\ScriptEvents::POST_PACKAGE_'.strtoupper($operation->getJobType());
if (defined($event) && $this->runScripts) {
$this->eventDispatcher->dispatchPackageEvent(constant($event), $this->devMode, $operation);
}

if (!$this->dryRun) {
$localRepo->write();
}
}

return true;
}















private function moveCustomInstallersToFront(array $operations)
{
$installerOps = array();
foreach ($operations as $idx => $op) {
if ($op instanceof InstallOperation) {
$package = $op->getPackage();
} else if ($op instanceof UpdateOperation) {
$package = $op->getTargetPackage();
} else {
continue;
}

if ($package->getRequires() === array() && $package->getType() === 'composer-installer') {
$installerOps[] = $op;
unset($operations[$idx]);
}
}

return array_merge($installerOps, $operations);
}

private function createPool()
{
$minimumStability = $this->package->getMinimumStability();
$stabilityFlags = $this->package->getStabilityFlags();

if (!$this->update && $this->locker->isLocked()) {
$minimumStability = $this->locker->getMinimumStability();
$stabilityFlags = $this->locker->getStabilityFlags();
}

return new Pool($minimumStability, $stabilityFlags);
}

private function createPolicy()
{
return new DefaultPolicy($this->package->getPreferStable());
}

private function createRequest(Pool $pool, RootPackageInterface $rootPackage, PlatformRepository $platformRepo)
{
$request = new Request($pool);

$constraint = new VersionConstraint('=', $rootPackage->getVersion());
$constraint->setPrettyString($rootPackage->getPrettyVersion());
$request->install($rootPackage->getName(), $constraint);

$fixedPackages = $platformRepo->getPackages();
if ($this->additionalInstalledRepository) {
$additionalFixedPackages = $this->additionalInstalledRepository->getPackages();
$fixedPackages = array_merge($fixedPackages, $additionalFixedPackages);
}


 
 $provided = $rootPackage->getProvides();
foreach ($fixedPackages as $package) {
$constraint = new VersionConstraint('=', $package->getVersion());
$constraint->setPrettyString($package->getPrettyVersion());


 if ($package->getRepository() !== $platformRepo
|| !isset($provided[$package->getName()])
|| !$provided[$package->getName()]->getConstraint()->matches($constraint)
) {
$request->install($package->getName(), $constraint);
}
}

return $request;
}

private function processDevPackages($localRepo, $pool, $policy, $repositories, $lockedRepository, $installFromLock, $task, array $operations = null)
{
if ($task === 'force-updates' && null === $operations) {
throw new \InvalidArgumentException('Missing operations argument');
}
if ($task === 'force-links') {
$operations = array();
}

foreach ($localRepo->getCanonicalPackages() as $package) {

 if (!$package->isDev()) {
continue;
}


 foreach ($operations as $operation) {
if (('update' === $operation->getJobType() && $operation->getInitialPackage()->equals($package))
|| ('uninstall' === $operation->getJobType() && $operation->getPackage()->equals($package))
) {
continue 2;
}
}


 if ($installFromLock) {
foreach ($lockedRepository->findPackages($package->getName()) as $lockedPackage) {
if ($lockedPackage->isDev() && $lockedPackage->getVersion() === $package->getVersion()) {
if ($task === 'force-links') {
$package->setRequires($lockedPackage->getRequires());
$package->setConflicts($lockedPackage->getConflicts());
$package->setProvides($lockedPackage->getProvides());
$package->setReplaces($lockedPackage->getReplaces());
} elseif ($task === 'force-updates') {
if (($lockedPackage->getSourceReference() && $lockedPackage->getSourceReference() !== $package->getSourceReference())
|| ($lockedPackage->getDistReference() && $lockedPackage->getDistReference() !== $package->getDistReference())
) {
$operations[] = new UpdateOperation($package, $lockedPackage);
}
}

break;
}
}
} else {

 if ($this->update) {

 if ($this->updateWhitelist && !$this->isUpdateable($package)) {
continue;
}


 $matches = $pool->whatProvides($package->getName(), new VersionConstraint('=', $package->getVersion()));
foreach ($matches as $index => $match) {

 if (!in_array($match->getRepository(), $repositories, true)) {
unset($matches[$index]);
continue;
}


 if ($match->getName() !== $package->getName()) {
unset($matches[$index]);
continue;
}

$matches[$index] = $match->getId();
}


 if ($matches && $matches = $policy->selectPreferedPackages($pool, array(), $matches)) {
$newPackage = $pool->literalToPackage($matches[0]);

if ($task === 'force-links' && $newPackage) {
$package->setRequires($newPackage->getRequires());
$package->setConflicts($newPackage->getConflicts());
$package->setProvides($newPackage->getProvides());
$package->setReplaces($newPackage->getReplaces());
}

if ($task === 'force-updates' && $newPackage && (
(($newPackage->getSourceReference() && $newPackage->getSourceReference() !== $package->getSourceReference())
|| ($newPackage->getDistReference() && $newPackage->getDistReference() !== $package->getDistReference())
)
)) {
$operations[] = new UpdateOperation($package, $newPackage);
}
}
}

if ($task === 'force-updates') {

 $references = $this->package->getReferences();

if (isset($references[$package->getName()]) && $references[$package->getName()] !== $package->getSourceReference()) {

 $operations[] = new UpdateOperation($package, clone $package);
}
}
}
}

return $operations;
}

private function getRootAliases()
{
if (!$this->update && $this->locker->isLocked()) {
$aliases = $this->locker->getAliases();
} else {
$aliases = $this->package->getAliases();
}

$normalizedAliases = array();

foreach ($aliases as $alias) {
$normalizedAliases[$alias['package']][$alias['version']] = array(
'alias' => $alias['alias'],
'alias_normalized' => $alias['alias_normalized']
);
}

return $normalizedAliases;
}

private function aliasPlatformPackages(PlatformRepository $platformRepo, $aliases)
{
foreach ($aliases as $package => $versions) {
foreach ($versions as $version => $alias) {
$packages = $platformRepo->findPackages($package, $version);
foreach ($packages as $package) {
$aliasPackage = new AliasPackage($package, $alias['alias_normalized'], $alias['alias']);
$aliasPackage->setRootPackageAlias(true);
$platformRepo->addPackage($aliasPackage);
}
}
}
}

private function isUpdateable(PackageInterface $package)
{
if (!$this->updateWhitelist) {
throw new \LogicException('isUpdateable should only be called when a whitelist is present');
}

foreach ($this->updateWhitelist as $whiteListedPattern => $void) {
$cleanedWhiteListedPattern = str_replace('\\*', '.*', preg_quote($whiteListedPattern));

if (preg_match("{^".$cleanedWhiteListedPattern."$}i", $package->getName())) {
return true;
}
}

return false;
}

private function extractPlatformRequirements($links)
{
$platformReqs = array();
foreach ($links as $link) {
if (preg_match(PlatformRepository::PLATFORM_PACKAGE_REGEX, $link->getTarget())) {
$platformReqs[$link->getTarget()] = $link->getPrettyConstraint();
}
}

return $platformReqs;
}













private function whitelistUpdateDependencies($localRepo, $devMode, array $rootRequires, array $rootDevRequires)
{
if (!$this->updateWhitelist) {
return;
}

$requiredPackageNames = array();
foreach (array_merge($rootRequires, $rootDevRequires) as $require) {
$requiredPackageNames[] = $require->getTarget();
}

if ($devMode) {
$rootRequires = array_merge($rootRequires, $rootDevRequires);
}

$skipPackages = array();
foreach ($rootRequires as $require) {
$skipPackages[$require->getTarget()] = true;
}

$pool = new Pool;
$pool->addRepository($localRepo);

$seen = array();

foreach ($this->updateWhitelist as $packageName => $void) {
$packageQueue = new \SplQueue;

$depPackages = $pool->whatProvides($packageName);
if (count($depPackages) == 0 && !in_array($packageName, $requiredPackageNames) && !in_array($packageName, array('nothing', 'lock'))) {
$this->io->write('<warning>Package "' . $packageName . '" listed for update is not installed. Ignoring.<warning>');
}

foreach ($depPackages as $depPackage) {
$packageQueue->enqueue($depPackage);
}

while (!$packageQueue->isEmpty()) {
$package = $packageQueue->dequeue();
if (isset($seen[$package->getId()])) {
continue;
}

$seen[$package->getId()] = true;
$this->updateWhitelist[$package->getName()] = true;

$requires = $package->getRequires();
if ($devMode) {
$requires = array_merge($requires, $package->getDevRequires());
}

foreach ($requires as $require) {
$requirePackages = $pool->whatProvides($require->getTarget());

foreach ($requirePackages as $requirePackage) {
if (isset($skipPackages[$requirePackage->getName()])) {
continue;
}
$packageQueue->enqueue($requirePackage);
}
}
}
}
}








private function mockLocalRepositories(RepositoryManager $rm)
{
$packages = array();
foreach ($rm->getLocalRepository()->getPackages() as $package) {
$packages[(string) $package] = clone $package;
}
foreach ($packages as $key => $package) {
if ($package instanceof AliasPackage) {
$alias = (string) $package->getAliasOf();
$packages[$key] = new AliasPackage($packages[$alias], $package->getVersion(), $package->getPrettyVersion());
}
}
$rm->setLocalRepository(
new InstalledArrayRepository($packages)
);
}








public static function create(IOInterface $io, Composer $composer)
{
return new static(
$io,
$composer->getConfig(),
$composer->getPackage(),
$composer->getDownloadManager(),
$composer->getRepositoryManager(),
$composer->getLocker(),
$composer->getInstallationManager(),
$composer->getEventDispatcher(),
$composer->getAutoloadGenerator()
);
}

public function setAdditionalInstalledRepository(RepositoryInterface $additionalInstalledRepository)
{
$this->additionalInstalledRepository = $additionalInstalledRepository;

return $this;
}







public function setDryRun($dryRun = true)
{
$this->dryRun = (boolean) $dryRun;

return $this;
}







public function setPreferSource($preferSource = true)
{
$this->preferSource = (boolean) $preferSource;

return $this;
}







public function setPreferDist($preferDist = true)
{
$this->preferDist = (boolean) $preferDist;

return $this;
}







public function setOptimizeAutoloader($optimizeAutoloader = false)
{
$this->optimizeAutoloader = (boolean) $optimizeAutoloader;

return $this;
}







public function setUpdate($update = true)
{
$this->update = (boolean) $update;

return $this;
}







public function setDevMode($devMode = true)
{
$this->devMode = (boolean) $devMode;

return $this;
}







public function setRunScripts($runScripts = true)
{
$this->runScripts = (boolean) $runScripts;

return $this;
}







public function setConfig(Config $config)
{
$this->config = $config;

return $this;
}







public function setVerbose($verbose = true)
{
$this->verbose = (boolean) $verbose;

return $this;
}








public function setUpdateWhitelist(array $packages)
{
$this->updateWhitelist = array_flip(array_map('strtolower', $packages));

return $this;
}










public function disableCustomInstallers()
{
$this->installationManager->disableCustomInstallers();

return $this;
}
}
<?php

/*
 * This file is part of Composer.
 *
 * (c) Nils Adermann <naderman@naderman.de>
 *     Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Composer\Autoload;

/**
 * ClassLoader implements a PSR-0 class loader
 *
 * See https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md
 *
 *     $loader = new \Composer\Autoload\ClassLoader();
 *
 *     // register classes with namespaces
 *     $loader->add('Symfony\Component', __DIR__.'/component');
 *     $loader->add('Symfony',           __DIR__.'/framework');
 *
 *     // activate the autoloader
 *     $loader->register();
 *
 *     // to enable searching the include path (eg. for PEAR packages)
 *     $loader->setUseIncludePath(true);
 *
 * In this example, if you try to use a class in the Symfony\Component
 * namespace or one of its children (Symfony\Component\Console for instance),
 * the autoloader will first look for the class under the component/
 * directory, and it will then fallback to the framework/ directory if not
 * found before giving up.
 *
 * This class is loosely based on the Symfony UniversalClassLoader.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class ClassLoader
{
    private $prefixes = array();
    private $fallbackDirs = array();
    private $useIncludePath = false;
    private $classMap = array();

    public function getPrefixes()
    {
        return call_user_func_array('array_merge', $this->prefixes);
    }

    public function getFallbackDirs()
    {
        return $this->fallbackDirs;
    }

    public function getClassMap()
    {
        return $this->classMap;
    }

    /**
     * @param array $classMap Class to filename map
     */
    public function addClassMap(array $classMap)
    {
        if ($this->classMap) {
            $this->classMap = array_merge($this->classMap, $classMap);
        } else {
            $this->classMap = $classMap;
        }
    }

    /**
     * Registers a set of classes, merging with any others previously set.
     *
     * @param string       $prefix  The classes prefix
     * @param array|string $paths   The location(s) of the classes
     * @param bool         $prepend Prepend the location(s)
     */
    public function add($prefix, $paths, $prepend = false)
    {
        if (!$prefix) {
            if ($prepend) {
                $this->fallbackDirs = array_merge(
                    (array) $paths,
                    $this->fallbackDirs
                );
            } else {
                $this->fallbackDirs = array_merge(
                    $this->fallbackDirs,
                    (array) $paths
                );
            }

            return;
        }

        $first = $prefix[0];
        if (!isset($this->prefixes[$first][$prefix])) {
            $this->prefixes[$first][$prefix] = (array) $paths;

            return;
        }
        if ($prepend) {
            $this->prefixes[$first][$prefix] = array_merge(
                (array) $paths,
                $this->prefixes[$first][$prefix]
            );
        } else {
            $this->prefixes[$first][$prefix] = array_merge(
                $this->prefixes[$first][$prefix],
                (array) $paths
            );
        }
    }

    /**
     * Registers a set of classes, replacing any others previously set.
     *
     * @param string       $prefix The classes prefix
     * @param array|string $paths  The location(s) of the classes
     */
    public function set($prefix, $paths)
    {
        if (!$prefix) {
            $this->fallbackDirs = (array) $paths;

            return;
        }
        $this->prefixes[substr($prefix, 0, 1)][$prefix] = (array) $paths;
    }

    /**
     * Turns on searching the include path for class files.
     *
     * @param bool $useIncludePath
     */
    public function setUseIncludePath($useIncludePath)
    {
        $this->useIncludePath = $useIncludePath;
    }

    /**
     * Can be used to check if the autoloader uses the include path to check
     * for classes.
     *
     * @return bool
     */
    public function getUseIncludePath()
    {
        return $this->useIncludePath;
    }

    /**
     * Registers this instance as an autoloader.
     *
     * @param bool $prepend Whether to prepend the autoloader or not
     */
    public function register($prepend = false)
    {
        spl_autoload_register(array($this, 'loadClass'), true, $prepend);
    }

    /**
     * Unregisters this instance as an autoloader.
     */
    public function unregister()
    {
        spl_autoload_unregister(array($this, 'loadClass'));
    }

    /**
     * Loads the given class or interface.
     *
     * @param  string    $class The name of the class
     * @return bool|null True if loaded, null otherwise
     */
    public function loadClass($class)
    {
        if ($file = $this->findFile($class)) {
            include $file;

            return true;
        }
    }

    /**
     * Finds the path to the file where the class is defined.
     *
     * @param string $class The name of the class
     *
     * @return string|false The path if found, false otherwise
     */
    public function findFile($class)
    {
        // work around for PHP 5.3.0 - 5.3.2 https://bugs.php.net/50731
        if ('\\' == $class[0]) {
            $class = substr($class, 1);
        }

        if (isset($this->classMap[$class])) {
            return $this->classMap[$class];
        }

        if (false !== $pos = strrpos($class, '\\')) {
            // namespaced class name
            $classPath = strtr(substr($class, 0, $pos), '\\', DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;
            $className = substr($class, $pos + 1);
        } else {
            // PEAR-like class name
            $classPath = null;
            $className = $class;
        }

        $classPath .= strtr($className, '_', DIRECTORY_SEPARATOR) . '.php';

        $first = $class[0];
        if (isset($this->prefixes[$first])) {
            foreach ($this->prefixes[$first] as $prefix => $dirs) {
                if (0 === strpos($class, $prefix)) {
                    foreach ($dirs as $dir) {
                        if (file_exists($dir . DIRECTORY_SEPARATOR . $classPath)) {
                            return $dir . DIRECTORY_SEPARATOR . $classPath;
                        }
                    }
                }
            }
        }

        foreach ($this->fallbackDirs as $dir) {
            if (file_exists($dir . DIRECTORY_SEPARATOR . $classPath)) {
                return $dir . DIRECTORY_SEPARATOR . $classPath;
            }
        }

        if ($this->useIncludePath && $file = stream_resolve_include_path($classPath)) {
            return $file;
        }

        return $this->classMap[$class] = false;
    }
}
[
    "AFL-1.1", "AFL-1.2", "AFL-2.0", "AFL-2.1", "AFL-3.0", "APL-1.0", "Aladdin",
    "ANTLR-PD", "Apache-1.0", "Apache-1.1", "Apache-2.0", "APSL-1.0",
    "APSL-1.1", "APSL-1.2", "APSL-2.0", "Artistic-1.0", "Artistic-2.0", "AAL",
    "BitTorrent-1.0", "BitTorrent-1.1", "BSL-1.0", "BSD-3-Clause-Clear",
    "BSD-2-Clause", "BSD-2-Clause-FreeBSD", "BSD-2-Clause-NetBSD",
    "BSD-3-Clause", "BSD-4-Clause", "BSD-4-Clause-UC", "CECILL-1.0",
    "CECILL-1.1", "CECILL-2.0", "CECILL-B", "CECILL-C", "ClArtistic",
    "CNRI-Python", "CNRI-Python-GPL-Compatible", "CDDL-1.0", "CDDL-1.1",
    "CPAL-1.0", "CPL-1.0", "CATOSL-1.1", "Condor-1.1", "CC-BY-1.0", "CC-BY-2.0",
    "CC-BY-2.5", "CC-BY-3.0", "CC-BY-ND-1.0", "CC-BY-ND-2.0", "CC-BY-ND-2.5",
    "CC-BY-ND-3.0", "CC-BY-NC-1.0", "CC-BY-NC-2.0", "CC-BY-NC-2.5",
    "CC-BY-NC-3.0", "CC-BY-NC-ND-1.0", "CC-BY-NC-ND-2.0", "CC-BY-NC-ND-2.5",
    "CC-BY-NC-ND-3.0", "CC-BY-NC-SA-1.0", "CC-BY-NC-SA-2.0", "CC-BY-NC-SA-2.5",
    "CC-BY-NC-SA-3.0", "CC-BY-SA-1.0", "CC-BY-SA-2.0", "CC-BY-SA-2.5",
    "CC-BY-SA-3.0", "CC0-1.0", "CUA-OPL-1.0", "WTFPL", "EPL-1.0", "eCos-2.0",
    "ECL-1.0", "ECL-2.0", "EFL-1.0", "EFL-2.0", "Entessa", "ErlPL-1.1",
    "EUDatagrid", "EUPL-1.0", "EUPL-1.1", "Fair", "Frameworx-1.0", "FTL",
    "AGPL-3.0", "GFDL-1.1", "GFDL-1.2", "GFDL-1.3", "GPL-1.0", "GPL-1.0+",
    "GPL-2.0", "GPL-2.0+", "GPL-2.0-with-autoconf-exception",
    "GPL-2.0-with-bison-exception", "GPL-2.0-with-classpath-exception",
    "GPL-2.0-with-font-exception", "GPL-2.0-with-GCC-exception", "GPL-3.0",
    "GPL-3.0+", "GPL-3.0-with-autoconf-exception", "GPL-3.0-with-GCC-exception",
    "LGPL-2.1", "LGPL-2.1+", "LGPL-3.0", "LGPL-3.0+", "LGPL-2.0", "LGPL-2.0+",
    "gSOAP-1.3b", "HPND", "IPL-1.0", "Imlib2", "IJG", "Intel", "IPA", "ISC",
    "JSON", "LPPL-1.3a", "LPPL-1.0", "LPPL-1.1", "LPPL-1.2", "LPPL-1.3c",
    "Libpng", "LPL-1.02", "LPL-1.0", "MS-PL", "MS-RL", "MirOS", "MIT",
    "Motosoto", "MPL-1.0", "MPL-1.1", "MPL-2.0",
    "MPL-2.0-no-copyleft-exception", "Multics", "NASA-1.3", "Naumen",
    "NBPL-1.0", "NGPL", "NOSL", "NPL-1.0", "NPL-1.1", "Nokia", "NPOSL-3.0",
    "NTP", "OCLC-2.0", "ODbL-1.0", "PDDL-1.0", "OGTSL", "OLDAP-2.2.2",
    "OLDAP-1.1", "OLDAP-1.2", "OLDAP-1.3", "OLDAP-1.4", "OLDAP-2.0",
    "OLDAP-2.0.1", "OLDAP-2.1", "OLDAP-2.2", "OLDAP-2.2.1", "OLDAP-2.3",
    "OLDAP-2.4", "OLDAP-2.5", "OLDAP-2.6", "OLDAP-2.7", "OPL-1.0", "OSL-1.0",
    "OSL-2.0", "OSL-2.1", "OSL-3.0", "OLDAP-2.8", "OpenSSL", "PHP-3.0",
    "PHP-3.01", "PostgreSQL", "Python-2.0", "QPL-1.0", "RPSL-1.0", "RPL-1.5",
    "RHeCos-1.1", "RSCPL", "Ruby", "SAX-PD", "SGI-B-1.0", "SGI-B-1.1",
    "SGI-B-2.0", "OFL-1.0", "OFL-1.1", "SimPL-2.0", "Sleepycat", "SMLNJ",
    "SugarCRM-1.1.3", "SISSL", "SPL-1.0", "Watcom-1.0", "NCSA", "VSL-1.0",
    "W3C", "WXwindows", "Xnet", "X11", "XFree86-1.1", "YPL-1.0", "YPL-1.1",
    "Zimbra-1.3", "Zlib", "ZPL-1.1", "ZPL-2.0", "ZPL-2.1"
]{
    "name": "Package",
    "type": "object",
    "additionalProperties": false,
    "properties": {
        "name": {
            "type": "string",
            "description": "Package name, including 'vendor-name/' prefix.",
            "required": true
        },
        "type": {
            "description": "Package type, either 'library' for common packages, 'composer-installer' for custom installers, 'metapackage' for empty packages, or a custom type ([a-z0-9-]+) defined by whatever project this package applies to.",
            "type": "string"
        },
        "target-dir": {
            "description": "Forces the package to be installed into the given subdirectory path. This is used for autoloading PSR-0 packages that do not contain their full path. Use forward slashes for cross-platform compatibility.",
            "type": "string"
        },
        "description": {
            "type": "string",
            "description": "Short package description.",
            "required": true
        },
        "keywords": {
            "type": "array",
            "items": {
                "type": "string",
                "description": "A tag/keyword that this package relates to."
            }
        },
        "homepage": {
            "type": "string",
            "description": "Homepage URL for the project.",
            "format": "uri"
        },
        "version": {
            "type": "string",
            "description": "Package version, see http://getcomposer.org/doc/04-schema.md#version for more info on valid schemes."
        },
        "time": {
            "type": "string",
            "description": "Package release date, in 'YYYY-MM-DD' or 'YYYY-MM-DD HH:MM:SS' format."
        },
        "license": {
            "type": ["string", "array"],
            "description": "License name. Or an array of license names."
        },
        "authors": {
            "type": "array",
            "description": "List of authors that contributed to the package. This is typically the main maintainers, not the full list.",
            "items": {
                "type": "object",
                "additionalProperties": false,
                "properties": {
                    "name": {
                        "type": "string",
                        "description": "Full name of the author.",
                        "required": true
                    },
                    "email": {
                        "type": "string",
                        "description": "Email address of the author.",
                        "format": "email"
                    },
                    "homepage": {
                        "type": "string",
                        "description": "Homepage URL for the author.",
                        "format": "uri"
                    },
                    "role": {
                        "type": "string",
                        "description": "Author's role in the project."
                    }
                }
            }
        },
        "require": {
            "type": "object",
            "description": "This is a hash of package name (keys) and version constraints (values) that are required to run this package.",
            "additionalProperties": true
        },
        "replace": {
            "type": "object",
            "description": "This is a hash of package name (keys) and version constraints (values) that can be replaced by this package.",
            "additionalProperties": true
        },
        "conflict": {
            "type": "object",
            "description": "This is a hash of package name (keys) and version constraints (values) that conflict with this package.",
            "additionalProperties": true
        },
        "provide": {
            "type": "object",
            "description": "This is a hash of package name (keys) and version constraints (values) that this package provides in addition to this package's name.",
            "additionalProperties": true
        },
        "require-dev": {
            "type": "object",
            "description": "This is a hash of package name (keys) and version constraints (values) that this package requires for developing it (testing tools and such).",
            "additionalProperties": true
        },
        "suggest": {
            "type": "object",
            "description": "This is a hash of package name (keys) and descriptions (values) that this package suggests work well with it (this will be suggested to the user during installation).",
            "additionalProperties": true
        },
        "config": {
            "type": "object",
            "description": "Composer options.",
            "properties": {
                "process-timeout": {
                    "type": "integer",
                    "description": "The timeout in seconds for process executions, defaults to 300 (5mins)."
                },
                "use-include-path": {
                    "type": "boolean",
                    "description": "If true, the Composer autoloader will also look for classes in the PHP include path."
                },
                "preferred-install": {
                    "type": "string",
                    "description": "The install method Composer will prefer to use, defaults to auto and can be any of source, dist or auto."
                },
                "notify-on-install": {
                    "type": "boolean",
                    "description": "Composer allows repositories to define a notification URL, so that they get notified whenever a package from that repository is installed. This option allows you to disable that behaviour, defaults to true."
                },
                "github-protocols": {
                    "type": "array",
                    "description": "A list of protocols to use for github.com clones, in priority order, defaults to [\"git\", \"https\", \"http\"].",
                    "items": {
                        "type": "string"
                    }
                },
                "github-oauth": {
                    "type": "object",
                    "description": "A hash of domain name => github API oauth tokens, typically {\"github.com\":\"<token>\"}.",
                    "additionalProperties": true
                },
                "vendor-dir": {
                    "type": "string",
                    "description": "The location where all packages are installed, defaults to \"vendor\"."
                },
                "bin-dir": {
                    "type": "string",
                    "description": "The location where all binaries are linked, defaults to \"vendor/bin\"."
                },
                "cache-dir": {
                    "type": "string",
                    "description": "The location where all caches are located, defaults to \"~/.composer/cache\" on *nix and \"%LOCALAPPDATA%\\Composer\" on windows."
                },
                "cache-files-dir": {
                    "type": "string",
                    "description": "The location where files (zip downloads) are cached, defaults to \"{$cache-dir}/files\"."
                },
                "cache-repo-dir": {
                    "type": "string",
                    "description": "The location where repo (git/hg repo clones) are cached, defaults to \"{$cache-dir}/repo\"."
                },
                "cache-vcs-dir": {
                    "type": "string",
                    "description": "The location where vcs infos (git clones, github api calls, etc. when reading vcs repos) are cached, defaults to \"{$cache-dir}/vcs\"."
                },
                "cache-ttl": {
                    "type": "integer",
                    "description": "The default cache time-to-live, defaults to 15552000 (6 months)."
                },
                "cache-files-ttl": {
                    "type": "integer",
                    "description": "The cache time-to-live for files, defaults to the value of cache-ttl."
                },
                "cache-files-maxsize": {
                    "type": ["string", "integer"],
                    "description": "The cache max size for the files cache, defaults to \"300MiB\"."
                },
                "discard-changes": {
                    "type": ["string", "boolean"],
                    "description": "The default style of handling dirty updates, defaults to false and can be any of true, false or \"stash\"."
                }
            }
        },
        "extra": {
            "type": ["object", "array"],
            "description": "Arbitrary extra data that can be used by custom installers, for example, package of type composer-installer must have a 'class' key defining the installer class name.",
            "additionalProperties": true
        },
        "autoload": {
            "type": "object",
            "description": "Description of how the package can be autoloaded.",
            "properties": {
                "psr-0": {
                    "type": "object",
                    "description": "This is a hash of namespaces (keys) and the directories they can be found into (values, can be arrays of paths) by the autoloader.",
                    "additionalProperties": true
                },
                "classmap": {
                    "type": "array",
                    "description": "This is an array of directories that contain classes to be included in the class-map generation process."
                },
                "files": {
                    "type": "array",
                    "description": "This is an array of files that are always required on every request."
                }
            }
        },
        "archive": {
            "type": ["object"],
            "description": "Options for creating package archives for distribution.",
            "properties": {
                "exclude": {
                    "type": "array",
                    "description": "A list of patterns for paths to exclude or include if prefixed with an exclamation mark."
                }
            }
        },
        "repositories": {
            "type": ["object", "array"],
            "description": "A set of additional repositories where packages can be found.",
            "additionalProperties": true
        },
        "minimum-stability": {
            "type": ["string"],
            "description": "The minimum stability the packages must have to be install-able. Possible values are: dev, alpha, beta, RC, stable."
        },
        "prefer-stable": {
            "type": ["boolean"],
            "description": "If set to true, stable packages will be prefered to dev packages when possible, even if the minimum-stability allows unstable packages."
        },
        "bin": {
            "type": ["array"],
            "description": "A set of files that should be treated as binaries and symlinked into bin-dir (from config).",
            "items": {
                "type": "string"
            }
        },
        "include-path": {
            "type": ["array"],
            "description": "DEPRECATED: A list of directories which should get added to PHP's include path. This is only present to support legacy projects, and all new code should preferably use autoloading.",
            "items": {
                "type": "string"
            }
        },
        "scripts": {
            "type": ["object"],
            "description": "Scripts listeners that will be executed before/after some events.",
            "properties": {
                "pre-install-cmd": {
                    "type": ["array", "string"],
                    "description": "Occurs before the install command is executed, contains one or more Class::method callables or shell commands."
                },
                "post-install-cmd": {
                    "type": ["array", "string"],
                    "description": "Occurs after the install command is executed, contains one or more Class::method callables or shell commands."
                },
                "pre-update-cmd": {
                    "type": ["array", "string"],
                    "description": "Occurs before the update command is executed, contains one or more Class::method callables or shell commands."
                },
                "post-update-cmd": {
                    "type": ["array", "string"],
                    "description": "Occurs after the update command is executed, contains one or more Class::method callables or shell commands."
                },
                "pre-status-cmd": {
                    "type": ["array", "string"],
                    "description": "Occurs before the status command is executed, contains one or more Class::method callables or shell commands."
                },
                "post-status-cmd": {
                    "type": ["array", "string"],
                    "description": "Occurs after the status command is executed, contains one or more Class::method callables or shell commands."
                },
                "pre-package-install": {
                    "type": ["array", "string"],
                    "description": "Occurs before a package is installed, contains one or more Class::method callables or shell commands."
                },
                "post-package-install": {
                    "type": ["array", "string"],
                    "description": "Occurs after a package is installed, contains one or more Class::method callables or shell commands."
                },
                "pre-package-update": {
                    "type": ["array", "string"],
                    "description": "Occurs before a package is updated, contains one or more Class::method callables or shell commands."
                },
                "post-package-update": {
                    "type": ["array", "string"],
                    "description": "Occurs after a package is updated, contains one or more Class::method callables or shell commands."
                },
                "pre-package-uninstall": {
                    "type": ["array", "string"],
                    "description": "Occurs before a package has been uninstalled, contains one or more Class::method callables or shell commands."
                },
                "post-package-uninstall": {
                    "type": ["array", "string"],
                    "description": "Occurs after a package has been uninstalled, contains one or more Class::method callables or shell commands."
                },
                "pre-autoload-dump": {
                    "type": ["array", "string"],
                    "description": "Occurs before the autoloader is dumped, contains one or more Class::method callables or shell commands."
                },
                "post-autoload-dump": {
                    "type": ["array", "string"],
                    "description": "Occurs after the autoloader is dumped, contains one or more Class::method callables or shell commands."
                },
                "post-root-package-install": {
                    "type": ["array", "string"],
                    "description": "Occurs after the root-package is installed, contains one or more Class::method callables or shell commands."
                },
                "post-create-project-cmd": {
                    "type": ["array", "string"],
                    "description": "Occurs after the create-project command is executed, contains one or more Class::method callables or shell commands."
                }
            }
        },
        "support": {
            "type": "object",
            "properties": {
                "email": {
                    "type": "string",
                    "description": "Email address for support.",
                    "format": "email"
                },
                "issues": {
                    "type": "string",
                    "description": "URL to the Issue Tracker.",
                    "format": "uri"
                },
                "forum": {
                    "type": "string",
                    "description": "URL to the Forum.",
                    "format": "uri"
                },
                "wiki": {
                    "type": "string",
                    "description": "URL to the Wiki.",
                    "format": "uri"
                },
                "irc": {
                    "type": "string",
                    "description": "IRC channel for support, as irc://server/channel.",
                    "format": "uri"
                },
                "source": {
                    "type": "string",
                    "description": "URL to browse or download the sources.",
                    "format": "uri"
                }
            }
        }
    }
}
MZ�       ��  �       @                                   �   � �	�!�L�!This program cannot be run in DOS mode.
$       �,�;�B�;�B�;�B�2�מ:�B�2���-�B�2�ƞ9�B�2�ў?�B�a9�8�B�;�C��B�2�Ȟ:�B�2�֞:�B�2�Ӟ:�B�Rich;�B�        PE  L �MoO        � 	  
         8           @                      `     ?�   @�                           �"  P    @                      P  p   !                             8!  @               �                           .text   	      
                    `.rdata  �	       
                 @  @.data   �   0                    @  �.rsrc       @                    @  @.reloc  �   P      "              @  B                                                                                                                                                                                                                                                                                                                                                        j$��@ �x  j�� @ �e� ���E�PV�  @ �EЃ��PV� @ �M��X @ �e� �E�P�5H @ �L @ YY�5\ @ �E�P�5` @ �D @ YY���P @ �M���M��T @ 3��H  �; 0@ u���  h�@ �  �l3@ �$40@ �5h3@ �40@ h$0@ h(0@ h 0@ �� @ ���00@ ��}j�  Y�jh"@ �  3ۉ]�d�   �p�]俀3@ SVW�0 @ ;�t;�u3�F�u��h�  �4 @ ��3�F�|3@ ;�u
j�\  Y�;�|3@ ��u,�5|3@ h� @ h� @ �  YY��t�E�������   ��   �5<0@ �|3@ ;�uh� @ h� @ �l  YY�|3@    9]�uSW�8 @ 9�3@ th�3@ �  Y��t
SjS��3@ �$0@ �� @ ��5$0@ �5(0@ �5 0@ �������80@ 9,0@ u7P�� @ �E��	�M�PQ�  YYËe�E�80@ 3�9,0@ uP�h @ 9<0@ u�� @ �E������80@ ��  øMZ  f9  @ t3��M�< @ ��  @ �8PE  u��H��  t��  uՃ��   v�3�9��   ��xtv�3�9��   ����j�,0@ �p @ j��l @ YY��3@ ��3@ �� @ �t3@ ��� @ �p3@ ��� @ � �x3@ �V  �  �=0@  uh�@ �� @ Y�g  �=0@ �u	j��� @ Y3���{  ������U���(  �H1@ �D1@ �@1@ �<1@ �581@ �=41@ f�`1@ f�T1@ f�01@ f�,1@ f�%(1@ f�-$1@ ��X1@ �E �L1@ �E�P1@ �E�\1@ ��������0@   �P1@ �L0@ �@0@ 	 ��D0@    � 0@ �������0@ ������� @ ��0@ j�?  Yj �  @ h!@ �$ @ �=�0@  uj�  Yh	 ��( @ P�, @ �Ë�U��E� �8csm�u*�xu$�@= �t=!�t="�t= @�u��  3�]� hH@ �  @ 3���%� @ jh("@ �b  �5�3@ �5� @ ��Y�E���u�u�� @ Y�gj�  Y�e� �5�3@ �։E��5�3@ ��YY�E��E�P�E�P�u�5l @ ��YP�U  �E��u��֣�3@ �u��փ���3@ �E������	   �E��  �j�  YË�U���u�N��������YH]Ë�V��!@ ��!@ W��;�s���t�Ѓ�;�r�_^Ë�V�"@ �"@ W��;�s���t�Ѓ�;�r�_^��%� @ ���̋�U��M�MZ  f9t3�]ËA<��8PE  u�3ҹ  f9H��]�����������̋�U��E�H<��ASV�q3�W�D��v�}�H;�r	�X�;�r
B��(;�r�3�_^[]������������̋�U��j�hH"@ he@ d�    P��SVW� 0@ 1E�3�P�E�d�    �e��E�    h  @ �*�������tU�E-  @ Ph  @ �P�������t;�@$���Ѓ��E������M�d�    Y_^[��]ËE��3�=  ���Ëe��E�����3��M�d�    Y_^[��]���%� @ �%� @ ��he@ d�5    �D$�l$�l$+�SVW� 0@ 1E�3�P�e��u��E��E������E��E�d�    ËM�d�    Y__^[��]QË�U���u�u�u�uh�@ h 0@ ��   ��]Ë�Vh   h   3�V��   ����tVVVVV��   ��^�3�Ë�U���� 0@ �e� �e� SW�N�@��  ��;�t��t	�У0@ �`V�E�P�< @ �u�3u�� @ 3�� @ 3�� @ 3��E�P� @ �E�3E�3�;�u�O�@����u������5 0@ �։50@ ^_[���%t @ �%x @ �%| @ �%� @ �%� @ �%� @ �%� @ �%� @ �%� @ Pd�5    �D$+d$SVW�(�� 0@ 3�P�E��u��E������E�d�    ËM�d�    Y__^[��]QËM�3�����������M��%T @ �T$�B�J�3������J�3������l"@ �s���                                                                                                                                                                                                                                                     �#  �#  �#  �)  r)  b)  H)  4)  )  �(  �(  �(  �(  �(  �(  �)      �#  �$  %  �%  &  d&  �&  �$      ('  �'  �'  �'  �'  (  ((  6(  �'  H(  Z(  t(  �(  '  '   '  �'  �'  l'  ^'  R'  F'  >'  >(  0'  �'  �)          �@         W@ �@                     �MoO       l   �!  �  @0@ �0@ bad allocation      H                                                            0@ �!@    RSDSь���J�!���LZ    c:\users\seld\documents\visual studio 2010\Projects\hiddeninp\Release\hiddeninp.pdb     e  �                  ����    ����    ����@ @     ����    ����    ����    :@     ����    ����    �����@ �@ �����@ "�   d"@                        �"          �#      $#          �&  D   H#          (  h                       �#  �#  �#  �)  r)  b)  H)  4)  )  �(  �(  �(  �(  �(  �(  �)      �#  �$  %  �%  &  d&  �&  �$      ('  �'  �'  �'  �'  (  ((  6(  �'  H(  Z(  t(  �(  '  '   '  �'  �'  l'  ^'  R'  F'  >'  >(  0'  �'  �)      �GetConsoleMode  �SetConsoleMode  ;GetStdHandle  KERNEL32.dll   ??$?6DU?$char_traits@D@std@@V?$allocator@D@1@@std@@YAAAV?$basic_ostream@DU?$char_traits@D@std@@@0@AAV10@ABV?$basic_string@DU?$char_traits@D@std@@V?$allocator@D@2@@0@@Z �?cout@std@@3V?$basic_ostream@DU?$char_traits@D@std@@@1@A  J?cin@std@@3V?$basic_istream@DU?$char_traits@D@std@@@1@A � ??$getline@DU?$char_traits@D@std@@V?$allocator@D@2@@std@@YAAAV?$basic_istream@DU?$char_traits@D@std@@@0@AAV10@AAV?$basic_string@DU?$char_traits@D@std@@V?$allocator@D@2@@0@@Z ??6?$basic_ostream@DU?$char_traits@D@std@@@std@@QAEAAV01@P6AAAV01@AAV01@@Z@Z  _??1?$basic_string@DU?$char_traits@D@std@@V?$allocator@D@2@@std@@QAE@XZ  {??0?$basic_string@DU?$char_traits@D@std@@V?$allocator@D@2@@std@@QAE@XZ  �?endl@std@@YAAAV?$basic_ostream@DU?$char_traits@D@std@@@1@AAV21@@Z  MSVCP90.dll _amsg_exit  � __getmainargs ,_cexit  |_exit f _XcptFilter �exit  � __initenv _initterm _initterm_e <_configthreadlocale � __setusermatherr  _adjust_fdiv  � __p__commode  � __p__fmode  j_encode_pointer � __set_app_type  K_crt_debugger_hook  C ?terminate@@YAXXZ MSVCR90.dll �_unlock � __dllonexit v_lock _onexit `_decode_pointer s_except_handler4_common _invoke_watson  ?_controlfp_s  �InterlockedExchange !Sleep �InterlockedCompareExchange  -TerminateProcess  �GetCurrentProcess >UnhandledExceptionFilter  SetUnhandledExceptionFilter �IsDebuggerPresent TQueryPerformanceCounter fGetTickCount  �GetCurrentThreadId  �GetCurrentProcessId OGetSystemTimeAsFileTime s __CxxFrameHandler3                                                    N�@���D������������   $!@                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         �   8  �                 P  �                 h  �              	  �                 	  �   �@  (  �      �C  V  �      (4   V S _ V E R S I O N _ I N F O     ���                                          �   S t r i n g F i l e I n f o   b   0 4 0 9 0 4 b 0   � Q  F i l e D e s c r i p t i o n     R e a d s   f r o m   s t d i n   w i t h o u t   l e a k i n g   i n f o   t o   t h e   t e r m i n a l   a n d   o u t p u t s   b a c k   t o   s t d o u t     6   F i l e V e r s i o n     1 ,   0 ,   0 ,   0     8   I n t e r n a l N a m e   h i d d e n i n p u t   P   L e g a l C o p y r i g h t   J o r d i   B o g g i a n o   -   2 0 1 2   H   O r i g i n a l F i l e n a m e   h i d d e n i n p u t . e x e   :   P r o d u c t N a m e     H i d d e n   I n p u t     :   P r o d u c t V e r s i o n   1 ,   0 ,   0 ,   0     D    V a r F i l e I n f o     $    T r a n s l a t i o n     	�<assembly xmlns="urn:schemas-microsoft-com:asm.v1" manifestVersion="1.0">
  <trustInfo xmlns="urn:schemas-microsoft-com:asm.v3">
    <security>
      <requestedPrivileges>
        <requestedExecutionLevel level="asInvoker" uiAccess="false"></requestedExecutionLevel>
      </requestedPrivileges>
    </security>
  </trustInfo>
  <dependency>
    <dependentAssembly>
      <assemblyIdentity type="win32" name="Microsoft.VC90.CRT" version="9.0.21022.8" processorArchitecture="x86" publicKeyToken="1fc8b3b9a1e18e3b"></assemblyIdentity>
    </dependentAssembly>
  </dependency>
</assembly>PAPADDINGXXPADDINGPADDINGXXPADDINGPADDINGXXPADDINGPADDINGXXPADDINGPADDINGXXPADDINGPADDINGXXPADDINGPADDINGXXPADDINGPADDINGXXPADDINGPADDINGXXPADDINGPADDINGXXPADDINGPADDINGXXPADDINGPADDINGXXPADDINGPADDINGXXPADDINGPADDINGXXPADDINGPADDINGXXPADDINGPADDINGXXPADDINGPADDINGXXPADDINGPADDINGXXPADDINGPADDINGXXPADDINGPADDINGXXPADDINGPADDINGXXPADDINGPADDINGXXPADDINGPADDINGXXPADDINGPADDINGXXPADDINGPADDINGXXPADDINGPADDINGXXPADDINGPADDINGXXPADDINGPADDINGXXPADDINGPADDINGXXPADDINGPADDINGXXPADDING   @  00!0/080F0L0T0^0d0n0{0�0�0�0�0�0�0�0�0�0�0�0�0�01#1-1@1J1O1T1v1{1�1�1�1�1�1�1�1�1�1�1�1�1�1�12"2*23292A2M2_2j2p2�2�2�2�2�2�2�2�2�2�2�2333%303N3T3Z3`3f3l3s3z3�3�3�3�3�3�3�3�3�3�3�3�3�3�3�3�34444%4;4B4�4�4�4�4�4�4�4�4�4�45!5^5c5�5�5�5H6M6_6}6�6�6 777*7w7|7�7�7�7�7888=8E8P8V8\8b8h8n8t8z8�8�8�89      $   �0�0�01 1t1x12 2@2\2`2h2t2 0     0                                                                                                                                                  <?php










namespace Symfony\Component\Process;

use Symfony\Component\Process\Exception\RuntimeException;












class PhpProcess extends Process
{
private $executableFinder;












public function __construct($script, $cwd = null, array $env = array(), $timeout = 60, array $options = array())
{
parent::__construct(null, $cwd, $env, $script, $timeout, $options);

$this->executableFinder = new PhpExecutableFinder();
}






public function setPhpBinary($php)
{
$this->setCommandLine($php);
}




public function start($callback = null)
{
if (null === $this->getCommandLine()) {
if (false === $php = $this->executableFinder->find()) {
throw new RuntimeException('Unable to find the PHP executable.');
}
$this->setCommandLine($php);
}

parent::start($callback);
}
}
<?php










namespace Symfony\Component\Process;







class ExecutableFinder
{
private $suffixes = array('.exe', '.bat', '.cmd', '.com');






public function setSuffixes(array $suffixes)
{
$this->suffixes = $suffixes;
}






public function addSuffix($suffix)
{
$this->suffixes[] = $suffix;
}










public function find($name, $default = null, array $extraDirs = array())
{
if (ini_get('open_basedir')) {
$searchPath = explode(PATH_SEPARATOR, getenv('open_basedir'));
$dirs = array();
foreach ($searchPath as $path) {
if (is_dir($path)) {
$dirs[] = $path;
} else {
$file = str_replace(dirname($path), '', $path);
if ($file == $name && is_executable($path)) {
return $path;
}
}
}
} else {
$dirs = array_merge(
explode(PATH_SEPARATOR, getenv('PATH') ?: getenv('Path')),
$extraDirs
);
}

$suffixes = array('');
if (defined('PHP_WINDOWS_VERSION_BUILD')) {
$pathExt = getenv('PATHEXT');
$suffixes = $pathExt ? explode(PATH_SEPARATOR, $pathExt) : $this->suffixes;
}
foreach ($suffixes as $suffix) {
foreach ($dirs as $dir) {
if (is_file($file = $dir.DIRECTORY_SEPARATOR.$name.$suffix) && (defined('PHP_WINDOWS_VERSION_BUILD') || is_executable($file))) {
return $file;
}
}
}

return $default;
}
}
<?php










namespace Symfony\Component\Process;

use Symfony\Component\Process\Exception\InvalidArgumentException;
use Symfony\Component\Process\Exception\LogicException;
use Symfony\Component\Process\Exception\RuntimeException;









class Process
{
const ERR = 'err';
const OUT = 'out';

const STATUS_READY = 'ready';
const STATUS_STARTED = 'started';
const STATUS_TERMINATED = 'terminated';

const STDIN = 0;
const STDOUT = 1;
const STDERR = 2;


 const TIMEOUT_PRECISION = 0.2;

private $commandline;
private $cwd;
private $env;
private $stdin;
private $starttime;
private $timeout;
private $options;
private $exitcode;
private $fallbackExitcode;
private $processInformation;
private $stdout;
private $stderr;
private $enhanceWindowsCompatibility;
private $enhanceSigchildCompatibility;
private $pipes;
private $process;
private $status = self::STATUS_READY;
private $incrementalOutputOffset;
private $incrementalErrorOutputOffset;
private $tty;

private $fileHandles;
private $readBytes;

private static $sigchild;








public static $exitCodes = array(
0 => 'OK',
1 => 'General error',
2 => 'Misuse of shell builtins',

126 => 'Invoked command cannot execute',
127 => 'Command not found',
128 => 'Invalid exit argument',


 129 => 'Hangup',
130 => 'Interrupt',
131 => 'Quit and dump core',
132 => 'Illegal instruction',
133 => 'Trace/breakpoint trap',
134 => 'Process aborted',
135 => 'Bus error: "access to undefined portion of memory object"',
136 => 'Floating point exception: "erroneous arithmetic operation"',
137 => 'Kill (terminate immediately)',
138 => 'User-defined 1',
139 => 'Segmentation violation',
140 => 'User-defined 2',
141 => 'Write to pipe with no one reading',
142 => 'Signal raised by alarm',
143 => 'Termination (request to terminate)',

 145 => 'Child process terminated, stopped (or continued*)',
146 => 'Continue if stopped',
147 => 'Stop executing temporarily',
148 => 'Terminal stop signal',
149 => 'Background process attempting to read from tty ("in")',
150 => 'Background process attempting to write to tty ("out")',
151 => 'Urgent data available on socket',
152 => 'CPU time limit exceeded',
153 => 'File size limit exceeded',
154 => 'Signal raised by timer counting virtual time: "virtual timer expired"',
155 => 'Profiling timer expired',

 157 => 'Pollable event',

 159 => 'Bad syscall',
);















public function __construct($commandline, $cwd = null, array $env = null, $stdin = null, $timeout = 60, array $options = array())
{
if (!function_exists('proc_open')) {
throw new RuntimeException('The Process class relies on proc_open, which is not available on your PHP installation.');
}

$this->commandline = $commandline;
$this->cwd = $cwd;


 
 
 

if (null === $this->cwd && (defined('ZEND_THREAD_SAFE') || defined('PHP_WINDOWS_VERSION_BUILD'))) {
$this->cwd = getcwd();
}
if (null !== $env) {
$this->setEnv($env);
} else {
$this->env = null;
}
$this->stdin = $stdin;
$this->setTimeout($timeout);
$this->enhanceWindowsCompatibility = true;
$this->enhanceSigchildCompatibility = !defined('PHP_WINDOWS_VERSION_BUILD') && $this->isSigchildEnabled();
$this->options = array_replace(array('suppress_errors' => true, 'binary_pipes' => true), $options);
}

public function __destruct()
{

 $this->stop();
}

public function __clone()
{
$this->exitcode = null;
$this->fallbackExitcode = null;
$this->processInformation = null;
$this->stdout = null;
$this->stderr = null;
$this->pipes = null;
$this->process = null;
$this->status = self::STATUS_READY;
$this->fileHandles = null;
$this->readBytes = null;
}




















public function run($callback = null)
{
$this->start($callback);

return $this->wait($callback);
}






















public function start($callback = null)
{
if ($this->isRunning()) {
throw new RuntimeException('Process is already running');
}

$this->starttime = microtime(true);
$this->stdout = '';
$this->stderr = '';
$this->incrementalOutputOffset = 0;
$this->incrementalErrorOutputOffset = 0;
$callback = $this->buildCallback($callback);
$descriptors = $this->getDescriptors();

$commandline = $this->commandline;

if (defined('PHP_WINDOWS_VERSION_BUILD') && $this->enhanceWindowsCompatibility) {
$commandline = 'cmd /V:ON /E:ON /C "'.$commandline.'"';
if (!isset($this->options['bypass_shell'])) {
$this->options['bypass_shell'] = true;
}
}

$this->process = proc_open($commandline, $descriptors, $this->pipes, $this->cwd, $this->env, $this->options);

if (!is_resource($this->process)) {
throw new RuntimeException('Unable to launch a new process.');
}
$this->status = self::STATUS_STARTED;

foreach ($this->pipes as $pipe) {
stream_set_blocking($pipe, false);
}

if ($this->tty) {
$this->status = self::STATUS_TERMINATED;

return;
}

if (null === $this->stdin) {
fclose($this->pipes[0]);
unset($this->pipes[0]);

return;
}

$writePipes = array($this->pipes[0]);
unset($this->pipes[0]);
$stdinLen = strlen($this->stdin);
$stdinOffset = 0;

while ($writePipes) {
if (defined('PHP_WINDOWS_VERSION_BUILD')) {
$this->processFileHandles($callback);
}

$r = $this->pipes;
$w = $writePipes;
$e = null;

if (false === $n = @stream_select($r, $w, $e, 0, ceil(static::TIMEOUT_PRECISION * 1E6))) {

 if ($this->hasSystemCallBeenInterrupted()) {
continue;
}
break;
}


 if (0 === $n) {
continue;
}

if ($w) {
$written = fwrite($writePipes[0], (binary) substr($this->stdin, $stdinOffset), 8192);
if (false !== $written) {
$stdinOffset += $written;
}
if ($stdinOffset >= $stdinLen) {
fclose($writePipes[0]);
$writePipes = null;
}
}

foreach ($r as $pipe) {
$type = array_search($pipe, $this->pipes);
$data = fread($pipe, 8192);
if (strlen($data) > 0) {
call_user_func($callback, $type == 1 ? self::OUT : self::ERR, $data);
}
if (false === $data || feof($pipe)) {
fclose($pipe);
unset($this->pipes[$type]);
}
}

$this->checkTimeout();
}

$this->updateStatus();
}
















public function restart($callback = null)
{
if ($this->isRunning()) {
throw new RuntimeException('Process is already running');
}

$process = clone $this;
$process->start($callback);

return $process;
}















public function wait($callback = null)
{
$this->updateStatus();
$callback = $this->buildCallback($callback);
while ($this->pipes || (defined('PHP_WINDOWS_VERSION_BUILD') && $this->fileHandles)) {
if (defined('PHP_WINDOWS_VERSION_BUILD') && $this->fileHandles) {
$this->processFileHandles($callback, !$this->pipes);
}
$this->checkTimeout();

if ($this->pipes) {
$r = $this->pipes;
$w = null;
$e = null;


 if (false === $n = @stream_select($r, $w, $e, 0, ceil(static::TIMEOUT_PRECISION * 1E6))) {

 
 if (!$this->hasSystemCallBeenInterrupted()) {
$this->pipes = array();
}

continue;
}


 if (0 === $n) {
continue;
}

foreach ($r as $pipe) {
$type = array_search($pipe, $this->pipes);
$data = fread($pipe, 8192);

if (strlen($data) > 0) {

 if (3 == $type) {
$this->fallbackExitcode = (int) $data;
} else {
call_user_func($callback, $type == 1 ? self::OUT : self::ERR, $data);
}
}
if (false === $data || feof($pipe)) {
fclose($pipe);
unset($this->pipes[$type]);
}
}
}
}
$this->updateStatus();
if ($this->processInformation['signaled']) {
if ($this->isSigchildEnabled()) {
throw new RuntimeException('The process has been signaled.');
}

throw new RuntimeException(sprintf('The process has been signaled with signal "%s".', $this->processInformation['termsig']));
}

$time = 0;
while ($this->isRunning() && $time < 1000000) {
$time += 1000;
usleep(1000);
}

$exitcode = proc_close($this->process);

if ($this->processInformation['signaled']) {
if ($this->isSigchildEnabled()) {
throw new RuntimeException('The process has been signaled.');
}

throw new RuntimeException(sprintf('The process has been signaled with signal "%s".', $this->processInformation['termsig']));
}

$this->exitcode = $this->processInformation['running'] ? $exitcode : $this->processInformation['exitcode'];

if (-1 == $this->exitcode && null !== $this->fallbackExitcode) {
$this->exitcode = $this->fallbackExitcode;
}

return $this->exitcode;
}








public function getPid()
{
if ($this->isSigchildEnabled()) {
throw new RuntimeException('This PHP has been compiled with --enable-sigchild. The process identifier can not be retrieved.');
}

$this->updateStatus();

return $this->isRunning() ? $this->processInformation['pid'] : null;
}











public function signal($signal)
{
if (!$this->isRunning()) {
throw new LogicException('Can not send signal on a non running process.');
}

if ($this->isSigchildEnabled()) {
throw new RuntimeException('This PHP has been compiled with --enable-sigchild. The process can not be signaled.');
}

if (true !== @proc_terminate($this->process, $signal)) {
throw new RuntimeException(sprintf('Error while sending signal `%d`.', $signal));
}

return $this;
}








public function getOutput()
{
$this->updateOutput();

return $this->stdout;
}









public function getIncrementalOutput()
{
$data = $this->getOutput();

$latest = substr($data, $this->incrementalOutputOffset);
$this->incrementalOutputOffset = strlen($data);

return $latest;
}








public function getErrorOutput()
{
$this->updateErrorOutput();

return $this->stderr;
}










public function getIncrementalErrorOutput()
{
$data = $this->getErrorOutput();

$latest = substr($data, $this->incrementalErrorOutputOffset);
$this->incrementalErrorOutputOffset = strlen($data);

return $latest;
}










public function getExitCode()
{
if ($this->isSigchildEnabled() && !$this->enhanceSigchildCompatibility) {
throw new RuntimeException('This PHP has been compiled with --enable-sigchild. You must use setEnhanceSigchildCompatibility() to use this method');
}

$this->updateStatus();

return $this->exitcode;
}












public function getExitCodeText()
{
$exitcode = $this->getExitCode();

return isset(self::$exitCodes[$exitcode]) ? self::$exitCodes[$exitcode] : 'Unknown error';
}








public function isSuccessful()
{
return 0 == $this->getExitCode();
}












public function hasBeenSignaled()
{
if ($this->isSigchildEnabled()) {
throw new RuntimeException('This PHP has been compiled with --enable-sigchild. Term signal can not be retrieved');
}

$this->updateStatus();

return $this->processInformation['signaled'];
}












public function getTermSignal()
{
if ($this->isSigchildEnabled()) {
throw new RuntimeException('This PHP has been compiled with --enable-sigchild. Term signal can not be retrieved');
}

$this->updateStatus();

return $this->processInformation['termsig'];
}










public function hasBeenStopped()
{
$this->updateStatus();

return $this->processInformation['stopped'];
}










public function getStopSignal()
{
$this->updateStatus();

return $this->processInformation['stopsig'];
}






public function isRunning()
{
if (self::STATUS_STARTED !== $this->status) {
return false;
}

$this->updateStatus();

return $this->processInformation['running'];
}






public function isStarted()
{
return $this->status != self::STATUS_READY;
}






public function isTerminated()
{
$this->updateStatus();

return $this->status == self::STATUS_TERMINATED;
}








public function getStatus()
{
$this->updateStatus();

return $this->status;
}











public function stop($timeout = 10, $signal = null)
{
$timeoutMicro = (int) $timeout*1E6;
if ($this->isRunning()) {
proc_terminate($this->process);
$time = 0;
while (1 == $this->isRunning() && $time < $timeoutMicro) {
$time += 1000;
usleep(1000);
}

if ($this->isRunning() && !$this->isSigchildEnabled()) {
if (null !== $signal || defined('SIGKILL')) {
$this->signal($signal ?: SIGKILL);
}
}

foreach ($this->pipes as $pipe) {
fclose($pipe);
}
$this->pipes = array();

$exitcode = proc_close($this->process);
$this->exitcode = -1 === $this->processInformation['exitcode'] ? $exitcode : $this->processInformation['exitcode'];

if (defined('PHP_WINDOWS_VERSION_BUILD')) {
foreach ($this->fileHandles as $fileHandle) {
fclose($fileHandle);
}
$this->fileHandles = array();
}
}
$this->status = self::STATUS_TERMINATED;

return $this->exitcode;
}






public function addOutput($line)
{
$this->stdout .= $line;
}






public function addErrorOutput($line)
{
$this->stderr .= $line;
}






public function getCommandLine()
{
return $this->commandline;
}








public function setCommandLine($commandline)
{
$this->commandline = $commandline;

return $this;
}






public function getTimeout()
{
return $this->timeout;
}












public function setTimeout($timeout)
{
if (null === $timeout) {
$this->timeout = null;

return $this;
}

$timeout = (float) $timeout;

if ($timeout < 0) {
throw new InvalidArgumentException('The timeout value must be a valid positive integer or float number.');
}

$this->timeout = $timeout;

return $this;
}








public function setTty($tty)
{
$this->tty = (Boolean) $tty;

return $this;
}






public function isTty()
{
return $this->tty;
}






public function getWorkingDirectory()
{

 if (null === $this->cwd) {

 
 return getcwd() ?: null;
}

return $this->cwd;
}








public function setWorkingDirectory($cwd)
{
$this->cwd = $cwd;

return $this;
}






public function getEnv()
{
return $this->env;
}














public function setEnv(array $env)
{

 $env = array_filter($env, function ($value) { if (!is_array($value)) { return true; } });

$this->env = array();
foreach ($env as $key => $value) {
$this->env[(binary) $key] = (binary) $value;
}

return $this;
}






public function getStdin()
{
return $this->stdin;
}








public function setStdin($stdin)
{
$this->stdin = $stdin;

return $this;
}






public function getOptions()
{
return $this->options;
}








public function setOptions(array $options)
{
$this->options = $options;

return $this;
}








public function getEnhanceWindowsCompatibility()
{
return $this->enhanceWindowsCompatibility;
}








public function setEnhanceWindowsCompatibility($enhance)
{
$this->enhanceWindowsCompatibility = (Boolean) $enhance;

return $this;
}






public function getEnhanceSigchildCompatibility()
{
return $this->enhanceSigchildCompatibility;
}












public function setEnhanceSigchildCompatibility($enhance)
{
$this->enhanceSigchildCompatibility = (Boolean) $enhance;

return $this;
}









public function checkTimeout()
{
if (0 < $this->timeout && $this->timeout < microtime(true) - $this->starttime) {
$this->stop(0);

throw new RuntimeException('The process timed-out.');
}
}






private function getDescriptors()
{

 
 
 if (defined('PHP_WINDOWS_VERSION_BUILD')) {
$this->fileHandles = array(
self::STDOUT => tmpfile(),
);
if (false === $this->fileHandles[self::STDOUT]) {
throw new RuntimeException('A temporary file could not be opened to write the process output to, verify that your TEMP environment variable is writable');
}
$this->readBytes = array(
self::STDOUT => 0,
);

return array(array('pipe', 'r'), $this->fileHandles[self::STDOUT], array('pipe', 'w'));
}

if ($this->tty) {
$descriptors = array(
array('file', '/dev/tty', 'r'),
array('file', '/dev/tty', 'w'),
array('file', '/dev/tty', 'w'),
);
} else {
$descriptors = array(
array('pipe', 'r'), 
 array('pipe', 'w'), 
 array('pipe', 'w'), 
 );
}

if ($this->enhanceSigchildCompatibility && $this->isSigchildEnabled()) {

 $descriptors = array_merge($descriptors, array(array('pipe', 'w')));

$this->commandline = '('.$this->commandline.') 3>/dev/null; code=$?; echo $code >&3; exit $code';
}

return $descriptors;
}











protected function buildCallback($callback)
{
$that = $this;
$out = self::OUT;
$err = self::ERR;
$callback = function ($type, $data) use ($that, $callback, $out, $err) {
if ($out == $type) {
$that->addOutput($data);
} else {
$that->addErrorOutput($data);
}

if (null !== $callback) {
call_user_func($callback, $type, $data);
}
};

return $callback;
}




protected function updateStatus()
{
if (self::STATUS_STARTED !== $this->status) {
return;
}

$this->processInformation = proc_get_status($this->process);
if (!$this->processInformation['running']) {
$this->status = self::STATUS_TERMINATED;
if (-1 !== $this->processInformation['exitcode']) {
$this->exitcode = $this->processInformation['exitcode'];
}
}
}




protected function updateErrorOutput()
{
if (isset($this->pipes[self::STDERR]) && is_resource($this->pipes[self::STDERR])) {
$this->addErrorOutput(stream_get_contents($this->pipes[self::STDERR]));
}
}




protected function updateOutput()
{
if (defined('PHP_WINDOWS_VERSION_BUILD') && isset($this->fileHandles[self::STDOUT]) && is_resource($this->fileHandles[self::STDOUT])) {
fseek($this->fileHandles[self::STDOUT], $this->readBytes[self::STDOUT]);
$this->addOutput(stream_get_contents($this->fileHandles[self::STDOUT]));
} elseif (isset($this->pipes[self::STDOUT]) && is_resource($this->pipes[self::STDOUT])) {
$this->addOutput(stream_get_contents($this->pipes[self::STDOUT]));
}
}






protected function isSigchildEnabled()
{
if (null !== self::$sigchild) {
return self::$sigchild;
}

ob_start();
phpinfo(INFO_GENERAL);

return self::$sigchild = false !== strpos(ob_get_clean(), '--enable-sigchild');
}







private function processFileHandles($callback, $closeEmptyHandles = false)
{
$fh = $this->fileHandles;
foreach ($fh as $type => $fileHandle) {
fseek($fileHandle, $this->readBytes[$type]);
$data = fread($fileHandle, 8192);
if (strlen($data) > 0) {
$this->readBytes[$type] += strlen($data);
call_user_func($callback, $type == 1 ? self::OUT : self::ERR, $data);
}
if (false === $data || ($closeEmptyHandles && '' === $data && feof($fileHandle))) {
fclose($fileHandle);
unset($this->fileHandles[$type]);
}
}
}






private function hasSystemCallBeenInterrupted()
{
$lastError = error_get_last();


 return isset($lastError['message']) && false !== stripos($lastError['message'], 'interrupted system call');
}
}
<?php










namespace Symfony\Component\Process;

use Symfony\Component\Process\Exception\InvalidArgumentException;
use Symfony\Component\Process\Exception\LogicException;






class ProcessBuilder
{
private $arguments;
private $cwd;
private $env;
private $stdin;
private $timeout;
private $options;
private $inheritEnv;
private $prefix;

public function __construct(array $arguments = array())
{
$this->arguments = $arguments;

$this->timeout = 60;
$this->options = array();
$this->env = array();
$this->inheritEnv = true;
}

public static function create(array $arguments = array())
{
return new static($arguments);
}








public function add($argument)
{
$this->arguments[] = $argument;

return $this;
}










public function setPrefix($prefix)
{
$this->prefix = $prefix;

return $this;
}






public function setArguments(array $arguments)
{
$this->arguments = $arguments;

return $this;
}

public function setWorkingDirectory($cwd)
{
$this->cwd = $cwd;

return $this;
}

public function inheritEnvironmentVariables($inheritEnv = true)
{
$this->inheritEnv = $inheritEnv;

return $this;
}

public function setEnv($name, $value)
{
$this->env[$name] = $value;

return $this;
}

public function setInput($stdin)
{
$this->stdin = $stdin;

return $this;
}












public function setTimeout($timeout)
{
if (null === $timeout) {
$this->timeout = null;

return $this;
}

$timeout = (float) $timeout;

if ($timeout < 0) {
throw new InvalidArgumentException('The timeout value must be a valid positive integer or float number.');
}

$this->timeout = $timeout;

return $this;
}

public function setOption($name, $value)
{
$this->options[$name] = $value;

return $this;
}

public function getProcess()
{
if (!$this->prefix && !count($this->arguments)) {
throw new LogicException('You must add() command arguments before calling getProcess().');
}

$options = $this->options;

$arguments = $this->prefix ? array_merge(array($this->prefix), $this->arguments) : $this->arguments;
$script = implode(' ', array_map(array(__NAMESPACE__.'\\ProcessUtils', 'escapeArgument'), $arguments));

if ($this->inheritEnv) {
$env = $this->env ? $this->env + $_ENV : null;
} else {
$env = $this->env;
}

return new Process($script, $this->cwd, $env, $this->stdin, $this->timeout, $options);
}
}
<?php










namespace Symfony\Component\Process;








class ProcessUtils
{



private function __construct()
{
}








public static function escapeArgument($argument)
{

 
 
 
 if (defined('PHP_WINDOWS_VERSION_BUILD')) {
$escapedArgument = '';
foreach (preg_split('/([%"])/i', $argument, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE) as $part) {
if ('"' == $part) {
$escapedArgument .= '\\"';
} elseif ('%' == $part) {
$escapedArgument .= '^%';
} else {
$escapedArgument .= escapeshellarg($part);
}
}

return $escapedArgument;
}

return escapeshellarg($argument);
}
}
<?php










namespace Symfony\Component\Process\Exception;






interface ExceptionInterface
{
}
<?php










namespace Symfony\Component\Process\Exception;






class RuntimeException extends \RuntimeException implements ExceptionInterface
{
}
<?php










namespace Symfony\Component\Process\Exception;






class LogicException extends \LogicException implements ExceptionInterface
{
}
<?php










namespace Symfony\Component\Process\Exception;

use Symfony\Component\Process\Process;






class ProcessFailedException extends RuntimeException
{
private $process;

public function __construct(Process $process)
{
if ($process->isSuccessful()) {
throw new InvalidArgumentException('Expected a failed process, but the given process was successful.');
}

parent::__construct(
sprintf(
'The command "%s" failed.'."\nExit Code: %s(%s)\n\nOutput:\n================\n%s\n\nError Output:\n================\n%s",
$process->getCommandLine(),
$process->getExitCode(),
$process->getExitCodeText(),
$process->getOutput(),
$process->getErrorOutput()
)
);

$this->process = $process;
}

public function getProcess()
{
return $this->process;
}
}
<?php










namespace Symfony\Component\Process\Exception;






class InvalidArgumentException extends \InvalidArgumentException implements ExceptionInterface
{
}
<?php










namespace Symfony\Component\Process;







class PhpExecutableFinder
{
private $executableFinder;

public function __construct()
{
$this->executableFinder = new ExecutableFinder();
}






public function find()
{

 if (defined('PHP_BINARY') && PHP_BINARY && ('cli' === PHP_SAPI) && is_file(PHP_BINARY)) {
return PHP_BINARY;
}

if ($php = getenv('PHP_PATH')) {
if (!is_executable($php)) {
return false;
}

return $php;
}

if ($php = getenv('PHP_PEAR_PHP_BIN')) {
if (is_executable($php)) {
return $php;
}
}

$dirs = array(PHP_BINDIR);
if (defined('PHP_WINDOWS_VERSION_BUILD')) {
$dirs[] = 'C:\xampp\php\\';
}

return $this->executableFinder->find('php', false, $dirs);
}
}
<?php









namespace Symfony\Component\Yaml;

use Symfony\Component\Yaml\Exception\ParseException;






class Parser
{
private $offset = 0;
private $lines = array();
private $currentLineNb = -1;
private $currentLine = '';
private $refs = array();






public function __construct($offset = 0)
{
$this->offset = $offset;
}












public function parse($value, $exceptionOnInvalidType = false, $objectSupport = false)
{
$this->currentLineNb = -1;
$this->currentLine = '';
$this->lines = explode("\n", $this->cleanup($value));

if (function_exists('mb_detect_encoding') && false === mb_detect_encoding($value, 'UTF-8', true)) {
throw new ParseException('The YAML value does not appear to be valid UTF-8.');
}

if (function_exists('mb_internal_encoding') && ((int) ini_get('mbstring.func_overload')) & 2) {
$mbEncoding = mb_internal_encoding();
mb_internal_encoding('UTF-8');
}

$data = array();
$context = null;
while ($this->moveToNextLine()) {
if ($this->isCurrentLineEmpty()) {
continue;
}


 if ("\t" === $this->currentLine[0]) {
throw new ParseException('A YAML file cannot contain tabs as indentation.', $this->getRealCurrentLineNb() + 1, $this->currentLine);
}

$isRef = $isInPlace = $isProcessed = false;
if (preg_match('#^\-((?P<leadspaces>\s+)(?P<value>.+?))?\s*$#u', $this->currentLine, $values)) {
if ($context && 'mapping' == $context) {
throw new ParseException('You cannot define a sequence item when in a mapping');
}
$context = 'sequence';

if (isset($values['value']) && preg_match('#^&(?P<ref>[^ ]+) *(?P<value>.*)#u', $values['value'], $matches)) {
$isRef = $matches['ref'];
$values['value'] = $matches['value'];
}


 if (!isset($values['value']) || '' == trim($values['value'], ' ') || 0 === strpos(ltrim($values['value'], ' '), '#')) {
$c = $this->getRealCurrentLineNb() + 1;
$parser = new Parser($c);
$parser->refs =& $this->refs;
$data[] = $parser->parse($this->getNextEmbedBlock(), $exceptionOnInvalidType, $objectSupport);
} else {
if (isset($values['leadspaces'])
&& ' ' == $values['leadspaces']
&& preg_match('#^(?P<key>'.Inline::REGEX_QUOTED_STRING.'|[^ \'"\{\[].*?) *\:(\s+(?P<value>.+?))?\s*$#u', $values['value'], $matches)
) {

 $c = $this->getRealCurrentLineNb();
$parser = new Parser($c);
$parser->refs =& $this->refs;

$block = $values['value'];
if ($this->isNextLineIndented()) {
$block .= "\n".$this->getNextEmbedBlock($this->getCurrentLineIndentation() + 2);
}

$data[] = $parser->parse($block, $exceptionOnInvalidType, $objectSupport);
} else {
$data[] = $this->parseValue($values['value'], $exceptionOnInvalidType, $objectSupport);
}
}
} elseif (preg_match('#^(?P<key>'.Inline::REGEX_QUOTED_STRING.'|[^ \'"\[\{].*?) *\:(\s+(?P<value>.+?))?\s*$#u', $this->currentLine, $values)) {
if ($context && 'sequence' == $context) {
throw new ParseException('You cannot define a mapping item when in a sequence');
}
$context = 'mapping';


 Inline::parse(null, $exceptionOnInvalidType, $objectSupport);
try {
$key = Inline::parseScalar($values['key']);
} catch (ParseException $e) {
$e->setParsedLine($this->getRealCurrentLineNb() + 1);
$e->setSnippet($this->currentLine);

throw $e;
}

if ('<<' === $key) {
if (isset($values['value']) && 0 === strpos($values['value'], '*')) {
$isInPlace = substr($values['value'], 1);
if (!array_key_exists($isInPlace, $this->refs)) {
throw new ParseException(sprintf('Reference "%s" does not exist.', $isInPlace), $this->getRealCurrentLineNb() + 1, $this->currentLine);
}
} else {
if (isset($values['value']) && $values['value'] !== '') {
$value = $values['value'];
} else {
$value = $this->getNextEmbedBlock();
}
$c = $this->getRealCurrentLineNb() + 1;
$parser = new Parser($c);
$parser->refs =& $this->refs;
$parsed = $parser->parse($value, $exceptionOnInvalidType, $objectSupport);

$merged = array();
if (!is_array($parsed)) {
throw new ParseException('YAML merge keys used with a scalar value instead of an array.', $this->getRealCurrentLineNb() + 1, $this->currentLine);
} elseif (isset($parsed[0])) {

 foreach (array_reverse($parsed) as $parsedItem) {
if (!is_array($parsedItem)) {
throw new ParseException('Merge items must be arrays.', $this->getRealCurrentLineNb() + 1, $parsedItem);
}
$merged = array_merge($parsedItem, $merged);
}
} else {

 $merged = array_merge($merged, $parsed);
}

$isProcessed = $merged;
}
} elseif (isset($values['value']) && preg_match('#^&(?P<ref>[^ ]+) *(?P<value>.*)#u', $values['value'], $matches)) {
$isRef = $matches['ref'];
$values['value'] = $matches['value'];
}

if ($isProcessed) {

 $data = $isProcessed;

 } elseif (!isset($values['value']) || '' == trim($values['value'], ' ') || 0 === strpos(ltrim($values['value'], ' '), '#')) {

 if (!$this->isNextLineIndented() && !$this->isNextLineUnIndentedCollection()) {
$data[$key] = null;
} else {
$c = $this->getRealCurrentLineNb() + 1;
$parser = new Parser($c);
$parser->refs =& $this->refs;
$data[$key] = $parser->parse($this->getNextEmbedBlock(), $exceptionOnInvalidType, $objectSupport);
}
} else {
if ($isInPlace) {
$data = $this->refs[$isInPlace];
} else {
$data[$key] = $this->parseValue($values['value'], $exceptionOnInvalidType, $objectSupport);
}
}
} else {

 $lineCount = count($this->lines);
if (1 === $lineCount || (2 === $lineCount && empty($this->lines[1]))) {
try {
$value = Inline::parse($this->lines[0], $exceptionOnInvalidType, $objectSupport);
} catch (ParseException $e) {
$e->setParsedLine($this->getRealCurrentLineNb() + 1);
$e->setSnippet($this->currentLine);

throw $e;
}

if (is_array($value)) {
$first = reset($value);
if (is_string($first) && 0 === strpos($first, '*')) {
$data = array();
foreach ($value as $alias) {
$data[] = $this->refs[substr($alias, 1)];
}
$value = $data;
}
}

if (isset($mbEncoding)) {
mb_internal_encoding($mbEncoding);
}

return $value;
}

switch (preg_last_error()) {
case PREG_INTERNAL_ERROR:
$error = 'Internal PCRE error.';
break;
case PREG_BACKTRACK_LIMIT_ERROR:
$error = 'pcre.backtrack_limit reached.';
break;
case PREG_RECURSION_LIMIT_ERROR:
$error = 'pcre.recursion_limit reached.';
break;
case PREG_BAD_UTF8_ERROR:
$error = 'Malformed UTF-8 data.';
break;
case PREG_BAD_UTF8_OFFSET_ERROR:
$error = 'Offset doesn\'t correspond to the begin of a valid UTF-8 code point.';
break;
default:
$error = 'Unable to parse.';
}

throw new ParseException($error, $this->getRealCurrentLineNb() + 1, $this->currentLine);
}

if ($isRef) {
$this->refs[$isRef] = end($data);
}
}

if (isset($mbEncoding)) {
mb_internal_encoding($mbEncoding);
}

return empty($data) ? null : $data;
}






private function getRealCurrentLineNb()
{
return $this->currentLineNb + $this->offset;
}






private function getCurrentLineIndentation()
{
return strlen($this->currentLine) - strlen(ltrim($this->currentLine, ' '));
}










private function getNextEmbedBlock($indentation = null)
{
$this->moveToNextLine();

if (null === $indentation) {
$newIndent = $this->getCurrentLineIndentation();

$unindentedEmbedBlock = $this->isStringUnIndentedCollectionItem($this->currentLine);

if (!$this->isCurrentLineEmpty() && 0 === $newIndent && !$unindentedEmbedBlock) {
throw new ParseException('Indentation problem.', $this->getRealCurrentLineNb() + 1, $this->currentLine);
}
} else {
$newIndent = $indentation;
}

$data = array(substr($this->currentLine, $newIndent));

$isItUnindentedCollection = $this->isStringUnIndentedCollectionItem($this->currentLine);


 $removeComments = !preg_match('~(.*)\|[\s]*$~', $this->currentLine);

while ($this->moveToNextLine()) {
if ($isItUnindentedCollection && !$this->isStringUnIndentedCollectionItem($this->currentLine)) {
$this->moveToPreviousLine();
break;
}

if ($removeComments && $this->isCurrentLineEmpty() || $this->isCurrentLineBlank()) {
if ($this->isCurrentLineBlank()) {
$data[] = substr($this->currentLine, $newIndent);
}

continue;
}

$indent = $this->getCurrentLineIndentation();

if (preg_match('#^(?P<text> *)$#', $this->currentLine, $match)) {

 $data[] = $match['text'];
} elseif ($indent >= $newIndent) {
$data[] = substr($this->currentLine, $newIndent);
} elseif (0 == $indent) {
$this->moveToPreviousLine();

break;
} else {
throw new ParseException('Indentation problem.', $this->getRealCurrentLineNb() + 1, $this->currentLine);
}
}

return implode("\n", $data);
}






private function moveToNextLine()
{
if ($this->currentLineNb >= count($this->lines) - 1) {
return false;
}

$this->currentLine = $this->lines[++$this->currentLineNb];

return true;
}




private function moveToPreviousLine()
{
$this->currentLine = $this->lines[--$this->currentLineNb];
}












private function parseValue($value, $exceptionOnInvalidType, $objectSupport)
{
if (0 === strpos($value, '*')) {
if (false !== $pos = strpos($value, '#')) {
$value = substr($value, 1, $pos - 2);
} else {
$value = substr($value, 1);
}

if (!array_key_exists($value, $this->refs)) {
throw new ParseException(sprintf('Reference "%s" does not exist.', $value), $this->currentLine);
}

return $this->refs[$value];
}

if (preg_match('/^(?P<separator>\||>)(?P<modifiers>\+|\-|\d+|\+\d+|\-\d+|\d+\+|\d+\-)?(?P<comments> +#.*)?$/', $value, $matches)) {
$modifiers = isset($matches['modifiers']) ? $matches['modifiers'] : '';

return $this->parseFoldedScalar($matches['separator'], preg_replace('#\d+#', '', $modifiers), intval(abs($modifiers)));
}

try {
return Inline::parse($value, $exceptionOnInvalidType, $objectSupport);
} catch (ParseException $e) {
$e->setParsedLine($this->getRealCurrentLineNb() + 1);
$e->setSnippet($this->currentLine);

throw $e;
}
}










private function parseFoldedScalar($separator, $indicator = '', $indentation = 0)
{
$notEOF = $this->moveToNextLine();
if (!$notEOF) {
return '';
}

$isCurrentLineBlank = $this->isCurrentLineBlank();
$text = '';


 while ($notEOF && $isCurrentLineBlank) {

 if ($notEOF = $this->moveToNextLine()) {
$text .= "\n";
$isCurrentLineBlank = $this->isCurrentLineBlank();
}
}


 if (0 === $indentation) {
if (preg_match('/^ +/', $this->currentLine, $matches)) {
$indentation = strlen($matches[0]);
}
}

if ($indentation > 0) {
$pattern = sprintf('/^ {%d}(.*)$/', $indentation);

while (
$notEOF && (
$isCurrentLineBlank ||
preg_match($pattern, $this->currentLine, $matches)
)
) {
if ($isCurrentLineBlank) {
$text .= substr($this->currentLine, $indentation);
} else {
$text .= $matches[1];
}


 if ($notEOF = $this->moveToNextLine()) {
$text .= "\n";
$isCurrentLineBlank = $this->isCurrentLineBlank();
}
}
} elseif ($notEOF) {
$text .= "\n";
}

if ($notEOF) {
$this->moveToPreviousLine();
}


 if ('>' === $separator) {
preg_match('/(\n*)$/', $text, $matches);
$text = preg_replace('/(?<!\n)\n(?!\n)/', ' ', rtrim($text, "\n"));
$text .= $matches[1];
}


 if ('' === $indicator) {
$text = preg_replace('/\n+$/s', "\n", $text);
} elseif ('-' === $indicator) {
$text = preg_replace('/\n+$/s', '', $text);
}

return $text;
}






private function isNextLineIndented()
{
$currentIndentation = $this->getCurrentLineIndentation();
$EOF = !$this->moveToNextLine();

while (!$EOF && $this->isCurrentLineEmpty()) {
$EOF = !$this->moveToNextLine();
}

if ($EOF) {
return false;
}

$ret = false;
if ($this->getCurrentLineIndentation() > $currentIndentation) {
$ret = true;
}

$this->moveToPreviousLine();

return $ret;
}






private function isCurrentLineEmpty()
{
return $this->isCurrentLineBlank() || $this->isCurrentLineComment();
}






private function isCurrentLineBlank()
{
return '' == trim($this->currentLine, ' ');
}






private function isCurrentLineComment()
{

 $ltrimmedLine = ltrim($this->currentLine, ' ');

return $ltrimmedLine[0] === '#';
}








private function cleanup($value)
{
$value = str_replace(array("\r\n", "\r"), "\n", $value);


 $count = 0;
$value = preg_replace('#^\%YAML[: ][\d\.]+.*\n#su', '', $value, -1, $count);
$this->offset += $count;


 $trimmedValue = preg_replace('#^(\#.*?\n)+#s', '', $value, -1, $count);
if ($count == 1) {

 $this->offset += substr_count($value, "\n") - substr_count($trimmedValue, "\n");
$value = $trimmedValue;
}


 $trimmedValue = preg_replace('#^\-\-\-.*?\n#s', '', $value, -1, $count);
if ($count == 1) {

 $this->offset += substr_count($value, "\n") - substr_count($trimmedValue, "\n");
$value = $trimmedValue;


 $value = preg_replace('#\.\.\.\s*$#s', '', $value);
}

return $value;
}






private function isNextLineUnIndentedCollection()
{
$currentIndentation = $this->getCurrentLineIndentation();
$notEOF = $this->moveToNextLine();

while ($notEOF && $this->isCurrentLineEmpty()) {
$notEOF = $this->moveToNextLine();
}

if (false === $notEOF) {
return false;
}

$ret = false;
if (
$this->getCurrentLineIndentation() == $currentIndentation
&&
$this->isStringUnIndentedCollectionItem($this->currentLine)
) {
$ret = true;
}

$this->moveToPreviousLine();

return $ret;
}






private function isStringUnIndentedCollectionItem()
{
return (0 === strpos($this->currentLine, '- '));
}

}
<?php









namespace Symfony\Component\Yaml;







class Unescaper
{

 
 const ENCODING = 'UTF-8';


 
 const REGEX_ESCAPED_CHARACTER = "\\\\([0abt\tnvfre \\\"\\/\\\\N_LP]|x[0-9a-fA-F]{2}|u[0-9a-fA-F]{4}|U[0-9a-fA-F]{8})";








public function unescapeSingleQuotedString($value)
{
return str_replace('\'\'', '\'', $value);
}








public function unescapeDoubleQuotedString($value)
{
$self = $this;
$callback = function($match) use ($self) {
return $self->unescapeCharacter($match[0]);
};


 return preg_replace_callback('/'.self::REGEX_ESCAPED_CHARACTER.'/u', $callback, $value);
}








public function unescapeCharacter($value)
{
switch ($value{1}) {
case '0':
return "\x0";
case 'a':
return "\x7";
case 'b':
return "\x8";
case 't':
return "\t";
case "\t":
return "\t";
case 'n':
return "\n";
case 'v':
return "\xb";
case 'f':
return "\xc";
case 'r':
return "\xd";
case 'e':
return "\x1b";
case ' ':
return ' ';
case '"':
return '"';
case '/':
return '/';
case '\\':
return '\\';
case 'N':

 return $this->convertEncoding("\x00\x85", self::ENCODING, 'UCS-2BE');
case '_':

 return $this->convertEncoding("\x00\xA0", self::ENCODING, 'UCS-2BE');
case 'L':

 return $this->convertEncoding("\x20\x28", self::ENCODING, 'UCS-2BE');
case 'P':

 return $this->convertEncoding("\x20\x29", self::ENCODING, 'UCS-2BE');
case 'x':
$char = pack('n', hexdec(substr($value, 2, 2)));

return $this->convertEncoding($char, self::ENCODING, 'UCS-2BE');
case 'u':
$char = pack('n', hexdec(substr($value, 2, 4)));

return $this->convertEncoding($char, self::ENCODING, 'UCS-2BE');
case 'U':
$char = pack('N', hexdec(substr($value, 2, 8)));

return $this->convertEncoding($char, self::ENCODING, 'UCS-4BE');
}
}












private function convertEncoding($value, $to, $from)
{
if (function_exists('mb_convert_encoding')) {
return mb_convert_encoding($value, $to, $from);
} elseif (function_exists('iconv')) {
return iconv($from, $to, $value);
}

throw new RuntimeException('No suitable convert encoding function (install the iconv or mbstring extension).');
}
}
<?php










namespace Symfony\Component\Yaml;

use Symfony\Component\Yaml\Exception\ParseException;








class Yaml
{


























public static function parse($input, $exceptionOnInvalidType = false, $objectSupport = false)
{

 $file = '';
if (strpos($input, "\n") === false && is_file($input)) {
if (false === is_readable($input)) {
throw new ParseException(sprintf('Unable to parse "%s" as the file is not readable.', $input));
}

$file = $input;
$input = file_get_contents($file);
}

$yaml = new Parser();

try {
return $yaml->parse($input, $exceptionOnInvalidType, $objectSupport);
} catch (ParseException $e) {
if ($file) {
$e->setParsedFile($file);
}

throw $e;
}
}

















public static function dump($array, $inline = 2, $indent = 4, $exceptionOnInvalidType = false, $objectSupport = false)
{
$yaml = new Dumper();
$yaml->setIndentation($indent);

return $yaml->dump($array, $inline, 0, $exceptionOnInvalidType, $objectSupport);
}
}
<?php










namespace Symfony\Component\Yaml;






class Dumper
{





protected $indentation = 4;






public function setIndentation($num)
{
$this->indentation = (int) $num;
}












public function dump($input, $inline = 0, $indent = 0, $exceptionOnInvalidType = false, $objectSupport = false)
{
$output = '';
$prefix = $indent ? str_repeat(' ', $indent) : '';

if ($inline <= 0 || !is_array($input) || empty($input)) {
$output .= $prefix.Inline::dump($input, $exceptionOnInvalidType, $objectSupport);
} else {
$isAHash = array_keys($input) !== range(0, count($input) - 1);

foreach ($input as $key => $value) {
$willBeInlined = $inline - 1 <= 0 || !is_array($value) || empty($value);

$output .= sprintf('%s%s%s%s',
$prefix,
$isAHash ? Inline::dump($key, $exceptionOnInvalidType, $objectSupport).':' : '-',
$willBeInlined ? ' ' : "\n",
$this->dump($value, $inline - 1, $willBeInlined ? 0 : $indent + $this->indentation, $exceptionOnInvalidType, $objectSupport)
).($willBeInlined ? "\n" : '');
}
}

return $output;
}
}
<?php










namespace Symfony\Component\Yaml\Exception;








class ParseException extends RuntimeException
{
private $parsedFile;
private $parsedLine;
private $snippet;
private $rawMessage;










public function __construct($message, $parsedLine = -1, $snippet = null, $parsedFile = null, Exception $previous = null)
{
$this->parsedFile = $parsedFile;
$this->parsedLine = $parsedLine;
$this->snippet = $snippet;
$this->rawMessage = $message;

$this->updateRepr();

parent::__construct($this->message, 0, $previous);
}






public function getSnippet()
{
return $this->snippet;
}






public function setSnippet($snippet)
{
$this->snippet = $snippet;

$this->updateRepr();
}








public function getParsedFile()
{
return $this->parsedFile;
}






public function setParsedFile($parsedFile)
{
$this->parsedFile = $parsedFile;

$this->updateRepr();
}






public function getParsedLine()
{
return $this->parsedLine;
}






public function setParsedLine($parsedLine)
{
$this->parsedLine = $parsedLine;

$this->updateRepr();
}

private function updateRepr()
{
$this->message = $this->rawMessage;

$dot = false;
if ('.' === substr($this->message, -1)) {
$this->message = substr($this->message, 0, -1);
$dot = true;
}

if (null !== $this->parsedFile) {
$this->message .= sprintf(' in %s', json_encode($this->parsedFile));
}

if ($this->parsedLine >= 0) {
$this->message .= sprintf(' at line %d', $this->parsedLine);
}

if ($this->snippet) {
$this->message .= sprintf(' (near "%s")', $this->snippet);
}

if ($dot) {
$this->message .= '.';
}
}
}
<?php










namespace Symfony\Component\Yaml\Exception;








interface ExceptionInterface
{
}
<?php










namespace Symfony\Component\Yaml\Exception;








class RuntimeException extends \RuntimeException implements ExceptionInterface
{
}
<?php










namespace Symfony\Component\Yaml\Exception;








class DumpException extends RuntimeException
{
}
<?php









namespace Symfony\Component\Yaml;







class Escaper
{

 const REGEX_CHARACTER_TO_ESCAPE = "[\\x00-\\x1f]|\xc2\x85|\xc2\xa0|\xe2\x80\xa8|\xe2\x80\xa9";


 
 
 
 private static $escapees = array('\\\\', '\\"', '"',
"\x00", "\x01", "\x02", "\x03", "\x04", "\x05", "\x06", "\x07",
"\x08", "\x09", "\x0a", "\x0b", "\x0c", "\x0d", "\x0e", "\x0f",
"\x10", "\x11", "\x12", "\x13", "\x14", "\x15", "\x16", "\x17",
"\x18", "\x19", "\x1a", "\x1b", "\x1c", "\x1d", "\x1e", "\x1f",
"\xc2\x85", "\xc2\xa0", "\xe2\x80\xa8", "\xe2\x80\xa9");
private static $escaped = array('\\"', '\\\\', '\\"',
"\\0", "\\x01", "\\x02", "\\x03", "\\x04", "\\x05", "\\x06", "\\a",
"\\b", "\\t", "\\n", "\\v", "\\f", "\\r", "\\x0e", "\\x0f",
"\\x10", "\\x11", "\\x12", "\\x13", "\\x14", "\\x15", "\\x16", "\\x17",
"\\x18", "\\x19", "\\x1a", "\\e", "\\x1c", "\\x1d", "\\x1e", "\\x1f",
"\\N", "\\_", "\\L", "\\P");








public static function requiresDoubleQuoting($value)
{
return preg_match('/'.self::REGEX_CHARACTER_TO_ESCAPE.'/u', $value);
}








public static function escapeWithDoubleQuotes($value)
{
return sprintf('"%s"', str_replace(self::$escapees, self::$escaped, $value));
}








public static function requiresSingleQuoting($value)
{
return preg_match('/[ \s \' " \: \{ \} \[ \] , & \* \# \?] | \A[ - ? | < > = ! % @ ` ]/x', $value);
}








public static function escapeWithSingleQuotes($value)
{
return sprintf("'%s'", str_replace('\'', '\'\'', $value));
}
}
<?php









namespace Symfony\Component\Yaml;

use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Exception\DumpException;






class Inline
{
const REGEX_QUOTED_STRING = '(?:"([^"\\\\]*(?:\\\\.[^"\\\\]*)*)"|\'([^\']*(?:\'\'[^\']*)*)\')';

private static $exceptionOnInvalidType = false;
private static $objectSupport = false;












public static function parse($value, $exceptionOnInvalidType = false, $objectSupport = false)
{
self::$exceptionOnInvalidType = $exceptionOnInvalidType;
self::$objectSupport = $objectSupport;

$value = trim($value);

if (0 == strlen($value)) {
return '';
}

if (function_exists('mb_internal_encoding') && ((int) ini_get('mbstring.func_overload')) & 2) {
$mbEncoding = mb_internal_encoding();
mb_internal_encoding('ASCII');
}

$i = 0;
switch ($value[0]) {
case '[':
$result = self::parseSequence($value, $i);
++$i;
break;
case '{':
$result = self::parseMapping($value, $i);
++$i;
break;
default:
$result = self::parseScalar($value, null, array('"', "'"), $i);
}


 if (preg_replace('/\s+#.*$/A', '', substr($value, $i))) {
throw new ParseException(sprintf('Unexpected characters near "%s".', substr($value, $i)));
}

if (isset($mbEncoding)) {
mb_internal_encoding($mbEncoding);
}

return $result;
}












public static function dump($value, $exceptionOnInvalidType = false, $objectSupport = false)
{
switch (true) {
case is_resource($value):
if ($exceptionOnInvalidType) {
throw new DumpException(sprintf('Unable to dump PHP resources in a YAML file ("%s").', get_resource_type($value)));
}

return 'null';
case is_object($value):
if ($objectSupport) {
return '!!php/object:'.serialize($value);
}

if ($exceptionOnInvalidType) {
throw new DumpException('Object support when dumping a YAML file has been disabled.');
}

return 'null';
case is_array($value):
return self::dumpArray($value, $exceptionOnInvalidType, $objectSupport);
case null === $value:
return 'null';
case true === $value:
return 'true';
case false === $value:
return 'false';
case ctype_digit($value):
return is_string($value) ? "'$value'" : (int) $value;
case is_numeric($value):
$locale = setlocale(LC_NUMERIC, 0);
if (false !== $locale) {
setlocale(LC_NUMERIC, 'C');
}
$repr = is_string($value) ? "'$value'" : (is_infinite($value) ? str_ireplace('INF', '.Inf', strval($value)) : strval($value));

if (false !== $locale) {
setlocale(LC_NUMERIC, $locale);
}

return $repr;
case Escaper::requiresDoubleQuoting($value):
return Escaper::escapeWithDoubleQuotes($value);
case Escaper::requiresSingleQuoting($value):
return Escaper::escapeWithSingleQuotes($value);
case '' == $value:
return "''";
case preg_match(self::getTimestampRegex(), $value):
case in_array(strtolower($value), array('null', '~', 'true', 'false')):
return "'$value'";
default:
return $value;
}
}










private static function dumpArray($value, $exceptionOnInvalidType, $objectSupport)
{

 $keys = array_keys($value);
if ((1 == count($keys) && '0' == $keys[0])
|| (count($keys) > 1 && array_reduce($keys, function ($v, $w) { return (integer) $v + $w; }, 0) == count($keys) * (count($keys) - 1) / 2)
) {
$output = array();
foreach ($value as $val) {
$output[] = self::dump($val, $exceptionOnInvalidType, $objectSupport);
}

return sprintf('[%s]', implode(', ', $output));
}


 $output = array();
foreach ($value as $key => $val) {
$output[] = sprintf('%s: %s', self::dump($key, $exceptionOnInvalidType, $objectSupport), self::dump($val, $exceptionOnInvalidType, $objectSupport));
}

return sprintf('{ %s }', implode(', ', $output));
}














public static function parseScalar($scalar, $delimiters = null, $stringDelimiters = array('"', "'"), &$i = 0, $evaluate = true)
{
if (in_array($scalar[$i], $stringDelimiters)) {

 $output = self::parseQuotedScalar($scalar, $i);

if (null !== $delimiters) {
$tmp = ltrim(substr($scalar, $i), ' ');
if (!in_array($tmp[0], $delimiters)) {
throw new ParseException(sprintf('Unexpected characters (%s).', substr($scalar, $i)));
}
}
} else {

 if (!$delimiters) {
$output = substr($scalar, $i);
$i += strlen($output);


 if (false !== $strpos = strpos($output, ' #')) {
$output = rtrim(substr($output, 0, $strpos));
}
} elseif (preg_match('/^(.+?)('.implode('|', $delimiters).')/', substr($scalar, $i), $match)) {
$output = $match[1];
$i += strlen($output);
} else {
throw new ParseException(sprintf('Malformed inline YAML string (%s).', $scalar));
}

$output = $evaluate ? self::evaluateScalar($output) : $output;
}

return $output;
}











private static function parseQuotedScalar($scalar, &$i)
{
if (!preg_match('/'.self::REGEX_QUOTED_STRING.'/Au', substr($scalar, $i), $match)) {
throw new ParseException(sprintf('Malformed inline YAML string (%s).', substr($scalar, $i)));
}

$output = substr($match[0], 1, strlen($match[0]) - 2);

$unescaper = new Unescaper();
if ('"' == $scalar[$i]) {
$output = $unescaper->unescapeDoubleQuotedString($output);
} else {
$output = $unescaper->unescapeSingleQuotedString($output);
}

$i += strlen($match[0]);

return $output;
}











private static function parseSequence($sequence, &$i = 0)
{
$output = array();
$len = strlen($sequence);
$i += 1;


 while ($i < $len) {
switch ($sequence[$i]) {
case '[':

 $output[] = self::parseSequence($sequence, $i);
break;
case '{':

 $output[] = self::parseMapping($sequence, $i);
break;
case ']':
return $output;
case ',':
case ' ':
break;
default:
$isQuoted = in_array($sequence[$i], array('"', "'"));
$value = self::parseScalar($sequence, array(',', ']'), array('"', "'"), $i);

if (!$isQuoted && false !== strpos($value, ': ')) {

 try {
$value = self::parseMapping('{'.$value.'}');
} catch (\InvalidArgumentException $e) {

 }
}

$output[] = $value;

--$i;
}

++$i;
}

throw new ParseException(sprintf('Malformed inline YAML string %s', $sequence));
}











private static function parseMapping($mapping, &$i = 0)
{
$output = array();
$len = strlen($mapping);
$i += 1;


 while ($i < $len) {
switch ($mapping[$i]) {
case ' ':
case ',':
++$i;
continue 2;
case '}':
return $output;
}


 $key = self::parseScalar($mapping, array(':', ' '), array('"', "'"), $i, false);


 $done = false;
while ($i < $len) {
switch ($mapping[$i]) {
case '[':

 $output[$key] = self::parseSequence($mapping, $i);
$done = true;
break;
case '{':

 $output[$key] = self::parseMapping($mapping, $i);
$done = true;
break;
case ':':
case ' ':
break;
default:
$output[$key] = self::parseScalar($mapping, array(',', '}'), array('"', "'"), $i);
$done = true;
--$i;
}

++$i;

if ($done) {
continue 2;
}
}
}

throw new ParseException(sprintf('Malformed inline YAML string %s', $mapping));
}








private static function evaluateScalar($scalar)
{
$scalar = trim($scalar);

switch (true) {
case 'null' == strtolower($scalar):
case '' == $scalar:
case '~' == $scalar:
return null;
case 0 === strpos($scalar, '!str'):
return (string) substr($scalar, 5);
case 0 === strpos($scalar, '! '):
return intval(self::parseScalar(substr($scalar, 2)));
case 0 === strpos($scalar, '!!php/object:'):
if (self::$objectSupport) {
return unserialize(substr($scalar, 13));
}

if (self::$exceptionOnInvalidType) {
throw new ParseException('Object support when parsing a YAML file has been disabled.');
}

return null;
case ctype_digit($scalar):
$raw = $scalar;
$cast = intval($scalar);

return '0' == $scalar[0] ? octdec($scalar) : (((string) $raw == (string) $cast) ? $cast : $raw);
case '-' === $scalar[0] && ctype_digit(substr($scalar, 1)):
$raw = $scalar;
$cast = intval($scalar);

return '0' == $scalar[1] ? octdec($scalar) : (((string) $raw == (string) $cast) ? $cast : $raw);
case 'true' === strtolower($scalar):
return true;
case 'false' === strtolower($scalar):
return false;
case is_numeric($scalar):
return '0x' == $scalar[0].$scalar[1] ? hexdec($scalar) : floatval($scalar);
case 0 == strcasecmp($scalar, '.inf'):
case 0 == strcasecmp($scalar, '.NaN'):
return -log(0);
case 0 == strcasecmp($scalar, '-.inf'):
return log(0);
case preg_match('/^(-|\+)?[0-9,]+(\.[0-9]+)?$/', $scalar):
return floatval(str_replace(',', '', $scalar));
case preg_match(self::getTimestampRegex(), $scalar):
return strtotime($scalar);
default:
return (string) $scalar;
}
}








private static function getTimestampRegex()
{
return <<<EOF
        ~^
        (?P<year>[0-9][0-9][0-9][0-9])
        -(?P<month>[0-9][0-9]?)
        -(?P<day>[0-9][0-9]?)
        (?:(?:[Tt]|[ \t]+)
        (?P<hour>[0-9][0-9]?)
        :(?P<minute>[0-9][0-9])
        :(?P<second>[0-9][0-9])
        (?:\.(?P<fraction>[0-9]*))?
        (?:[ \t]*(?P<tz>Z|(?P<tz_sign>[-+])(?P<tz_hour>[0-9][0-9]?)
        (?::(?P<tz_minute>[0-9][0-9]))?))?)?
        $~x
EOF;
}
}
<?php










namespace Symfony\Component\Console\Command;

use Symfony\Component\Console\Helper\DescriptorHelper;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;






class HelpCommand extends Command
{
private $command;




protected function configure()
{
$this->ignoreValidationErrors();

$this
->setName('help')
->setDefinition(array(
new InputArgument('command_name', InputArgument::OPTIONAL, 'The command name', 'help'),
new InputOption('xml', null, InputOption::VALUE_NONE, 'To output help as XML'),
new InputOption('format', null, InputOption::VALUE_REQUIRED, 'To output help in other formats'),
new InputOption('raw', null, InputOption::VALUE_NONE, 'To output raw command help'),
))
->setDescription('Displays help for a command')
->setHelp(<<<EOF
The <info>%command.name%</info> command displays help for a given command:

  <info>php %command.full_name% list</info>

You can also output the help in other formats by using the <comment>--format</comment> option:

  <info>php %command.full_name% --format=xml list</info>

To display the list of available commands, please use the <info>list</info> command.
EOF
)
;
}






public function setCommand(Command $command)
{
$this->command = $command;
}




protected function execute(InputInterface $input, OutputInterface $output)
{
if (null === $this->command) {
$this->command = $this->getApplication()->find($input->getArgument('command_name'));
}

if ($input->getOption('xml')) {
$input->setOption('format', 'xml');
}

$helper = new DescriptorHelper();
$helper->describe($output, $this->command, $input->getOption('format'), $input->getOption('raw'));
$this->command = null;
}
}
<?php










namespace Symfony\Component\Console\Command;

use Symfony\Component\Console\Descriptor\TextDescriptor;
use Symfony\Component\Console\Descriptor\XmlDescriptor;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Helper\HelperSet;








class Command
{
private $application;
private $name;
private $aliases;
private $definition;
private $help;
private $description;
private $ignoreValidationErrors;
private $applicationDefinitionMerged;
private $applicationDefinitionMergedWithArgs;
private $code;
private $synopsis;
private $helperSet;










public function __construct($name = null)
{
$this->definition = new InputDefinition();
$this->ignoreValidationErrors = false;
$this->applicationDefinitionMerged = false;
$this->applicationDefinitionMergedWithArgs = false;
$this->aliases = array();

if (null !== $name) {
$this->setName($name);
}

$this->configure();

if (!$this->name) {
throw new \LogicException('The command name cannot be empty.');
}
}






public function ignoreValidationErrors()
{
$this->ignoreValidationErrors = true;
}








public function setApplication(Application $application = null)
{
$this->application = $application;
if ($application) {
$this->setHelperSet($application->getHelperSet());
} else {
$this->helperSet = null;
}
}






public function setHelperSet(HelperSet $helperSet)
{
$this->helperSet = $helperSet;
}






public function getHelperSet()
{
return $this->helperSet;
}








public function getApplication()
{
return $this->application;
}









public function isEnabled()
{
return true;
}




protected function configure()
{
}

















protected function execute(InputInterface $input, OutputInterface $output)
{
throw new \LogicException('You must override the execute() method in the concrete command class.');
}







protected function interact(InputInterface $input, OutputInterface $output)
{
}










protected function initialize(InputInterface $input, OutputInterface $output)
{
}




















public function run(InputInterface $input, OutputInterface $output)
{

 $this->getSynopsis();


 $this->mergeApplicationDefinition();


 try {
$input->bind($this->definition);
} catch (\Exception $e) {
if (!$this->ignoreValidationErrors) {
throw $e;
}
}

$this->initialize($input, $output);

if ($input->isInteractive()) {
$this->interact($input, $output);
}

$input->validate();

if ($this->code) {
$statusCode = call_user_func($this->code, $input, $output);
} else {
$statusCode = $this->execute($input, $output);
}

return is_numeric($statusCode) ? (int) $statusCode : 0;
}

















public function setCode($code)
{
if (!is_callable($code)) {
throw new \InvalidArgumentException('Invalid callable provided to Command::setCode.');
}

$this->code = $code;

return $this;
}








public function mergeApplicationDefinition($mergeArgs = true)
{
if (null === $this->application || (true === $this->applicationDefinitionMerged && ($this->applicationDefinitionMergedWithArgs || !$mergeArgs))) {
return;
}

if ($mergeArgs) {
$currentArguments = $this->definition->getArguments();
$this->definition->setArguments($this->application->getDefinition()->getArguments());
$this->definition->addArguments($currentArguments);
}

$this->definition->addOptions($this->application->getDefinition()->getOptions());

$this->applicationDefinitionMerged = true;
if ($mergeArgs) {
$this->applicationDefinitionMergedWithArgs = true;
}
}










public function setDefinition($definition)
{
if ($definition instanceof InputDefinition) {
$this->definition = $definition;
} else {
$this->definition->setDefinition($definition);
}

$this->applicationDefinitionMerged = false;

return $this;
}








public function getDefinition()
{
return $this->definition;
}











public function getNativeDefinition()
{
return $this->getDefinition();
}













public function addArgument($name, $mode = null, $description = '', $default = null)
{
$this->definition->addArgument(new InputArgument($name, $mode, $description, $default));

return $this;
}














public function addOption($name, $shortcut = null, $mode = null, $description = '', $default = null)
{
$this->definition->addOption(new InputOption($name, $shortcut, $mode, $description, $default));

return $this;
}

















public function setName($name)
{
$this->validateName($name);

$this->name = $name;

return $this;
}








public function getName()
{
return $this->name;
}










public function setDescription($description)
{
$this->description = $description;

return $this;
}








public function getDescription()
{
return $this->description;
}










public function setHelp($help)
{
$this->help = $help;

return $this;
}








public function getHelp()
{
return $this->help;
}







public function getProcessedHelp()
{
$name = $this->name;

$placeholders = array(
'%command.name%',
'%command.full_name%'
);
$replacements = array(
$name,
$_SERVER['PHP_SELF'].' '.$name
);

return str_replace($placeholders, $replacements, $this->getHelp());
}










public function setAliases($aliases)
{
foreach ($aliases as $alias) {
$this->validateName($alias);
}

$this->aliases = $aliases;

return $this;
}








public function getAliases()
{
return $this->aliases;
}






public function getSynopsis()
{
if (null === $this->synopsis) {
$this->synopsis = trim(sprintf('%s %s', $this->name, $this->definition->getSynopsis()));
}

return $this->synopsis;
}












public function getHelper($name)
{
return $this->helperSet->get($name);
}








public function asText()
{
$descriptor = new TextDescriptor();

return $descriptor->describe($this);
}










public function asXml($asDom = false)
{
$descriptor = new XmlDescriptor();

return $descriptor->describe($this, array('as_dom' => $asDom));
}

private function validateName($name)
{
if (!preg_match('/^[^\:]+(\:[^\:]+)*$/', $name)) {
throw new \InvalidArgumentException(sprintf('Command name "%s" is invalid.', $name));
}
}
}
<?php










namespace Symfony\Component\Console\Command;

use Symfony\Component\Console\Helper\DescriptorHelper;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputDefinition;






class ListCommand extends Command
{



protected function configure()
{
$this
->setName('list')
->setDefinition($this->createDefinition())
->setDescription('Lists commands')
->setHelp(<<<EOF
The <info>%command.name%</info> command lists all commands:

  <info>php %command.full_name%</info>

You can also display the commands for a specific namespace:

  <info>php %command.full_name% test</info>

You can also output the information in other formats by using the <comment>--format</comment> option:

  <info>php %command.full_name% --format=xml</info>

It's also possible to get raw list of commands (useful for embedding command runner):

  <info>php %command.full_name% --raw</info>
EOF
)
;
}




public function getNativeDefinition()
{
return $this->createDefinition();
}




protected function execute(InputInterface $input, OutputInterface $output)
{
if ($input->getOption('xml')) {
$input->setOption('format', 'xml');
}

$helper = new DescriptorHelper();
$helper->describe($output, $this->getApplication(), $input->getOption('format'), $input->getOption('raw'), $input->getArgument('namespace'));
}




private function createDefinition()
{
return new InputDefinition(array(
new InputArgument('namespace', InputArgument::OPTIONAL, 'The namespace name'),
new InputOption('xml', null, InputOption::VALUE_NONE, 'To output list as XML'),
new InputOption('raw', null, InputOption::VALUE_NONE, 'To output raw command list'),
new InputOption('format', null, InputOption::VALUE_REQUIRED, 'To output list in other formats'),
));
}
}
<?php










namespace Symfony\Component\Console\Tester;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Output\StreamOutput;











class ApplicationTester
{
private $application;
private $input;
private $output;






public function __construct(Application $application)
{
$this->application = $application;
}















public function run(array $input, $options = array())
{
$this->input = new ArrayInput($input);
if (isset($options['interactive'])) {
$this->input->setInteractive($options['interactive']);
}

$this->output = new StreamOutput(fopen('php://memory', 'w', false));
if (isset($options['decorated'])) {
$this->output->setDecorated($options['decorated']);
}
if (isset($options['verbosity'])) {
$this->output->setVerbosity($options['verbosity']);
}

return $this->application->run($this->input, $this->output);
}








public function getDisplay($normalize = false)
{
rewind($this->output->getStream());

$display = stream_get_contents($this->output->getStream());

if ($normalize) {
$display = str_replace(PHP_EOL, "\n", $display);
}

return $display;
}






public function getInput()
{
return $this->input;
}






public function getOutput()
{
return $this->output;
}
}
<?php










namespace Symfony\Component\Console\Tester;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\StreamOutput;






class CommandTester
{
private $command;
private $input;
private $output;






public function __construct(Command $command)
{
$this->command = $command;
}















public function execute(array $input, array $options = array())
{
$this->input = new ArrayInput($input);
if (isset($options['interactive'])) {
$this->input->setInteractive($options['interactive']);
}

$this->output = new StreamOutput(fopen('php://memory', 'w', false));
if (isset($options['decorated'])) {
$this->output->setDecorated($options['decorated']);
}
if (isset($options['verbosity'])) {
$this->output->setVerbosity($options['verbosity']);
}

return $this->command->run($this->input, $this->output);
}








public function getDisplay($normalize = false)
{
rewind($this->output->getStream());

$display = stream_get_contents($this->output->getStream());

if ($normalize) {
$display = str_replace(PHP_EOL, "\n", $display);
}

return $display;
}






public function getInput()
{
return $this->input;
}






public function getOutput()
{
return $this->output;
}
}
<?php










namespace Symfony\Component\Console\Formatter;




class OutputFormatterStyleStack
{



private $styles;




private $emptyStyle;






public function __construct(OutputFormatterStyleInterface $emptyStyle = null)
{
$this->emptyStyle = $emptyStyle ?: new OutputFormatterStyle();
$this->reset();
}




public function reset()
{
$this->styles = array();
}






public function push(OutputFormatterStyleInterface $style)
{
$this->styles[] = $style;
}










public function pop(OutputFormatterStyleInterface $style = null)
{
if (empty($this->styles)) {
return $this->emptyStyle;
}

if (null === $style) {
return array_pop($this->styles);
}

foreach (array_reverse($this->styles, true) as $index => $stackedStyle) {
if ($style->apply('') === $stackedStyle->apply('')) {
$this->styles = array_slice($this->styles, 0, $index);

return $stackedStyle;
}
}

throw new \InvalidArgumentException('Incorrectly nested style tag found.');
}






public function getCurrent()
{
if (empty($this->styles)) {
return $this->emptyStyle;
}

return $this->styles[count($this->styles)-1];
}






public function setEmptyStyle(OutputFormatterStyleInterface $emptyStyle)
{
$this->emptyStyle = $emptyStyle;

return $this;
}




public function getEmptyStyle()
{
return $this->emptyStyle;
}
}
<?php










namespace Symfony\Component\Console\Formatter;








class OutputFormatterStyle implements OutputFormatterStyleInterface
{
private static $availableForegroundColors = array(
'black' => 30,
'red' => 31,
'green' => 32,
'yellow' => 33,
'blue' => 34,
'magenta' => 35,
'cyan' => 36,
'white' => 37
);
private static $availableBackgroundColors = array(
'black' => 40,
'red' => 41,
'green' => 42,
'yellow' => 43,
'blue' => 44,
'magenta' => 45,
'cyan' => 46,
'white' => 47
);
private static $availableOptions = array(
'bold' => 1,
'underscore' => 4,
'blink' => 5,
'reverse' => 7,
'conceal' => 8
);

private $foreground;
private $background;
private $options = array();










public function __construct($foreground = null, $background = null, array $options = array())
{
if (null !== $foreground) {
$this->setForeground($foreground);
}
if (null !== $background) {
$this->setBackground($background);
}
if (count($options)) {
$this->setOptions($options);
}
}










public function setForeground($color = null)
{
if (null === $color) {
$this->foreground = null;

return;
}

if (!isset(static::$availableForegroundColors[$color])) {
throw new \InvalidArgumentException(sprintf(
'Invalid foreground color specified: "%s". Expected one of (%s)',
$color,
implode(', ', array_keys(static::$availableForegroundColors))
));
}

$this->foreground = static::$availableForegroundColors[$color];
}










public function setBackground($color = null)
{
if (null === $color) {
$this->background = null;

return;
}

if (!isset(static::$availableBackgroundColors[$color])) {
throw new \InvalidArgumentException(sprintf(
'Invalid background color specified: "%s". Expected one of (%s)',
$color,
implode(', ', array_keys(static::$availableBackgroundColors))
));
}

$this->background = static::$availableBackgroundColors[$color];
}










public function setOption($option)
{
if (!isset(static::$availableOptions[$option])) {
throw new \InvalidArgumentException(sprintf(
'Invalid option specified: "%s". Expected one of (%s)',
$option,
implode(', ', array_keys(static::$availableOptions))
));
}

if (false === array_search(static::$availableOptions[$option], $this->options)) {
$this->options[] = static::$availableOptions[$option];
}
}









public function unsetOption($option)
{
if (!isset(static::$availableOptions[$option])) {
throw new \InvalidArgumentException(sprintf(
'Invalid option specified: "%s". Expected one of (%s)',
$option,
implode(', ', array_keys(static::$availableOptions))
));
}

$pos = array_search(static::$availableOptions[$option], $this->options);
if (false !== $pos) {
unset($this->options[$pos]);
}
}






public function setOptions(array $options)
{
$this->options = array();

foreach ($options as $option) {
$this->setOption($option);
}
}








public function apply($text)
{
$codes = array();

if (null !== $this->foreground) {
$codes[] = $this->foreground;
}
if (null !== $this->background) {
$codes[] = $this->background;
}
if (count($this->options)) {
$codes = array_merge($codes, $this->options);
}

if (0 === count($codes)) {
return $text;
}

return sprintf("\033[%sm%s\033[0m", implode(';', $codes), $text);
}
}
<?php










namespace Symfony\Component\Console\Formatter;








interface OutputFormatterStyleInterface
{







public function setForeground($color = null);








public function setBackground($color = null);








public function setOption($option);






public function unsetOption($option);






public function setOptions(array $options);








public function apply($text);
}
<?php










namespace Symfony\Component\Console\Formatter;








class OutputFormatter implements OutputFormatterInterface
{



const FORMAT_PATTERN = '#(\\\\?)<(/?)([a-z][a-z0-9_=;-]+)?>((?: [^<\\\\]+ | (?!<(?:/?[a-z]|/>)). | .(?<=\\\\<) )*)#isx';

private $decorated;
private $styles = array();
private $styleStack;








public static function escape($text)
{
return preg_replace('/([^\\\\]?)</is', '$1\\<', $text);
}









public function __construct($decorated = null, array $styles = array())
{
$this->decorated = (Boolean) $decorated;

$this->setStyle('error', new OutputFormatterStyle('white', 'red'));
$this->setStyle('info', new OutputFormatterStyle('green'));
$this->setStyle('comment', new OutputFormatterStyle('yellow'));
$this->setStyle('question', new OutputFormatterStyle('black', 'cyan'));

foreach ($styles as $name => $style) {
$this->setStyle($name, $style);
}

$this->styleStack = new OutputFormatterStyleStack();
}








public function setDecorated($decorated)
{
$this->decorated = (Boolean) $decorated;
}








public function isDecorated()
{
return $this->decorated;
}









public function setStyle($name, OutputFormatterStyleInterface $style)
{
$this->styles[strtolower($name)] = $style;
}










public function hasStyle($name)
{
return isset($this->styles[strtolower($name)]);
}












public function getStyle($name)
{
if (!$this->hasStyle($name)) {
throw new \InvalidArgumentException(sprintf('Undefined style: %s', $name));
}

return $this->styles[strtolower($name)];
}










public function format($message)
{
$message = preg_replace_callback(self::FORMAT_PATTERN, array($this, 'replaceStyle'), $message);

return str_replace('\\<', '<', $message);
}




public function getStyleStack()
{
return $this->styleStack;
}








private function replaceStyle($match)
{

 if ('\\' === $match[1]) {
return $this->applyCurrentStyle($match[0]);
}

if ('' === $match[3]) {
if ('/' === $match[2]) {

 $this->styleStack->pop();

return $this->applyCurrentStyle($match[4]);
}


 return '<>'.$this->applyCurrentStyle($match[4]);
}

if (isset($this->styles[strtolower($match[3])])) {
$style = $this->styles[strtolower($match[3])];
} else {
$style = $this->createStyleFromString($match[3]);

if (false === $style) {
return $this->applyCurrentStyle($match[0]);
}
}

if ('/' === $match[2]) {
$this->styleStack->pop($style);
} else {
$this->styleStack->push($style);
}

return $this->applyCurrentStyle($match[4]);
}








private function createStyleFromString($string)
{
if (!preg_match_all('/([^=]+)=([^;]+)(;|$)/', strtolower($string), $matches, PREG_SET_ORDER)) {
return false;
}

$style = new OutputFormatterStyle();
foreach ($matches as $match) {
array_shift($match);

if ('fg' == $match[0]) {
$style->setForeground($match[1]);
} elseif ('bg' == $match[0]) {
$style->setBackground($match[1]);
} else {
$style->setOption($match[1]);
}
}

return $style;
}








private function applyCurrentStyle($text)
{
return $this->isDecorated() && strlen($text) > 0 ? $this->styleStack->getCurrent()->apply($text) : $text;
}
}
<?php










namespace Symfony\Component\Console\Formatter;








interface OutputFormatterInterface
{







public function setDecorated($decorated);








public function isDecorated();









public function setStyle($name, OutputFormatterStyleInterface $style);










public function hasStyle($name);










public function getStyle($name);










public function format($message);
}
<?php










namespace Symfony\Component\Console;

use Symfony\Component\Console\Descriptor\TextDescriptor;
use Symfony\Component\Console\Descriptor\XmlDescriptor;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\ArgvInput;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Output\ConsoleOutputInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Command\HelpCommand;
use Symfony\Component\Console\Command\ListCommand;
use Symfony\Component\Console\Helper\HelperSet;
use Symfony\Component\Console\Helper\FormatterHelper;
use Symfony\Component\Console\Helper\DialogHelper;
use Symfony\Component\Console\Helper\ProgressHelper;
use Symfony\Component\Console\Helper\TableHelper;
use Symfony\Component\Console\Event\ConsoleCommandEvent;
use Symfony\Component\Console\Event\ConsoleExceptionEvent;
use Symfony\Component\Console\Event\ConsoleTerminateEvent;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;


















class Application
{
private $commands;
private $wantHelps = false;
private $runningCommand;
private $name;
private $version;
private $catchExceptions;
private $autoExit;
private $definition;
private $helperSet;
private $dispatcher;









public function __construct($name = 'UNKNOWN', $version = 'UNKNOWN')
{
$this->name = $name;
$this->version = $version;
$this->catchExceptions = true;
$this->autoExit = true;
$this->commands = array();
$this->helperSet = $this->getDefaultHelperSet();
$this->definition = $this->getDefaultInputDefinition();

foreach ($this->getDefaultCommands() as $command) {
$this->add($command);
}
}

public function setDispatcher(EventDispatcherInterface $dispatcher)
{
$this->dispatcher = $dispatcher;
}













public function run(InputInterface $input = null, OutputInterface $output = null)
{
if (null === $input) {
$input = new ArgvInput();
}

if (null === $output) {
$output = new ConsoleOutput();
}

$this->configureIO($input, $output);

try {
$exitCode = $this->doRun($input, $output);
} catch (\Exception $e) {
if (!$this->catchExceptions) {
throw $e;
}

if ($output instanceof ConsoleOutputInterface) {
$this->renderException($e, $output->getErrorOutput());
} else {
$this->renderException($e, $output);
}

$exitCode = $e->getCode();
if (is_numeric($exitCode)) {
$exitCode = (int) $exitCode;
if (0 === $exitCode) {
$exitCode = 1;
}
} else {
$exitCode = 1;
}
}

if ($this->autoExit) {
if ($exitCode > 255) {
$exitCode = 255;
}

 exit($exitCode);

 }

return $exitCode;
}









public function doRun(InputInterface $input, OutputInterface $output)
{
if (true === $input->hasParameterOption(array('--version', '-V'))) {
$output->writeln($this->getLongVersion());

return 0;
}

$name = $this->getCommandName($input);
if (true === $input->hasParameterOption(array('--help', '-h'))) {
if (!$name) {
$name = 'help';
$input = new ArrayInput(array('command' => 'help'));
} else {
$this->wantHelps = true;
}
}

if (!$name) {
$name = 'list';
$input = new ArrayInput(array('command' => 'list'));
}


 $command = $this->find($name);

$this->runningCommand = $command;
$exitCode = $this->doRunCommand($command, $input, $output);
$this->runningCommand = null;

return $exitCode;
}








public function setHelperSet(HelperSet $helperSet)
{
$this->helperSet = $helperSet;
}








public function getHelperSet()
{
return $this->helperSet;
}








public function setDefinition(InputDefinition $definition)
{
$this->definition = $definition;
}






public function getDefinition()
{
return $this->definition;
}






public function getHelp()
{
$messages = array(
$this->getLongVersion(),
'',
'<comment>Usage:</comment>',
'  [options] command [arguments]',
'',
'<comment>Options:</comment>',
);

foreach ($this->getDefinition()->getOptions() as $option) {
$messages[] = sprintf('  %-29s %s %s',
'<info>--'.$option->getName().'</info>',
$option->getShortcut() ? '<info>-'.$option->getShortcut().'</info>' : '  ',
$option->getDescription()
);
}

return implode(PHP_EOL, $messages);
}








public function setCatchExceptions($boolean)
{
$this->catchExceptions = (Boolean) $boolean;
}








public function setAutoExit($boolean)
{
$this->autoExit = (Boolean) $boolean;
}








public function getName()
{
return $this->name;
}








public function setName($name)
{
$this->name = $name;
}








public function getVersion()
{
return $this->version;
}








public function setVersion($version)
{
$this->version = $version;
}








public function getLongVersion()
{
if ('UNKNOWN' !== $this->getName() && 'UNKNOWN' !== $this->getVersion()) {
return sprintf('<info>%s</info> version <comment>%s</comment>', $this->getName(), $this->getVersion());
}

return '<info>Console Tool</info>';
}










public function register($name)
{
return $this->add(new Command($name));
}








public function addCommands(array $commands)
{
foreach ($commands as $command) {
$this->add($command);
}
}












public function add(Command $command)
{
$command->setApplication($this);

if (!$command->isEnabled()) {
$command->setApplication(null);

return;
}

$this->commands[$command->getName()] = $command;

foreach ($command->getAliases() as $alias) {
$this->commands[$alias] = $command;
}

return $command;
}












public function get($name)
{
if (!isset($this->commands[$name])) {
throw new \InvalidArgumentException(sprintf('The command "%s" does not exist.', $name));
}

$command = $this->commands[$name];

if ($this->wantHelps) {
$this->wantHelps = false;

$helpCommand = $this->get('help');
$helpCommand->setCommand($command);

return $helpCommand;
}

return $command;
}










public function has($name)
{
return isset($this->commands[$name]);
}








public function getNamespaces()
{
$namespaces = array();
foreach ($this->commands as $command) {
$namespaces[] = $this->extractNamespace($command->getName());

foreach ($command->getAliases() as $alias) {
$namespaces[] = $this->extractNamespace($alias);
}
}

return array_values(array_unique(array_filter($namespaces)));
}










public function findNamespace($namespace)
{
$allNamespaces = $this->getNamespaces();
$found = '';
foreach (explode(':', $namespace) as $i => $part) {

 $namespaces = array();
foreach ($allNamespaces as $n) {
if ('' === $found || 0 === strpos($n, $found)) {
$namespaces[$n] = explode(':', $n);
}
}

$abbrevs = static::getAbbreviations(array_unique(array_values(array_filter(array_map(function ($p) use ($i) { return isset($p[$i]) ? $p[$i] : ''; }, $namespaces)))));

if (!isset($abbrevs[$part])) {
$message = sprintf('There are no commands defined in the "%s" namespace.', $namespace);

if (1 <= $i) {
$part = $found.':'.$part;
}

if ($alternatives = $this->findAlternativeNamespace($part, $abbrevs)) {
if (1 == count($alternatives)) {
$message .= "\n\nDid you mean this?\n    ";
} else {
$message .= "\n\nDid you mean one of these?\n    ";
}

$message .= implode("\n    ", $alternatives);
}

throw new \InvalidArgumentException($message);
}


 if (in_array($part, $abbrevs[$part])) {
$abbrevs[$part] = array($part);
}

if (count($abbrevs[$part]) > 1) {
throw new \InvalidArgumentException(sprintf('The namespace "%s" is ambiguous (%s).', $namespace, $this->getAbbreviationSuggestions($abbrevs[$part])));
}

$found .= $found ? ':' . $abbrevs[$part][0] : $abbrevs[$part][0];
}

return $found;
}















public function find($name)
{

 $namespace = '';
$searchName = $name;
if (false !== $pos = strrpos($name, ':')) {
$namespace = $this->findNamespace(substr($name, 0, $pos));
$searchName = $namespace.substr($name, $pos);
}


 $commands = array();
foreach ($this->commands as $command) {
$extractedNamespace = $this->extractNamespace($command->getName());
if ($extractedNamespace === $namespace
|| !empty($namespace) && 0 === strpos($extractedNamespace, $namespace)
) {
$commands[] = $command->getName();
}
}

$abbrevs = static::getAbbreviations(array_unique($commands));
if (isset($abbrevs[$searchName]) && 1 == count($abbrevs[$searchName])) {
return $this->get($abbrevs[$searchName][0]);
}

if (isset($abbrevs[$searchName]) && in_array($searchName, $abbrevs[$searchName])) {
return $this->get($searchName);
}

if (isset($abbrevs[$searchName]) && count($abbrevs[$searchName]) > 1) {
$suggestions = $this->getAbbreviationSuggestions($abbrevs[$searchName]);

throw new \InvalidArgumentException(sprintf('Command "%s" is ambiguous (%s).', $name, $suggestions));
}


 $aliases = array();
foreach ($this->commands as $command) {
foreach ($command->getAliases() as $alias) {
$extractedNamespace = $this->extractNamespace($alias);
if ($extractedNamespace === $namespace
|| !empty($namespace) && 0 === strpos($extractedNamespace, $namespace)
) {
$aliases[] = $alias;
}
}
}

$aliases = static::getAbbreviations(array_unique($aliases));
if (!isset($aliases[$searchName])) {
$message = sprintf('Command "%s" is not defined.', $name);

if ($alternatives = $this->findAlternativeCommands($searchName, $abbrevs)) {
if (1 == count($alternatives)) {
$message .= "\n\nDid you mean this?\n    ";
} else {
$message .= "\n\nDid you mean one of these?\n    ";
}
$message .= implode("\n    ", $alternatives);
}

throw new \InvalidArgumentException($message);
}

if (count($aliases[$searchName]) > 1) {
throw new \InvalidArgumentException(sprintf('Command "%s" is ambiguous (%s).', $name, $this->getAbbreviationSuggestions($aliases[$searchName])));
}

return $this->get($aliases[$searchName][0]);
}












public function all($namespace = null)
{
if (null === $namespace) {
return $this->commands;
}

$commands = array();
foreach ($this->commands as $name => $command) {
if ($namespace === $this->extractNamespace($name, substr_count($namespace, ':') + 1)) {
$commands[$name] = $command;
}
}

return $commands;
}








public static function getAbbreviations($names)
{
$abbrevs = array();
foreach ($names as $name) {
for ($len = strlen($name); $len > 0; --$len) {
$abbrev = substr($name, 0, $len);
$abbrevs[$abbrev][] = $name;
}
}

return $abbrevs;
}











public function asText($namespace = null, $raw = false)
{
$descriptor = new TextDescriptor();

return $descriptor->describe($this, array('namespace' => $namespace, 'raw_text' => $raw));
}











public function asXml($namespace = null, $asDom = false)
{
$descriptor = new XmlDescriptor();

return $descriptor->describe($this, array('namespace' => $namespace, 'as_dom' => $asDom));
}







public function renderException($e, $output)
{
$strlen = function ($string) {
if (!function_exists('mb_strlen')) {
return strlen($string);
}

if (false === $encoding = mb_detect_encoding($string)) {
return strlen($string);
}

return mb_strlen($string, $encoding);
};

do {
$title = sprintf('  [%s]  ', get_class($e));
$len = $strlen($title);
$width = $this->getTerminalWidth() ? $this->getTerminalWidth() - 1 : PHP_INT_MAX;
$lines = array();
foreach (preg_split('/\r?\n/', $e->getMessage()) as $line) {
foreach (str_split($line, $width - 4) as $line) {
$lines[] = sprintf('  %s  ', $line);
$len = max($strlen($line) + 4, $len);
}
}

$messages = array(str_repeat(' ', $len), $title.str_repeat(' ', max(0, $len - $strlen($title))));

foreach ($lines as $line) {
$messages[] = $line.str_repeat(' ', $len - $strlen($line));
}

$messages[] = str_repeat(' ', $len);

$output->writeln("");
$output->writeln("");
foreach ($messages as $message) {
$output->writeln('<error>'.$message.'</error>');
}
$output->writeln("");
$output->writeln("");

if (OutputInterface::VERBOSITY_VERBOSE <= $output->getVerbosity()) {
$output->writeln('<comment>Exception trace:</comment>');


 $trace = $e->getTrace();
array_unshift($trace, array(
'function' => '',
'file' => $e->getFile() != null ? $e->getFile() : 'n/a',
'line' => $e->getLine() != null ? $e->getLine() : 'n/a',
'args' => array(),
));

for ($i = 0, $count = count($trace); $i < $count; $i++) {
$class = isset($trace[$i]['class']) ? $trace[$i]['class'] : '';
$type = isset($trace[$i]['type']) ? $trace[$i]['type'] : '';
$function = $trace[$i]['function'];
$file = isset($trace[$i]['file']) ? $trace[$i]['file'] : 'n/a';
$line = isset($trace[$i]['line']) ? $trace[$i]['line'] : 'n/a';

$output->writeln(sprintf(' %s%s%s() at <info>%s:%s</info>', $class, $type, $function, $file, $line));
}

$output->writeln("");
$output->writeln("");
}
} while ($e = $e->getPrevious());

if (null !== $this->runningCommand) {
$output->writeln(sprintf('<info>%s</info>', sprintf($this->runningCommand->getSynopsis(), $this->getName())));
$output->writeln("");
$output->writeln("");
}
}






protected function getTerminalWidth()
{
$dimensions = $this->getTerminalDimensions();

return $dimensions[0];
}






protected function getTerminalHeight()
{
$dimensions = $this->getTerminalDimensions();

return $dimensions[1];
}






public function getTerminalDimensions()
{
if (defined('PHP_WINDOWS_VERSION_BUILD')) {

 if (preg_match('/^(\d+)x\d+ \(\d+x(\d+)\)$/', trim(getenv('ANSICON')), $matches)) {
return array((int) $matches[1], (int) $matches[2]);
}

 if (preg_match('/^(\d+)x(\d+)$/', $this->getConsoleMode(), $matches)) {
return array((int) $matches[1], (int) $matches[2]);
}
}

if ($sttyString = $this->getSttyColumns()) {

 if (preg_match('/rows.(\d+);.columns.(\d+);/i', $sttyString, $matches)) {
return array((int) $matches[2], (int) $matches[1]);
}

 if (preg_match('/;.(\d+).rows;.(\d+).columns/i', $sttyString, $matches)) {
return array((int) $matches[2], (int) $matches[1]);
}
}

return array(null, null);
}







protected function configureIO(InputInterface $input, OutputInterface $output)
{
if (true === $input->hasParameterOption(array('--ansi'))) {
$output->setDecorated(true);
} elseif (true === $input->hasParameterOption(array('--no-ansi'))) {
$output->setDecorated(false);
}

if (true === $input->hasParameterOption(array('--no-interaction', '-n'))) {
$input->setInteractive(false);
} elseif (function_exists('posix_isatty') && $this->getHelperSet()->has('dialog')) {
$inputStream = $this->getHelperSet()->get('dialog')->getInputStream();
if (!posix_isatty($inputStream)) {
$input->setInteractive(false);
}
}

if (true === $input->hasParameterOption(array('--quiet', '-q'))) {
$output->setVerbosity(OutputInterface::VERBOSITY_QUIET);
} else {
if ($input->hasParameterOption('-vvv') || $input->hasParameterOption('--verbose=3') || $input->getParameterOption('--verbose') === 3) {
$output->setVerbosity(OutputInterface::VERBOSITY_DEBUG);
} elseif ($input->hasParameterOption('-vv') || $input->hasParameterOption('--verbose=2') || $input->getParameterOption('--verbose') === 2) {
$output->setVerbosity(OutputInterface::VERBOSITY_VERY_VERBOSE);
} elseif ($input->hasParameterOption('-v') || $input->hasParameterOption('--verbose=1') || $input->hasParameterOption('--verbose') || $input->getParameterOption('--verbose')) {
$output->setVerbosity(OutputInterface::VERBOSITY_VERBOSE);
}
}
}













protected function doRunCommand(Command $command, InputInterface $input, OutputInterface $output)
{
if (null === $this->dispatcher) {
return $command->run($input, $output);
}

$event = new ConsoleCommandEvent($command, $input, $output);
$this->dispatcher->dispatch(ConsoleEvents::COMMAND, $event);

try {
$exitCode = $command->run($input, $output);
} catch (\Exception $e) {
$event = new ConsoleTerminateEvent($command, $input, $output, $e->getCode());
$this->dispatcher->dispatch(ConsoleEvents::TERMINATE, $event);

$event = new ConsoleExceptionEvent($command, $input, $output, $e, $event->getExitCode());
$this->dispatcher->dispatch(ConsoleEvents::EXCEPTION, $event);

throw $event->getException();
}

$event = new ConsoleTerminateEvent($command, $input, $output, $exitCode);
$this->dispatcher->dispatch(ConsoleEvents::TERMINATE, $event);

return $event->getExitCode();
}








protected function getCommandName(InputInterface $input)
{
return $input->getFirstArgument();
}






protected function getDefaultInputDefinition()
{
return new InputDefinition(array(
new InputArgument('command', InputArgument::REQUIRED, 'The command to execute'),

new InputOption('--help', '-h', InputOption::VALUE_NONE, 'Display this help message.'),
new InputOption('--quiet', '-q', InputOption::VALUE_NONE, 'Do not output any message.'),
new InputOption('--verbose', '-v|vv|vvv', InputOption::VALUE_NONE, 'Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug'),
new InputOption('--version', '-V', InputOption::VALUE_NONE, 'Display this application version.'),
new InputOption('--ansi', '', InputOption::VALUE_NONE, 'Force ANSI output.'),
new InputOption('--no-ansi', '', InputOption::VALUE_NONE, 'Disable ANSI output.'),
new InputOption('--no-interaction', '-n', InputOption::VALUE_NONE, 'Do not ask any interactive question.'),
));
}






protected function getDefaultCommands()
{
return array(new HelpCommand(), new ListCommand());
}






protected function getDefaultHelperSet()
{
return new HelperSet(array(
new FormatterHelper(),
new DialogHelper(),
new ProgressHelper(),
new TableHelper(),
));
}






private function getSttyColumns()
{
if (!function_exists('proc_open')) {
return;
}

$descriptorspec = array(1 => array('pipe', 'w'), 2 => array('pipe', 'w'));
$process = proc_open('stty -a | grep columns', $descriptorspec, $pipes, null, null, array('suppress_errors' => true));
if (is_resource($process)) {
$info = stream_get_contents($pipes[1]);
fclose($pipes[1]);
fclose($pipes[2]);
proc_close($process);

return $info;
}
}






private function getConsoleMode()
{
if (!function_exists('proc_open')) {
return;
}

$descriptorspec = array(1 => array('pipe', 'w'), 2 => array('pipe', 'w'));
$process = proc_open('mode CON', $descriptorspec, $pipes, null, null, array('suppress_errors' => true));
if (is_resource($process)) {
$info = stream_get_contents($pipes[1]);
fclose($pipes[1]);
fclose($pipes[2]);
proc_close($process);

if (preg_match('/--------+\r?\n.+?(\d+)\r?\n.+?(\d+)\r?\n/', $info, $matches)) {
return $matches[2].'x'.$matches[1];
}
}
}








private function getAbbreviationSuggestions($abbrevs)
{
return sprintf('%s, %s%s', $abbrevs[0], $abbrevs[1], count($abbrevs) > 2 ? sprintf(' and %d more', count($abbrevs) - 2) : '');
}











public function extractNamespace($name, $limit = null)
{
$parts = explode(':', $name);
array_pop($parts);

return implode(':', null === $limit ? $parts : array_slice($parts, 0, $limit));
}









private function findAlternativeCommands($name, $abbrevs)
{
$callback = function($item) {
return $item->getName();
};

return $this->findAlternatives($name, $this->commands, $abbrevs, $callback);
}









private function findAlternativeNamespace($name, $abbrevs)
{
return $this->findAlternatives($name, $this->getNamespaces(), $abbrevs);
}












private function findAlternatives($name, $collection, $abbrevs, $callback = null)
{
$alternatives = array();

foreach ($collection as $item) {
if (null !== $callback) {
$item = call_user_func($callback, $item);
}

$lev = levenshtein($name, $item);
if ($lev <= strlen($name) / 3 || false !== strpos($item, $name)) {
$alternatives[$item] = $lev;
}
}

if (!$alternatives) {
foreach ($abbrevs as $key => $values) {
$lev = levenshtein($name, $key);
if ($lev <= strlen($name) / 3 || false !== strpos($key, $name)) {
foreach ($values as $value) {
$alternatives[$value] = $lev;
}
}
}
}

asort($alternatives);

return array_keys($alternatives);
}
}
<?php










namespace Symfony\Component\Console\Input;








class InputArgument
{
const REQUIRED = 1;
const OPTIONAL = 2;
const IS_ARRAY = 4;

private $name;
private $mode;
private $default;
private $description;













public function __construct($name, $mode = null, $description = '', $default = null)
{
if (null === $mode) {
$mode = self::OPTIONAL;
} elseif (!is_int($mode) || $mode > 7 || $mode < 1) {
throw new \InvalidArgumentException(sprintf('Argument mode "%s" is not valid.', $mode));
}

$this->name = $name;
$this->mode = $mode;
$this->description = $description;

$this->setDefault($default);
}






public function getName()
{
return $this->name;
}






public function isRequired()
{
return self::REQUIRED === (self::REQUIRED & $this->mode);
}






public function isArray()
{
return self::IS_ARRAY === (self::IS_ARRAY & $this->mode);
}








public function setDefault($default = null)
{
if (self::REQUIRED === $this->mode && null !== $default) {
throw new \LogicException('Cannot set a default value except for InputArgument::OPTIONAL mode.');
}

if ($this->isArray()) {
if (null === $default) {
$default = array();
} elseif (!is_array($default)) {
throw new \LogicException('A default value for an array argument must be an array.');
}
}

$this->default = $default;
}






public function getDefault()
{
return $this->default;
}






public function getDescription()
{
return $this->description;
}
}
<?php










namespace Symfony\Component\Console\Input;












abstract class Input implements InputInterface
{
protected $definition;
protected $options;
protected $arguments;
protected $interactive = true;






public function __construct(InputDefinition $definition = null)
{
if (null === $definition) {
$this->arguments = array();
$this->options = array();
$this->definition = new InputDefinition();
} else {
$this->bind($definition);
$this->validate();
}
}






public function bind(InputDefinition $definition)
{
$this->arguments = array();
$this->options = array();
$this->definition = $definition;

$this->parse();
}




abstract protected function parse();






public function validate()
{
if (count($this->arguments) < $this->definition->getArgumentRequiredCount()) {
throw new \RuntimeException('Not enough arguments.');
}
}






public function isInteractive()
{
return $this->interactive;
}






public function setInteractive($interactive)
{
$this->interactive = (Boolean) $interactive;
}






public function getArguments()
{
return array_merge($this->definition->getArgumentDefaults(), $this->arguments);
}










public function getArgument($name)
{
if (!$this->definition->hasArgument($name)) {
throw new \InvalidArgumentException(sprintf('The "%s" argument does not exist.', $name));
}

return isset($this->arguments[$name]) ? $this->arguments[$name] : $this->definition->getArgument($name)->getDefault();
}









public function setArgument($name, $value)
{
if (!$this->definition->hasArgument($name)) {
throw new \InvalidArgumentException(sprintf('The "%s" argument does not exist.', $name));
}

$this->arguments[$name] = $value;
}








public function hasArgument($name)
{
return $this->definition->hasArgument($name);
}






public function getOptions()
{
return array_merge($this->definition->getOptionDefaults(), $this->options);
}










public function getOption($name)
{
if (!$this->definition->hasOption($name)) {
throw new \InvalidArgumentException(sprintf('The "%s" option does not exist.', $name));
}

return isset($this->options[$name]) ? $this->options[$name] : $this->definition->getOption($name)->getDefault();
}









public function setOption($name, $value)
{
if (!$this->definition->hasOption($name)) {
throw new \InvalidArgumentException(sprintf('The "%s" option does not exist.', $name));
}

$this->options[$name] = $value;
}








public function hasOption($name)
{
return $this->definition->hasOption($name);
}








public function escapeToken($token)
{
return preg_match('{^[\w-]+$}', $token) ? $token : escapeshellarg($token);
}
}
<?php










namespace Symfony\Component\Console\Input;












class StringInput extends ArgvInput
{
const REGEX_STRING = '([^\s]+?)(?:\s|(?<!\\\\)"|(?<!\\\\)\'|$)';
const REGEX_QUOTED_STRING = '(?:"([^"\\\\]*(?:\\\\.[^"\\\\]*)*)"|\'([^\'\\\\]*(?:\\\\.[^\'\\\\]*)*)\')';











public function __construct($input, InputDefinition $definition = null)
{
parent::__construct(array(), null);

$this->setTokens($this->tokenize($input));

if (null !== $definition) {
$this->bind($definition);
}
}










private function tokenize($input)
{
$tokens = array();
$length = strlen($input);
$cursor = 0;
while ($cursor < $length) {
if (preg_match('/\s+/A', $input, $match, null, $cursor)) {
} elseif (preg_match('/([^="\'\s]+?)(=?)('.self::REGEX_QUOTED_STRING.'+)/A', $input, $match, null, $cursor)) {
$tokens[] = $match[1].$match[2].stripcslashes(str_replace(array('"\'', '\'"', '\'\'', '""'), '', substr($match[3], 1, strlen($match[3]) - 2)));
} elseif (preg_match('/'.self::REGEX_QUOTED_STRING.'/A', $input, $match, null, $cursor)) {
$tokens[] = stripcslashes(substr($match[0], 1, strlen($match[0]) - 2));
} elseif (preg_match('/'.self::REGEX_STRING.'/A', $input, $match, null, $cursor)) {
$tokens[] = stripcslashes($match[1]);
} else {

 
 throw new \InvalidArgumentException(sprintf('Unable to parse input near "... %s ..."', substr($input, $cursor, 10)));

 }

$cursor += strlen($match[0]);
}

return $tokens;
}
}
<?php










namespace Symfony\Component\Console\Input;








class InputOption
{
const VALUE_NONE = 1;
const VALUE_REQUIRED = 2;
const VALUE_OPTIONAL = 4;
const VALUE_IS_ARRAY = 8;

private $name;
private $shortcut;
private $mode;
private $default;
private $description;














public function __construct($name, $shortcut = null, $mode = null, $description = '', $default = null)
{
if (0 === strpos($name, '--')) {
$name = substr($name, 2);
}

if (empty($name)) {
throw new \InvalidArgumentException('An option name cannot be empty.');
}

if (empty($shortcut)) {
$shortcut = null;
}

if (null !== $shortcut) {
if (is_array($shortcut)) {
$shortcut = implode('|', $shortcut);
}
$shortcuts = preg_split('{(\|)-?}', ltrim($shortcut, '-'));
$shortcuts = array_filter($shortcuts);
$shortcut = implode('|', $shortcuts);

if (empty($shortcut)) {
throw new \InvalidArgumentException('An option shortcut cannot be empty.');
}
}

if (null === $mode) {
$mode = self::VALUE_NONE;
} elseif (!is_int($mode) || $mode > 15 || $mode < 1) {
throw new \InvalidArgumentException(sprintf('Option mode "%s" is not valid.', $mode));
}

$this->name = $name;
$this->shortcut = $shortcut;
$this->mode = $mode;
$this->description = $description;

if ($this->isArray() && !$this->acceptValue()) {
throw new \InvalidArgumentException('Impossible to have an option mode VALUE_IS_ARRAY if the option does not accept a value.');
}

$this->setDefault($default);
}






public function getShortcut()
{
return $this->shortcut;
}






public function getName()
{
return $this->name;
}






public function acceptValue()
{
return $this->isValueRequired() || $this->isValueOptional();
}






public function isValueRequired()
{
return self::VALUE_REQUIRED === (self::VALUE_REQUIRED & $this->mode);
}






public function isValueOptional()
{
return self::VALUE_OPTIONAL === (self::VALUE_OPTIONAL & $this->mode);
}






public function isArray()
{
return self::VALUE_IS_ARRAY === (self::VALUE_IS_ARRAY & $this->mode);
}








public function setDefault($default = null)
{
if (self::VALUE_NONE === (self::VALUE_NONE & $this->mode) && null !== $default) {
throw new \LogicException('Cannot set a default value when using InputOption::VALUE_NONE mode.');
}

if ($this->isArray()) {
if (null === $default) {
$default = array();
} elseif (!is_array($default)) {
throw new \LogicException('A default value for an array option must be an array.');
}
}

$this->default = $this->acceptValue() ? $default : false;
}






public function getDefault()
{
return $this->default;
}






public function getDescription()
{
return $this->description;
}







public function equals(InputOption $option)
{
return $option->getName() === $this->getName()
&& $option->getShortcut() === $this->getShortcut()
&& $option->getDefault() === $this->getDefault()
&& $option->isArray() === $this->isArray()
&& $option->isValueRequired() === $this->isValueRequired()
&& $option->isValueOptional() === $this->isValueOptional()
;
}
}
<?php










namespace Symfony\Component\Console\Input;




























class ArgvInput extends Input
{
private $tokens;
private $parsed;









public function __construct(array $argv = null, InputDefinition $definition = null)
{
if (null === $argv) {
$argv = $_SERVER['argv'];
}


 array_shift($argv);

$this->tokens = $argv;

parent::__construct($definition);
}

protected function setTokens(array $tokens)
{
$this->tokens = $tokens;
}




protected function parse()
{
$parseOptions = true;
$this->parsed = $this->tokens;
while (null !== $token = array_shift($this->parsed)) {
if ($parseOptions && '' == $token) {
$this->parseArgument($token);
} elseif ($parseOptions && '--' == $token) {
$parseOptions = false;
} elseif ($parseOptions && 0 === strpos($token, '--')) {
$this->parseLongOption($token);
} elseif ($parseOptions && '-' === $token[0]) {
$this->parseShortOption($token);
} else {
$this->parseArgument($token);
}
}
}






private function parseShortOption($token)
{
$name = substr($token, 1);

if (strlen($name) > 1) {
if ($this->definition->hasShortcut($name[0]) && $this->definition->getOptionForShortcut($name[0])->acceptValue()) {

 $this->addShortOption($name[0], substr($name, 1));
} else {
$this->parseShortOptionSet($name);
}
} else {
$this->addShortOption($name, null);
}
}








private function parseShortOptionSet($name)
{
$len = strlen($name);
for ($i = 0; $i < $len; $i++) {
if (!$this->definition->hasShortcut($name[$i])) {
throw new \RuntimeException(sprintf('The "-%s" option does not exist.', $name[$i]));
}

$option = $this->definition->getOptionForShortcut($name[$i]);
if ($option->acceptValue()) {
$this->addLongOption($option->getName(), $i === $len - 1 ? null : substr($name, $i + 1));

break;
} else {
$this->addLongOption($option->getName(), null);
}
}
}






private function parseLongOption($token)
{
$name = substr($token, 2);

if (false !== $pos = strpos($name, '=')) {
$this->addLongOption(substr($name, 0, $pos), substr($name, $pos + 1));
} else {
$this->addLongOption($name, null);
}
}








private function parseArgument($token)
{
$c = count($this->arguments);


 if ($this->definition->hasArgument($c)) {
$arg = $this->definition->getArgument($c);
$this->arguments[$arg->getName()] = $arg->isArray()? array($token) : $token;


 } elseif ($this->definition->hasArgument($c - 1) && $this->definition->getArgument($c - 1)->isArray()) {
$arg = $this->definition->getArgument($c - 1);
$this->arguments[$arg->getName()][] = $token;


 } else {
throw new \RuntimeException('Too many arguments.');
}
}









private function addShortOption($shortcut, $value)
{
if (!$this->definition->hasShortcut($shortcut)) {
throw new \RuntimeException(sprintf('The "-%s" option does not exist.', $shortcut));
}

$this->addLongOption($this->definition->getOptionForShortcut($shortcut)->getName(), $value);
}









private function addLongOption($name, $value)
{
if (!$this->definition->hasOption($name)) {
throw new \RuntimeException(sprintf('The "--%s" option does not exist.', $name));
}

$option = $this->definition->getOption($name);


 if (false === $value) {
$value = null;
}

if (null !== $value && !$option->acceptValue()) {
throw new \RuntimeException(sprintf('The "--%s" option does not accept a value.', $name, $value));
}

if (null === $value && $option->acceptValue() && count($this->parsed)) {

 
 $next = array_shift($this->parsed);
if (isset($next[0]) && '-' !== $next[0]) {
$value = $next;
} elseif (empty($next)) {
$value = '';
} else {
array_unshift($this->parsed, $next);
}
}

if (null === $value) {
if ($option->isValueRequired()) {
throw new \RuntimeException(sprintf('The "--%s" option requires a value.', $name));
}

if (!$option->isArray()) {
$value = $option->isValueOptional() ? $option->getDefault() : true;
}
}

if ($option->isArray()) {
$this->options[$name][] = $value;
} else {
$this->options[$name] = $value;
}
}






public function getFirstArgument()
{
foreach ($this->tokens as $token) {
if ($token && '-' === $token[0]) {
continue;
}

return $token;
}
}











public function hasParameterOption($values)
{
$values = (array) $values;

foreach ($this->tokens as $v) {
if (in_array($v, $values)) {
return true;
}
}

return false;
}












public function getParameterOption($values, $default = false)
{
$values = (array) $values;

$tokens = $this->tokens;
while ($token = array_shift($tokens)) {
foreach ($values as $value) {
if (0 === strpos($token, $value)) {
if (false !== $pos = strpos($token, '=')) {
return substr($token, $pos + 1);
}

return array_shift($tokens);
}
}
}

return $default;
}






public function __toString()
{
$self = $this;
$tokens = array_map(function ($token) use ($self) {
if (preg_match('{^(-[^=]+=)(.+)}', $token, $match)) {
return $match[1] . $self->escapeToken($match[2]);
}

if ($token && $token[0] !== '-') {
return $self->escapeToken($token);
}

return $token;
}, $this->tokens);

return implode(' ', $tokens);
}
}
<?php










namespace Symfony\Component\Console\Input;






interface InputInterface
{





public function getFirstArgument();











public function hasParameterOption($values);












public function getParameterOption($values, $default = false);






public function bind(InputDefinition $definition);








public function validate();






public function getArguments();








public function getArgument($name);









public function setArgument($name, $value);








public function hasArgument($name);






public function getOptions();








public function getOption($name);









public function setOption($name, $value);








public function hasOption($name);






public function isInteractive();






public function setInteractive($interactive);
}
<?php










namespace Symfony\Component\Console\Input;












class ArrayInput extends Input
{
private $parameters;









public function __construct(array $parameters, InputDefinition $definition = null)
{
$this->parameters = $parameters;

parent::__construct($definition);
}






public function getFirstArgument()
{
foreach ($this->parameters as $key => $value) {
if ($key && '-' === $key[0]) {
continue;
}

return $value;
}
}











public function hasParameterOption($values)
{
$values = (array) $values;

foreach ($this->parameters as $k => $v) {
if (!is_int($k)) {
$v = $k;
}

if (in_array($v, $values)) {
return true;
}
}

return false;
}












public function getParameterOption($values, $default = false)
{
$values = (array) $values;

foreach ($this->parameters as $k => $v) {
if (is_int($k) && in_array($v, $values)) {
return true;
} elseif (in_array($k, $values)) {
return $v;
}
}

return $default;
}






public function __toString()
{
$params = array();
foreach ($this->parameters as $param => $val) {
if ($param && '-' === $param[0]) {
$params[] = $param . ('' != $val ? '='.$this->escapeToken($val) : '');
} else {
$params[] = $this->escapeToken($val);
}
}

return implode(' ', $params);
}




protected function parse()
{
foreach ($this->parameters as $key => $value) {
if (0 === strpos($key, '--')) {
$this->addLongOption(substr($key, 2), $value);
} elseif ('-' === $key[0]) {
$this->addShortOption(substr($key, 1), $value);
} else {
$this->addArgument($key, $value);
}
}
}









private function addShortOption($shortcut, $value)
{
if (!$this->definition->hasShortcut($shortcut)) {
throw new \InvalidArgumentException(sprintf('The "-%s" option does not exist.', $shortcut));
}

$this->addLongOption($this->definition->getOptionForShortcut($shortcut)->getName(), $value);
}










private function addLongOption($name, $value)
{
if (!$this->definition->hasOption($name)) {
throw new \InvalidArgumentException(sprintf('The "--%s" option does not exist.', $name));
}

$option = $this->definition->getOption($name);

if (null === $value) {
if ($option->isValueRequired()) {
throw new \InvalidArgumentException(sprintf('The "--%s" option requires a value.', $name));
}

$value = $option->isValueOptional() ? $option->getDefault() : true;
}

$this->options[$name] = $value;
}









private function addArgument($name, $value)
{
if (!$this->definition->hasArgument($name)) {
throw new \InvalidArgumentException(sprintf('The "%s" argument does not exist.', $name));
}

$this->arguments[$name] = $value;
}
}
<?php










namespace Symfony\Component\Console\Input;

use Symfony\Component\Console\Descriptor\TextDescriptor;
use Symfony\Component\Console\Descriptor\XmlDescriptor;















class InputDefinition
{
private $arguments;
private $requiredCount;
private $hasAnArrayArgument = false;
private $hasOptional;
private $options;
private $shortcuts;








public function __construct(array $definition = array())
{
$this->setDefinition($definition);
}








public function setDefinition(array $definition)
{
$arguments = array();
$options = array();
foreach ($definition as $item) {
if ($item instanceof InputOption) {
$options[] = $item;
} else {
$arguments[] = $item;
}
}

$this->setArguments($arguments);
$this->setOptions($options);
}








public function setArguments($arguments = array())
{
$this->arguments = array();
$this->requiredCount = 0;
$this->hasOptional = false;
$this->hasAnArrayArgument = false;
$this->addArguments($arguments);
}








public function addArguments($arguments = array())
{
if (null !== $arguments) {
foreach ($arguments as $argument) {
$this->addArgument($argument);
}
}
}










public function addArgument(InputArgument $argument)
{
if (isset($this->arguments[$argument->getName()])) {
throw new \LogicException(sprintf('An argument with name "%s" already exists.', $argument->getName()));
}

if ($this->hasAnArrayArgument) {
throw new \LogicException('Cannot add an argument after an array argument.');
}

if ($argument->isRequired() && $this->hasOptional) {
throw new \LogicException('Cannot add a required argument after an optional one.');
}

if ($argument->isArray()) {
$this->hasAnArrayArgument = true;
}

if ($argument->isRequired()) {
++$this->requiredCount;
} else {
$this->hasOptional = true;
}

$this->arguments[$argument->getName()] = $argument;
}












public function getArgument($name)
{
if (!$this->hasArgument($name)) {
throw new \InvalidArgumentException(sprintf('The "%s" argument does not exist.', $name));
}

$arguments = is_int($name) ? array_values($this->arguments) : $this->arguments;

return $arguments[$name];
}










public function hasArgument($name)
{
$arguments = is_int($name) ? array_values($this->arguments) : $this->arguments;

return isset($arguments[$name]);
}








public function getArguments()
{
return $this->arguments;
}






public function getArgumentCount()
{
return $this->hasAnArrayArgument ? PHP_INT_MAX : count($this->arguments);
}






public function getArgumentRequiredCount()
{
return $this->requiredCount;
}






public function getArgumentDefaults()
{
$values = array();
foreach ($this->arguments as $argument) {
$values[$argument->getName()] = $argument->getDefault();
}

return $values;
}








public function setOptions($options = array())
{
$this->options = array();
$this->shortcuts = array();
$this->addOptions($options);
}








public function addOptions($options = array())
{
foreach ($options as $option) {
$this->addOption($option);
}
}










public function addOption(InputOption $option)
{
if (isset($this->options[$option->getName()]) && !$option->equals($this->options[$option->getName()])) {
throw new \LogicException(sprintf('An option named "%s" already exists.', $option->getName()));
}

if ($option->getShortcut()) {
foreach (explode('|', $option->getShortcut()) as $shortcut) {
if (isset($this->shortcuts[$shortcut]) && !$option->equals($this->options[$this->shortcuts[$shortcut]])) {
throw new \LogicException(sprintf('An option with shortcut "%s" already exists.', $shortcut));
}
}
}

$this->options[$option->getName()] = $option;
if ($option->getShortcut()) {
foreach (explode('|', $option->getShortcut()) as $shortcut) {
$this->shortcuts[$shortcut] = $option->getName();
}
}
}












public function getOption($name)
{
if (!$this->hasOption($name)) {
throw new \InvalidArgumentException(sprintf('The "--%s" option does not exist.', $name));
}

return $this->options[$name];
}










public function hasOption($name)
{
return isset($this->options[$name]);
}








public function getOptions()
{
return $this->options;
}








public function hasShortcut($name)
{
return isset($this->shortcuts[$name]);
}








public function getOptionForShortcut($shortcut)
{
return $this->getOption($this->shortcutToName($shortcut));
}






public function getOptionDefaults()
{
$values = array();
foreach ($this->options as $option) {
$values[$option->getName()] = $option->getDefault();
}

return $values;
}










private function shortcutToName($shortcut)
{
if (!isset($this->shortcuts[$shortcut])) {
throw new \InvalidArgumentException(sprintf('The "-%s" option does not exist.', $shortcut));
}

return $this->shortcuts[$shortcut];
}






public function getSynopsis()
{
$elements = array();
foreach ($this->getOptions() as $option) {
$shortcut = $option->getShortcut() ? sprintf('-%s|', $option->getShortcut()) : '';
$elements[] = sprintf('['.($option->isValueRequired() ? '%s--%s="..."' : ($option->isValueOptional() ? '%s--%s[="..."]' : '%s--%s')).']', $shortcut, $option->getName());
}

foreach ($this->getArguments() as $argument) {
$elements[] = sprintf($argument->isRequired() ? '%s' : '[%s]', $argument->getName().($argument->isArray() ? '1' : ''));

if ($argument->isArray()) {
$elements[] = sprintf('... [%sN]', $argument->getName());
}
}

return implode(' ', $elements);
}








public function asText()
{
$descriptor = new TextDescriptor();

return $descriptor->describe($this);
}










public function asXml($asDom = false)
{
$descriptor = new XmlDescriptor();

return $descriptor->describe($this, array('as_dom' => $asDom));
}
}
<?php










namespace Symfony\Component\Console;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\StringInput;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Process\ProcessBuilder;
use Symfony\Component\Process\PhpExecutableFinder;










class Shell
{
private $application;
private $history;
private $output;
private $hasReadline;
private $processIsolation;









public function __construct(Application $application)
{
$this->hasReadline = function_exists('readline');
$this->application = $application;
$this->history = getenv('HOME').'/.history_'.$application->getName();
$this->output = new ConsoleOutput();
$this->processIsolation = false;
}




public function run()
{
$this->application->setAutoExit(false);
$this->application->setCatchExceptions(true);

if ($this->hasReadline) {
readline_read_history($this->history);
readline_completion_function(array($this, 'autocompleter'));
}

$this->output->writeln($this->getHeader());
$php = null;
if ($this->processIsolation) {
$finder = new PhpExecutableFinder();
$php = $finder->find();
$this->output->writeln(<<<EOF
<info>Running with process isolation, you should consider this:</info>
  * each command is executed as separate process,
  * commands don't support interactivity, all params must be passed explicitly,
  * commands output is not colorized.

EOF
);
}

while (true) {
$command = $this->readline();

if (false === $command) {
$this->output->writeln("\n");

break;
}

if ($this->hasReadline) {
readline_add_history($command);
readline_write_history($this->history);
}

if ($this->processIsolation) {
$pb = new ProcessBuilder();

$process = $pb
->add($php)
->add($_SERVER['argv'][0])
->add($command)
->inheritEnvironmentVariables(true)
->getProcess()
;

$output = $this->output;
$process->run(function($type, $data) use ($output) {
$output->writeln($data);
});

$ret = $process->getExitCode();
} else {
$ret = $this->application->run(new StringInput($command), $this->output);
}

if (0 !== $ret) {
$this->output->writeln(sprintf('<error>The command terminated with an error status (%s)</error>', $ret));
}
}
}






protected function getHeader()
{
return <<<EOF

Welcome to the <info>{$this->application->getName()}</info> shell (<comment>{$this->application->getVersion()}</comment>).

At the prompt, type <comment>help</comment> for some help,
or <comment>list</comment> to get a list of available commands.

To exit the shell, type <comment>^D</comment>.

EOF;
}






protected function getPrompt()
{

 return $this->output->getFormatter()->format($this->application->getName().' > ');
}

protected function getOutput()
{
return $this->output;
}

protected function getApplication()
{
return $this->application;
}








private function autocompleter($text)
{
$info = readline_info();
$text = substr($info['line_buffer'], 0, $info['end']);

if ($info['point'] !== $info['end']) {
return true;
}


 if (false === strpos($text, ' ') || !$text) {
return array_keys($this->application->all());
}


 try {
$command = $this->application->find(substr($text, 0, strpos($text, ' ')));
} catch (\Exception $e) {
return true;
}

$list = array('--help');
foreach ($command->getDefinition()->getOptions() as $option) {
$list[] = '--'.$option->getName();
}

return $list;
}






private function readline()
{
if ($this->hasReadline) {
$line = readline($this->getPrompt());
} else {
$this->output->write($this->getPrompt());
$line = fgets(STDIN, 1024);
$line = (!$line && strlen($line) == 0) ? false : rtrim($line);
}

return $line;
}

public function getProcessIsolation()
{
return $this->processIsolation;
}

public function setProcessIsolation($processIsolation)
{
$this->processIsolation = (Boolean) $processIsolation;

if ($this->processIsolation && !class_exists('Symfony\\Component\\Process\\Process')) {
throw new \RuntimeException('Unable to isolate processes as the Symfony Process Component is not installed.');
}
}
}
<?php










namespace Symfony\Component\Console\Output;

use Symfony\Component\Console\Formatter\OutputFormatterInterface;
use Symfony\Component\Console\Formatter\OutputFormatter;
















abstract class Output implements OutputInterface
{
private $verbosity;
private $formatter;










public function __construct($verbosity = self::VERBOSITY_NORMAL, $decorated = false, OutputFormatterInterface $formatter = null)
{
$this->verbosity = null === $verbosity ? self::VERBOSITY_NORMAL : $verbosity;
$this->formatter = null === $formatter ? new OutputFormatter() : $formatter;
$this->formatter->setDecorated($decorated);
}




public function setFormatter(OutputFormatterInterface $formatter)
{
$this->formatter = $formatter;
}




public function getFormatter()
{
return $this->formatter;
}




public function setDecorated($decorated)
{
$this->formatter->setDecorated($decorated);
}




public function isDecorated()
{
return $this->formatter->isDecorated();
}




public function setVerbosity($level)
{
$this->verbosity = (int) $level;
}




public function getVerbosity()
{
return $this->verbosity;
}




public function writeln($messages, $type = self::OUTPUT_NORMAL)
{
$this->write($messages, true, $type);
}




public function write($messages, $newline = false, $type = self::OUTPUT_NORMAL)
{
if (self::VERBOSITY_QUIET === $this->verbosity) {
return;
}

$messages = (array) $messages;

foreach ($messages as $message) {
switch ($type) {
case OutputInterface::OUTPUT_NORMAL:
$message = $this->formatter->format($message);
break;
case OutputInterface::OUTPUT_RAW:
break;
case OutputInterface::OUTPUT_PLAIN:
$message = strip_tags($this->formatter->format($message));
break;
default:
throw new \InvalidArgumentException(sprintf('Unknown output type given (%s)', $type));
}

$this->doWrite($message, $newline);
}
}







abstract protected function doWrite($message, $newline);
}
<?php










namespace Symfony\Component\Console\Output;

use Symfony\Component\Console\Formatter\OutputFormatter;
use Symfony\Component\Console\Formatter\OutputFormatterInterface;











class NullOutput implements OutputInterface
{



public function setFormatter(OutputFormatterInterface $formatter)
{

 }




public function getFormatter()
{

 return new OutputFormatter();
}




public function setDecorated($decorated)
{

 }




public function isDecorated()
{
return false;
}




public function setVerbosity($level)
{

 }




public function getVerbosity()
{
return self::VERBOSITY_QUIET;
}




public function writeln($messages, $type = self::OUTPUT_NORMAL)
{

 }




public function write($messages, $newline = false, $type = self::OUTPUT_NORMAL)
{

 }
}
<?php










namespace Symfony\Component\Console\Output;

use Symfony\Component\Console\Output\OutputInterface;







interface ConsoleOutputInterface extends OutputInterface
{





public function getErrorOutput();






public function setErrorOutput(OutputInterface $error);
}
<?php










namespace Symfony\Component\Console\Output;

use Symfony\Component\Console\Formatter\OutputFormatterInterface;
















class StreamOutput extends Output
{
private $stream;













public function __construct($stream, $verbosity = self::VERBOSITY_NORMAL, $decorated = null, OutputFormatterInterface $formatter = null)
{
if (!is_resource($stream) || 'stream' !== get_resource_type($stream)) {
throw new \InvalidArgumentException('The StreamOutput class needs a stream as its first argument.');
}

$this->stream = $stream;

if (null === $decorated) {
$decorated = $this->hasColorSupport();
}

parent::__construct($verbosity, $decorated, $formatter);
}






public function getStream()
{
return $this->stream;
}




protected function doWrite($message, $newline)
{
if (false === @fwrite($this->stream, $message.($newline ? PHP_EOL : ''))) {

 
 throw new \RuntimeException('Unable to write output.');

 }

fflush($this->stream);
}











protected function hasColorSupport()
{

 if (DIRECTORY_SEPARATOR == '\\') {
return false !== getenv('ANSICON') || 'ON' === getenv('ConEmuANSI');
}

return function_exists('posix_isatty') && @posix_isatty($this->stream);

 }
}
<?php










namespace Symfony\Component\Console\Output;

use Symfony\Component\Console\Formatter\OutputFormatterInterface;








interface OutputInterface
{
const VERBOSITY_QUIET = 0;
const VERBOSITY_NORMAL = 1;
const VERBOSITY_VERBOSE = 2;
const VERBOSITY_VERY_VERBOSE = 3;
const VERBOSITY_DEBUG = 4;

const OUTPUT_NORMAL = 0;
const OUTPUT_RAW = 1;
const OUTPUT_PLAIN = 2;












public function write($messages, $newline = false, $type = self::OUTPUT_NORMAL);











public function writeln($messages, $type = self::OUTPUT_NORMAL);








public function setVerbosity($level);








public function getVerbosity();








public function setDecorated($decorated);








public function isDecorated();








public function setFormatter(OutputFormatterInterface $formatter);








public function getFormatter();
}
<?php










namespace Symfony\Component\Console\Output;

use Symfony\Component\Console\Formatter\OutputFormatterInterface;
use Symfony\Component\Console\Output\ConsoleOutputInterface;
















class ConsoleOutput extends StreamOutput implements ConsoleOutputInterface
{
private $stderr;










public function __construct($verbosity = self::VERBOSITY_NORMAL, $decorated = null, OutputFormatterInterface $formatter = null)
{
$outputStream = 'php://stdout';
if (!$this->hasStdoutSupport()) {
$outputStream = 'php://output';
}

parent::__construct(fopen($outputStream, 'w'), $verbosity, $decorated, $formatter);

$this->stderr = new StreamOutput(fopen('php://stderr', 'w'), $verbosity, $decorated, $formatter);
}




public function setDecorated($decorated)
{
parent::setDecorated($decorated);
$this->stderr->setDecorated($decorated);
}




public function setFormatter(OutputFormatterInterface $formatter)
{
parent::setFormatter($formatter);
$this->stderr->setFormatter($formatter);
}




public function setVerbosity($level)
{
parent::setVerbosity($level);
$this->stderr->setVerbosity($level);
}




public function getErrorOutput()
{
return $this->stderr;
}




public function setErrorOutput(OutputInterface $error)
{
$this->stderr = $error;
}











protected function hasStdoutSupport()
{
return ('OS400' != php_uname('s'));
}
}
<?php










namespace Symfony\Component\Console\Descriptor;






interface DescriptorInterface
{








public function describe($object, array $options = array());
}
<?php










namespace Symfony\Component\Console\Descriptor;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputOption;






class TextDescriptor extends Descriptor
{



protected function describeInputArgument(InputArgument $argument, array $options = array())
{
if (null !== $argument->getDefault() && (!is_array($argument->getDefault()) || count($argument->getDefault()))) {
$default = sprintf('<comment> (default: %s)</comment>', $this->formatDefaultValue($argument->getDefault()));
} else {
$default = '';
}

$nameWidth = isset($options['name_width']) ? $options['name_width'] : strlen($argument->getName());
$output = str_replace("\n", "\n".str_repeat(' ', $nameWidth + 2), $argument->getDescription());
$output = sprintf(" <info>%-${nameWidth}s</info> %s%s", $argument->getName(), $output, $default);

return isset($options['raw_text']) && $options['raw_text'] ? strip_tags($output) : $output;
}




protected function describeInputOption(InputOption $option, array $options = array())
{
if ($option->acceptValue() && null !== $option->getDefault() && (!is_array($option->getDefault()) || count($option->getDefault()))) {
$default = sprintf('<comment> (default: %s)</comment>', $this->formatDefaultValue($option->getDefault()));
} else {
$default = '';
}

$nameWidth = isset($options['name_width']) ? $options['name_width'] : strlen($option->getName());
$nameWithShortcutWidth = $nameWidth - strlen($option->getName()) - 2;

$output = sprintf(" <info>%s</info> %-${nameWithShortcutWidth}s%s%s%s",
'--'.$option->getName(),
$option->getShortcut() ? sprintf('(-%s) ', $option->getShortcut()) : '',
str_replace("\n", "\n".str_repeat(' ', $nameWidth + 2), $option->getDescription()),
$default,
$option->isArray() ? '<comment> (multiple values allowed)</comment>' : ''
);

return isset($options['raw_text']) && $options['raw_text'] ? strip_tags($output) : $output;
}




protected function describeInputDefinition(InputDefinition $definition, array $options = array())
{
$nameWidth = 0;
foreach ($definition->getOptions() as $option) {
$nameLength = strlen($option->getName()) + 2;
if ($option->getShortcut()) {
$nameLength += strlen($option->getShortcut()) + 3;
}
$nameWidth = max($nameWidth, $nameLength);
}
foreach ($definition->getArguments() as $argument) {
$nameWidth = max($nameWidth, strlen($argument->getName()));
}
++$nameWidth;

$messages = array();

if ($definition->getArguments()) {
$messages[] = '<comment>Arguments:</comment>';
foreach ($definition->getArguments() as $argument) {
$messages[] = $this->describeInputArgument($argument, array('name_width' => $nameWidth));
}
$messages[] = '';
}

if ($definition->getOptions()) {
$messages[] = '<comment>Options:</comment>';
foreach ($definition->getOptions() as $option) {
$messages[] = $this->describeInputOption($option, array('name_width' => $nameWidth));
}
$messages[] = '';
}

$output = implode("\n", $messages);

return isset($options['raw_text']) && $options['raw_text'] ? strip_tags($output) : $output;
}




protected function describeCommand(Command $command, array $options = array())
{
$command->getSynopsis();
$command->mergeApplicationDefinition(false);
$messages = array('<comment>Usage:</comment>', ' '.$command->getSynopsis(), '');

if ($command->getAliases()) {
$messages[] = '<comment>Aliases:</comment> <info>'.implode(', ', $command->getAliases()).'</info>';
}

$messages[] = $this->describeInputDefinition($command->getNativeDefinition());

if ($help = $command->getProcessedHelp()) {
$messages[] = '<comment>Help:</comment>';
$messages[] = ' '.str_replace("\n", "\n ", $help)."\n";
}

$output = implode("\n", $messages);

return isset($options['raw_text']) && $options['raw_text'] ? strip_tags($output) : $output;
}




protected function describeApplication(Application $application, array $options = array())
{
$describedNamespace = isset($options['namespace']) ? $options['namespace'] : null;
$description = new ApplicationDescription($application, $describedNamespace);
$messages = array();

if (isset($options['raw_text']) && $options['raw_text']) {
$width = $this->getColumnWidth($description->getCommands());

foreach ($description->getCommands() as $command) {
$messages[] = sprintf("%-${width}s %s", $command->getName(), $command->getDescription());
}
} else {
$width = $this->getColumnWidth($description->getCommands());

$messages[] = $application->getHelp();
$messages[] = '';

if ($describedNamespace) {
$messages[] = sprintf("<comment>Available commands for the \"%s\" namespace:</comment>", $describedNamespace);
} else {
$messages[] = '<comment>Available commands:</comment>';
}


 foreach ($description->getNamespaces() as $namespace) {
if (!$describedNamespace && ApplicationDescription::GLOBAL_NAMESPACE !== $namespace['id']) {
$messages[] = '<comment>'.$namespace['id'].'</comment>';
}

foreach ($namespace['commands'] as $name) {
$messages[] = sprintf("  <info>%-${width}s</info> %s", $name, $description->getCommand($name)->getDescription());
}
}
}

$output = implode("\n", $messages);

return isset($options['raw_text']) && $options['raw_text'] ? strip_tags($output) : $output;
}








private function formatDefaultValue($default)
{
if (version_compare(PHP_VERSION, '5.4', '<')) {
return str_replace('\/', '/', json_encode($default));
}

return json_encode($default, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}






private function getColumnWidth(array $commands)
{
$width = 0;
foreach ($commands as $command) {
$width = strlen($command->getName()) > $width ? strlen($command->getName()) : $width;
}

return $width + 2;
}
}
<?php










namespace Symfony\Component\Console\Descriptor;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputOption;






class XmlDescriptor extends Descriptor
{



protected function describeInputArgument(InputArgument $argument, array $options = array())
{
$dom = new \DOMDocument('1.0', 'UTF-8');

$dom->appendChild($objectXML = $dom->createElement('argument'));
$objectXML->setAttribute('name', $argument->getName());
$objectXML->setAttribute('is_required', $argument->isRequired() ? 1 : 0);
$objectXML->setAttribute('is_array', $argument->isArray() ? 1 : 0);
$objectXML->appendChild($descriptionXML = $dom->createElement('description'));
$descriptionXML->appendChild($dom->createTextNode($argument->getDescription()));

$objectXML->appendChild($defaultsXML = $dom->createElement('defaults'));
$defaults = is_array($argument->getDefault()) ? $argument->getDefault() : (is_bool($argument->getDefault()) ? array(var_export($argument->getDefault(), true)) : ($argument->getDefault() ? array($argument->getDefault()) : array()));
foreach ($defaults as $default) {
$defaultsXML->appendChild($defaultXML = $dom->createElement('default'));
$defaultXML->appendChild($dom->createTextNode($default));
}

return $this->output($dom, $options);
}




protected function describeInputOption(InputOption $option, array $options = array())
{
$dom = new \DOMDocument('1.0', 'UTF-8');

$dom->appendChild($objectXML = $dom->createElement('option'));
$objectXML->setAttribute('name', '--'.$option->getName());
$pos = strpos($option->getShortcut(), '|');
if (false !== $pos) {
$objectXML->setAttribute('shortcut', '-'.substr($option->getShortcut(), 0, $pos));
$objectXML->setAttribute('shortcuts', '-'.implode('|-', explode('|', $option->getShortcut())));
} else {
$objectXML->setAttribute('shortcut', $option->getShortcut() ? '-'.$option->getShortcut() : '');
}
$objectXML->setAttribute('accept_value', $option->acceptValue() ? 1 : 0);
$objectXML->setAttribute('is_value_required', $option->isValueRequired() ? 1 : 0);
$objectXML->setAttribute('is_multiple', $option->isArray() ? 1 : 0);
$objectXML->appendChild($descriptionXML = $dom->createElement('description'));
$descriptionXML->appendChild($dom->createTextNode($option->getDescription()));

if ($option->acceptValue()) {
$defaults = is_array($option->getDefault()) ? $option->getDefault() : (is_bool($option->getDefault()) ? array(var_export($option->getDefault(), true)) : ($option->getDefault() ? array($option->getDefault()) : array()));
$objectXML->appendChild($defaultsXML = $dom->createElement('defaults'));

if (!empty($defaults)) {
foreach ($defaults as $default) {
$defaultsXML->appendChild($defaultXML = $dom->createElement('default'));
$defaultXML->appendChild($dom->createTextNode($default));
}
}
}

return $this->output($dom, $options);
}




protected function describeInputDefinition(InputDefinition $definition, array $options = array())
{
$dom = new \DOMDocument('1.0', 'UTF-8');
$dom->appendChild($definitionXML = $dom->createElement('definition'));

$definitionXML->appendChild($argumentsXML = $dom->createElement('arguments'));
foreach ($definition->getArguments() as $argument) {
$this->appendDocument($argumentsXML, $this->describeInputArgument($argument, array('as_dom' => true)));
}

$definitionXML->appendChild($optionsXML = $dom->createElement('options'));
foreach ($definition->getOptions() as $option) {
$this->appendDocument($optionsXML, $this->describeInputOption($option, array('as_dom' => true)));
}

return $this->output($dom, $options);
}




protected function describeCommand(Command $command, array $options = array())
{
$dom = new \DOMDocument('1.0', 'UTF-8');
$dom->appendChild($commandXML = $dom->createElement('command'));

$command->getSynopsis();
$command->mergeApplicationDefinition(false);

$commandXML->setAttribute('id', $command->getName());
$commandXML->setAttribute('name', $command->getName());

$commandXML->appendChild($usageXML = $dom->createElement('usage'));
$usageXML->appendChild($dom->createTextNode(sprintf($command->getSynopsis(), '')));

$commandXML->appendChild($descriptionXML = $dom->createElement('description'));
$descriptionXML->appendChild($dom->createTextNode(str_replace("\n", "\n ", $command->getDescription())));

$commandXML->appendChild($helpXML = $dom->createElement('help'));
$helpXML->appendChild($dom->createTextNode(str_replace("\n", "\n ", $command->getProcessedHelp())));

$commandXML->appendChild($aliasesXML = $dom->createElement('aliases'));
foreach ($command->getAliases() as $alias) {
$aliasesXML->appendChild($aliasXML = $dom->createElement('alias'));
$aliasXML->appendChild($dom->createTextNode($alias));
}

$definitionXML = $this->describeInputDefinition($command->getNativeDefinition(), array('as_dom' => true));
$this->appendDocument($commandXML, $definitionXML->getElementsByTagName('definition')->item(0));

return $this->output($dom, $options);
}




protected function describeApplication(Application $application, array $options = array())
{
$dom = new \DOMDocument('1.0', 'UTF-8');
$dom->appendChild($rootXml = $dom->createElement('symfony'));
$rootXml->appendChild($commandsXML = $dom->createElement('commands'));

$describedNamespace = isset($options['namespace']) ? $options['namespace'] : null;
$description = new ApplicationDescription($application, $describedNamespace);

if ($describedNamespace) {
$commandsXML->setAttribute('namespace', $describedNamespace);
}

foreach ($description->getCommands() as $command) {
$this->appendDocument($commandsXML, $this->describeCommand($command, array('as_dom' => true)));
}

if (!$describedNamespace) {
$rootXml->appendChild($namespacesXML = $dom->createElement('namespaces'));

foreach ($description->getNamespaces() as $namespace) {
$namespacesXML->appendChild($namespaceArrayXML = $dom->createElement('namespace'));
$namespaceArrayXML->setAttribute('id', $namespace['id']);

foreach ($namespace['commands'] as $name) {
$namespaceArrayXML->appendChild($commandXML = $dom->createElement('command'));
$commandXML->appendChild($dom->createTextNode($name));
}
}
}

return $this->output($dom, $options);
}







private function appendDocument(\DOMNode $parentNode, \DOMNode $importedParent)
{
foreach ($importedParent->childNodes as $childNode) {
$parentNode->appendChild($parentNode->ownerDocument->importNode($childNode, true));
}
}









private function output(\DOMDocument $dom, array $options)
{
if (isset($options['as_dom']) && $options['as_dom']) {
return $dom;
}

$dom->formatOutput = true;

return $dom->saveXML();
}
}
<?php










namespace Symfony\Component\Console\Descriptor;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputOption;






class MarkdownDescriptor extends Descriptor
{



protected function describeInputArgument(InputArgument $argument, array $options = array())
{
return '**'.$argument->getName().':**'."\n\n"
.'* Name: '.($argument->getName() ?: '<none>')."\n"
.'* Is required: '.($argument->isRequired() ? 'yes' : 'no')."\n"
.'* Is array: '.($argument->isArray() ? 'yes' : 'no')."\n"
.'* Description: '.($argument->getDescription() ?: '<none>')."\n"
.'* Default: `'.str_replace("\n", '', var_export($argument->getDefault(), true)).'`';
}




protected function describeInputOption(InputOption $option, array $options = array())
{
return '**'.$option->getName().':**'."\n\n"
.'* Name: `--'.$option->getName().'`'."\n"
.'* Shortcut: '.($option->getShortcut() ? '`-'.implode('|-', explode('|', $option->getShortcut())).'`' : '<none>')."\n"
.'* Accept value: '.($option->acceptValue() ? 'yes' : 'no')."\n"
.'* Is value required: '.($option->isValueRequired() ? 'yes' : 'no')."\n"
.'* Is multiple: '.($option->isArray() ? 'yes' : 'no')."\n"
.'* Description: '.($option->getDescription() ?: '<none>')."\n"
.'* Default: `'.str_replace("\n", '', var_export($option->getDefault(), true)).'`';
}




protected function describeInputDefinition(InputDefinition $definition, array $options = array())
{
$blocks = array();

if (count($definition->getArguments()) > 0) {
$blocks[] = '### Arguments:';
foreach ($definition->getArguments() as $argument) {
$blocks[] = $this->describeInputArgument($argument);
}
}

if (count($definition->getOptions()) > 0) {
$blocks[] = '### Options:';
foreach ($definition->getOptions() as $option) {
$blocks[] = $this->describeInputOption($option);
}
}

return implode("\n\n", $blocks);
}




protected function describeCommand(Command $command, array $options = array())
{
$command->getSynopsis();
$command->mergeApplicationDefinition(false);

$markdown = $command->getName()."\n"
.str_repeat('-', strlen($command->getName()))."\n\n"
.'* Description: '.($command->getDescription() ?: '<none>')."\n"
.'* Usage: `'.$command->getSynopsis().'`'."\n"
.'* Aliases: '.(count($command->getAliases()) ? '`'.implode('`, `', $command->getAliases()).'`' : '<none>');

if ($help = $command->getProcessedHelp()) {
$markdown .= "\n\n".$help;
}

if ($definitionMarkdown = $this->describeInputDefinition($command->getNativeDefinition())) {
$markdown .= "\n\n".$definitionMarkdown;
}

return $markdown;
}




protected function describeApplication(Application $application, array $options = array())
{
$describedNamespace = isset($options['namespace']) ? $options['namespace'] : null;
$description = new ApplicationDescription($application, $describedNamespace);
$blocks = array($application->getName()."\n".str_repeat('=', strlen($application->getName())));

foreach ($description->getNamespaces() as $namespace) {
if (ApplicationDescription::GLOBAL_NAMESPACE !== $namespace['id']) {
$blocks[] = '**'.$namespace['id'].':**';
}

$blocks[] = implode("\n", array_map(function ($commandName) {
return '* '.$commandName;
} , $namespace['commands']));
}

foreach ($description->getCommands() as $command) {
$blocks[] = $this->describeCommand($command);
}

return implode("\n\n", $blocks);
}
}
<?php










namespace Symfony\Component\Console\Descriptor;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;




class ApplicationDescription
{
const GLOBAL_NAMESPACE = '_global';




private $application;




private $namespace;




private $namespaces;




private $commands;




private $aliases;







public function __construct(Application $application, $namespace = null)
{
$this->application = $application;
$this->namespace = $namespace;
}




public function getNamespaces()
{
if (null === $this->namespaces) {
$this->inspectApplication();
}

return $this->namespaces;
}




public function getCommands()
{
if (null === $this->commands) {
$this->inspectApplication();
}

return $this->commands;
}








public function getCommand($name)
{
if (!isset($this->commands[$name]) && !isset($this->aliases[$name])) {
throw new \InvalidArgumentException(sprintf('Command %s does not exist.', $name));
}

return isset($this->commands[$name]) ? $this->commands[$name] : $this->aliases[$name];
}

private function inspectApplication()
{
$this->commands = array();
$this->namespaces = array();

$all = $this->application->all($this->namespace ? $this->application->findNamespace($this->namespace) : null);
foreach ($this->sortCommands($all) as $namespace => $commands) {
$names = array();


foreach ($commands as $name => $command) {
if (!$command->getName()) {
continue;
}

if ($command->getName() === $name) {
$this->commands[$name] = $command;
} else {
$this->aliases[$name] = $command;
}

$names[] = $name;
}

$this->namespaces[$namespace] = array('id' => $namespace, 'commands' => $names);
}
}






private function sortCommands(array $commands)
{
$namespacedCommands = array();
foreach ($commands as $name => $command) {
$key = $this->application->extractNamespace($name, 1);
if (!$key) {
$key = '_global';
}

$namespacedCommands[$key][$name] = $command;
}
ksort($namespacedCommands);

foreach ($namespacedCommands as &$commands) {
ksort($commands);
}

return $namespacedCommands;
}
}
<?php










namespace Symfony\Component\Console\Descriptor;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputOption;




abstract class Descriptor implements DescriptorInterface
{
public function describe($object, array $options = array())
{
switch (true) {
case $object instanceof InputArgument:
return $this->describeInputArgument($object, $options);
case $object instanceof InputOption:
return $this->describeInputOption($object, $options);
case $object instanceof InputDefinition:
return $this->describeInputDefinition($object, $options);
case $object instanceof Command:
return $this->describeCommand($object, $options);
case $object instanceof Application:
return $this->describeApplication($object, $options);
}

throw new \InvalidArgumentException(sprintf('Object of type "%s" is not describable.', get_class($object)));
}









abstract protected function describeInputArgument(InputArgument $argument, array $options = array());









abstract protected function describeInputOption(InputOption $option, array $options = array());









abstract protected function describeInputDefinition(InputDefinition $definition, array $options = array());









abstract protected function describeCommand(Command $command, array $options = array());









abstract protected function describeApplication(Application $application, array $options = array());
}
<?php










namespace Symfony\Component\Console\Descriptor;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputOption;






class JsonDescriptor extends Descriptor
{



protected function describeInputArgument(InputArgument $argument, array $options = array())
{
return $this->output(array(
'name' => $argument->getName(),
'is_required' => $argument->isRequired(),
'is_array' => $argument->isArray(),
'description' => $argument->getDescription(),
'default' => $argument->getDefault(),
), $options);
}




protected function describeInputOption(InputOption $option, array $options = array())
{
return $this->output(array(
'name' => '--'.$option->getName(),
'shortcut' => $option->getShortcut() ? '-'.implode('|-', explode('|', $option->getShortcut())) : '',
'accept_value' => $option->acceptValue(),
'is_value_required' => $option->isValueRequired(),
'is_multiple' => $option->isArray(),
'description' => $option->getDescription(),
'default' => $option->getDefault(),
), $options);
}




protected function describeInputDefinition(InputDefinition $definition, array $options = array())
{
$inputArguments = array();
foreach ($definition->getArguments() as $name => $argument) {
$inputArguments[$name] = $this->describeInputArgument($argument, array('as_array' => true));
}

$inputOptions = array();
foreach ($definition->getOptions() as $name => $option) {
$inputOptions[$name] = $this->describeInputOption($option, array('as_array' => true));
}

return $this->output(array('arguments' => $inputArguments, 'options' => $inputOptions), $options);
}




protected function describeCommand(Command $command, array $options = array())
{
$command->getSynopsis();
$command->mergeApplicationDefinition(false);

return $this->output(array(
'name' => $command->getName(),
'usage' => $command->getSynopsis(),
'description' => $command->getDescription(),
'help' => $command->getProcessedHelp(),
'aliases' => $command->getAliases(),
'definition' => $this->describeInputDefinition($command->getNativeDefinition(), array('as_array' => true)),
), $options);
}




protected function describeApplication(Application $application, array $options = array())
{
$describedNamespace = isset($options['namespace']) ? $options['namespace'] : null;
$description = new ApplicationDescription($application, $describedNamespace);
$commands = array();

foreach ($description->getCommands() as $command) {
$commands[] = $this->describeCommand($command, array('as_array' => true));
}

$data = $describedNamespace
? array('commands' => $commands, 'namespace' => $describedNamespace)
: array('commands' => $commands, 'namespaces' => array_values($description->getNamespaces()));

return $this->output($data, $options);
}









private function output(array $data, array $options)
{
if (isset($options['as_array']) && $options['as_array']) {
return $data;
}

return json_encode($data, isset($options['json_encoding']) ? $options['json_encoding'] : 0);
}
}
<?php










namespace Symfony\Component\Console\Helper;








interface HelperInterface
{







public function setHelperSet(HelperSet $helperSet = null);








public function getHelperSet();








public function getName();
}
<?php










namespace Symfony\Component\Console\Helper;

use Symfony\Component\Console\Output\OutputInterface;
use InvalidArgumentException;






class TableHelper extends Helper
{
const LAYOUT_DEFAULT = 0;
const LAYOUT_BORDERLESS = 1;






private $headers = array();






private $rows = array();


 private $paddingChar;
private $horizontalBorderChar;
private $verticalBorderChar;
private $crossingChar;
private $cellHeaderFormat;
private $cellRowFormat;
private $borderFormat;
private $padType;






private $columnWidths = array();






private $numberOfColumns;




private $output;

public function __construct()
{
$this->setLayout(self::LAYOUT_DEFAULT);
}








public function setLayout($layout)
{
switch ($layout) {
case self::LAYOUT_BORDERLESS:
$this
->setPaddingChar(' ')
->setHorizontalBorderChar('=')
->setVerticalBorderChar(' ')
->setCrossingChar(' ')
->setCellHeaderFormat('<info>%s</info>')
->setCellRowFormat('<comment>%s</comment>')
->setBorderFormat('%s')
->setPadType(STR_PAD_RIGHT)
;
break;

case self::LAYOUT_DEFAULT:
$this
->setPaddingChar(' ')
->setHorizontalBorderChar('-')
->setVerticalBorderChar('|')
->setCrossingChar('+')
->setCellHeaderFormat('<info>%s</info>')
->setCellRowFormat('<comment>%s</comment>')
->setBorderFormat('%s')
->setPadType(STR_PAD_RIGHT)
;
break;

default:
throw new InvalidArgumentException(sprintf('Invalid table layout "%s".', $layout));
break;
};

return $this;
}

public function setHeaders(array $headers)
{
$this->headers = array_values($headers);

return $this;
}

public function setRows(array $rows)
{
$this->rows = array();

return $this->addRows($rows);
}

public function addRows(array $rows)
{
foreach ($rows as $row) {
$this->addRow($row);
}

return $this;
}

public function addRow(array $row)
{
$this->rows[] = array_values($row);

return $this;
}

public function setRow($column, array $row)
{
$this->rows[$column] = $row;

return $this;
}








public function setPaddingChar($paddingChar)
{
$this->paddingChar = $paddingChar;

return $this;
}








public function setHorizontalBorderChar($horizontalBorderChar)
{
$this->horizontalBorderChar = $horizontalBorderChar;

return $this;
}








public function setVerticalBorderChar($verticalBorderChar)
{
$this->verticalBorderChar = $verticalBorderChar;

return $this;
}








public function setCrossingChar($crossingChar)
{
$this->crossingChar = $crossingChar;

return $this;
}








public function setCellHeaderFormat($cellHeaderFormat)
{
$this->cellHeaderFormat = $cellHeaderFormat;

return $this;
}








public function setCellRowFormat($cellRowFormat)
{
$this->cellRowFormat = $cellRowFormat;

return $this;
}








public function setBorderFormat($borderFormat)
{
$this->borderFormat = $borderFormat;

return $this;
}








public function setPadType($padType)
{
$this->padType = $padType;

return $this;
}















public function render(OutputInterface $output)
{
$this->output = $output;

$this->renderRowSeparator();
$this->renderRow($this->headers, $this->cellHeaderFormat);
if (!empty($this->headers)) {
$this->renderRowSeparator();
}
foreach ($this->rows as $row) {
$this->renderRow($row, $this->cellRowFormat);
}
if (!empty($this->rows)) {
$this->renderRowSeparator();
}

$this->cleanup();
}






private function renderRowSeparator()
{
if (0 === $count = $this->getNumberOfColumns()) {
return;
}

$markup = $this->crossingChar;
for ($column = 0; $column < $count; $column++) {
$markup .= str_repeat($this->horizontalBorderChar, $this->getColumnWidth($column))
.$this->crossingChar
;
}

$this->output->writeln(sprintf($this->borderFormat, $markup));
}




private function renderColumnSeparator()
{
$this->output->write(sprintf($this->borderFormat, $this->verticalBorderChar));
}









private function renderRow(array $row, $cellFormat)
{
if (empty($row)) {
return;
}

$this->renderColumnSeparator();
for ($column = 0, $count = $this->getNumberOfColumns(); $column < $count; $column++) {
$this->renderCell($row, $column, $cellFormat);
$this->renderColumnSeparator();
}
$this->output->writeln('');
}








private function renderCell(array $row, $column, $cellFormat)
{
$cell = isset($row[$column]) ? $row[$column] : '';
$width = $this->getColumnWidth($column);


 if (function_exists('mb_strlen') && false !== $encoding = mb_detect_encoding($cell)) {
$width += strlen($cell) - mb_strlen($cell, $encoding);
}

$this->output->write(sprintf(
$cellFormat,
str_pad(
$this->paddingChar.$cell.$this->paddingChar,
$width,
$this->paddingChar,
$this->padType
)
));
}






private function getNumberOfColumns()
{
if (null !== $this->numberOfColumns) {
return $this->numberOfColumns;
}

$columns = array(0);
$columns[] = count($this->headers);
foreach ($this->rows as $row) {
$columns[] = count($row);
}

return $this->numberOfColumns = max($columns);
}








private function getColumnWidth($column)
{
if (isset($this->columnWidths[$column])) {
return $this->columnWidths[$column];
}

$lengths = array(0);
$lengths[] = $this->getCellWidth($this->headers, $column);
foreach ($this->rows as $row) {
$lengths[] = $this->getCellWidth($row, $column);
}

return $this->columnWidths[$column] = max($lengths) + 2;
}









private function getCellWidth(array $row, $column)
{
if ($column < 0) {
return 0;
}

if (isset($row[$column])) {
return $this->strlen($row[$column]);
}

return $this->getCellWidth($row, $column - 1);
}




private function cleanup()
{
$this->columnWidths = array();
$this->numberOfColumns = null;
}




public function getName()
{
return 'table';
}
}
<?php










namespace Symfony\Component\Console\Helper;

use Symfony\Component\Console\Descriptor\DescriptorInterface;
use Symfony\Component\Console\Descriptor\JsonDescriptor;
use Symfony\Component\Console\Descriptor\MarkdownDescriptor;
use Symfony\Component\Console\Descriptor\TextDescriptor;
use Symfony\Component\Console\Descriptor\XmlDescriptor;
use Symfony\Component\Console\Output\OutputInterface;






class DescriptorHelper extends Helper
{



private $descriptors = array();




public function __construct()
{
$this
->register('txt', new TextDescriptor())
->register('xml', new XmlDescriptor())
->register('json', new JsonDescriptor())
->register('md', new MarkdownDescriptor())
;
}









public function describe(OutputInterface $output, $object, $format = null, $raw = false, $namespace = null)
{
$options = array('raw_text' => $raw, 'format' => $format ?: 'txt', 'namespace' => $namespace);
$type = !$raw && 'txt' === $options['format'] ? OutputInterface::OUTPUT_NORMAL : OutputInterface::OUTPUT_RAW;

if (!isset($this->descriptors[$options['format']])) {
throw new \InvalidArgumentException(sprintf('Unsupported format "%s".', $options['format']));
}

$descriptor = $this->descriptors[$options['format']];

$output->writeln($descriptor->describe($object, $options), $type);
}









public function register($format, DescriptorInterface $descriptor)
{
$this->descriptors[$format] = $descriptor;

return $this;
}




public function getName()
{
return 'descriptor';
}
}
<?php










namespace Symfony\Component\Console\Helper;

use Symfony\Component\Console\Formatter\OutputFormatter;






class FormatterHelper extends Helper
{









public function formatSection($section, $message, $style = 'info')
{
return sprintf('<%s>[%s]</%s> %s', $style, $section, $style, $message);
}










public function formatBlock($messages, $style, $large = false)
{
$messages = (array) $messages;

$len = 0;
$lines = array();
foreach ($messages as $message) {
$message = OutputFormatter::escape($message);
$lines[] = sprintf($large ? '  %s  ' : ' %s ', $message);
$len = max($this->strlen($message) + ($large ? 4 : 2), $len);
}

$messages = $large ? array(str_repeat(' ', $len)) : array();
foreach ($lines as $line) {
$messages[] = $line.str_repeat(' ', $len - $this->strlen($line));
}
if ($large) {
$messages[] = str_repeat(' ', $len);
}

foreach ($messages as &$message) {
$message = sprintf('<%s>%s</%s>', $style, $message, $style);
}

return implode("\n", $messages);
}




public function getName()
{
return 'formatter';
}
}
<?php










namespace Symfony\Component\Console\Helper;

use Symfony\Component\Console\Command\Command;






class HelperSet
{
private $helpers;
private $command;






public function __construct(array $helpers = array())
{
$this->helpers = array();
foreach ($helpers as $alias => $helper) {
$this->set($helper, is_int($alias) ? null : $alias);
}
}







public function set(HelperInterface $helper, $alias = null)
{
$this->helpers[$helper->getName()] = $helper;
if (null !== $alias) {
$this->helpers[$alias] = $helper;
}

$helper->setHelperSet($this);
}








public function has($name)
{
return isset($this->helpers[$name]);
}










public function get($name)
{
if (!$this->has($name)) {
throw new \InvalidArgumentException(sprintf('The helper "%s" is not defined.', $name));
}

return $this->helpers[$name];
}






public function setCommand(Command $command = null)
{
$this->command = $command;
}






public function getCommand()
{
return $this->command;
}
}
<?php










namespace Symfony\Component\Console\Helper;

use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;






class DialogHelper extends Helper
{
private $inputStream;
private static $shell;
private static $stty;
















public function select(OutputInterface $output, $question, $choices, $default = null, $attempts = false, $errorMessage = 'Value "%s" is invalid', $multiselect = false)
{
$width = max(array_map('strlen', array_keys($choices)));

$messages = (array) $question;
foreach ($choices as $key => $value) {
$messages[] = sprintf("  [<info>%-${width}s</info>] %s", $key, $value);
}

$output->writeln($messages);

$result = $this->askAndValidate($output, '> ', function ($picked) use ($choices, $errorMessage, $multiselect) {

 $selectedChoices = str_replace(" ", "", $picked);

if ($multiselect) {

 if (!preg_match('/^[a-zA-Z0-9_-]+(?:,[a-zA-Z0-9_-]+)*$/', $selectedChoices, $matches)) {
throw new \InvalidArgumentException(sprintf($errorMessage, $picked));
}
$selectedChoices = explode(",", $selectedChoices);
} else {
$selectedChoices = array($picked);
}

$multiselectChoices = array();

foreach ($selectedChoices as $value) {
if (empty($choices[$value])) {
throw new \InvalidArgumentException(sprintf($errorMessage, $value));
}
array_push($multiselectChoices, $value);
}

if ($multiselect) {
return $multiselectChoices;
}

return $picked;
}, $attempts, $default);

return $result;
}













public function ask(OutputInterface $output, $question, $default = null, array $autocomplete = null)
{
$output->write($question);

$inputStream = $this->inputStream ?: STDIN;

if (null === $autocomplete || !$this->hasSttyAvailable()) {
$ret = fgets($inputStream, 4096);
if (false === $ret) {
throw new \RuntimeException('Aborted');
}
$ret = trim($ret);
} else {
$ret = '';

$i = 0;
$ofs = -1;
$matches = $autocomplete;
$numMatches = count($matches);

$sttyMode = shell_exec('stty -g');


 shell_exec('stty -icanon -echo');


 $output->getFormatter()->setStyle('hl', new OutputFormatterStyle('black', 'white'));


 while (!feof($inputStream)) {
$c = fread($inputStream, 1);


 if ("\177" === $c) {
if (0 === $numMatches && 0 !== $i) {
$i--;

 $output->write("\033[1D");
}

if ($i === 0) {
$ofs = -1;
$matches = $autocomplete;
$numMatches = count($matches);
} else {
$numMatches = 0;
}


 $ret = substr($ret, 0, $i);
} elseif ("\033" === $c) { 
 $c .= fread($inputStream, 2);


 if ('A' === $c[2] || 'B' === $c[2]) {
if ('A' === $c[2] && -1 === $ofs) {
$ofs = 0;
}

if (0 === $numMatches) {
continue;
}

$ofs += ('A' === $c[2]) ? -1 : 1;
$ofs = ($numMatches + $ofs) % $numMatches;
}
} elseif (ord($c) < 32) {
if ("\t" === $c || "\n" === $c) {
if ($numMatches > 0 && -1 !== $ofs) {
$ret = $matches[$ofs];

 $output->write(substr($ret, $i));
$i = strlen($ret);
}

if ("\n" === $c) {
$output->write($c);
break;
}

$numMatches = 0;
}

continue;
} else {
$output->write($c);
$ret .= $c;
$i++;

$numMatches = 0;
$ofs = 0;

foreach ($autocomplete as $value) {

 if (0 === strpos($value, $ret) && $i !== strlen($value)) {
$matches[$numMatches++] = $value;
}
}
}


 $output->write("\033[K");

if ($numMatches > 0 && -1 !== $ofs) {

 $output->write("\0337");

 $output->write('<hl>'.substr($matches[$ofs], $i).'</hl>');

 $output->write("\0338");
}
}


 shell_exec(sprintf('stty %s', $sttyMode));
}

return strlen($ret) > 0 ? $ret : $default;
}












public function askConfirmation(OutputInterface $output, $question, $default = true)
{
$answer = 'z';
while ($answer && !in_array(strtolower($answer[0]), array('y', 'n'))) {
$answer = $this->ask($output, $question);
}

if (false === $default) {
return $answer && 'y' == strtolower($answer[0]);
}

return !$answer || 'y' == strtolower($answer[0]);
}












public function askHiddenResponse(OutputInterface $output, $question, $fallback = true)
{
if (defined('PHP_WINDOWS_VERSION_BUILD')) {
$exe = __DIR__.'/../Resources/bin/hiddeninput.exe';


 if ('phar:' === substr(__FILE__, 0, 5)) {
$tmpExe = sys_get_temp_dir().'/hiddeninput.exe';
copy($exe, $tmpExe);
$exe = $tmpExe;
}

$output->write($question);
$value = rtrim(shell_exec($exe));
$output->writeln('');

if (isset($tmpExe)) {
unlink($tmpExe);
}

return $value;
}

if ($this->hasSttyAvailable()) {
$output->write($question);

$sttyMode = shell_exec('stty -g');

shell_exec('stty -echo');
$value = fgets($this->inputStream ?: STDIN, 4096);
shell_exec(sprintf('stty %s', $sttyMode));

if (false === $value) {
throw new \RuntimeException('Aborted');
}

$value = trim($value);
$output->writeln('');

return $value;
}

if (false !== $shell = $this->getShell()) {
$output->write($question);
$readCmd = $shell === 'csh' ? 'set mypassword = $<' : 'read -r mypassword';
$command = sprintf("/usr/bin/env %s -c 'stty -echo; %s; stty echo; echo \$mypassword'", $shell, $readCmd);
$value = rtrim(shell_exec($command));
$output->writeln('');

return $value;
}

if ($fallback) {
return $this->ask($output, $question);
}

throw new \RuntimeException('Unable to hide the response');
}



















public function askAndValidate(OutputInterface $output, $question, $validator, $attempts = false, $default = null, array $autocomplete = null)
{
$that = $this;

$interviewer = function() use ($output, $question, $default, $autocomplete, $that) {
return $that->ask($output, $question, $default, $autocomplete);
};

return $this->validateAttempts($interviewer, $output, $validator, $attempts);
}




















public function askHiddenResponseAndValidate(OutputInterface $output, $question, $validator, $attempts = false, $fallback = true)
{
$that = $this;

$interviewer = function() use ($output, $question, $fallback, $that) {
return $that->askHiddenResponse($output, $question, $fallback);
};

return $this->validateAttempts($interviewer, $output, $validator, $attempts);
}








public function setInputStream($stream)
{
$this->inputStream = $stream;
}






public function getInputStream()
{
return $this->inputStream;
}




public function getName()
{
return 'dialog';
}






private function getShell()
{
if (null !== self::$shell) {
return self::$shell;
}

self::$shell = false;

if (file_exists('/usr/bin/env')) {

 $test = "/usr/bin/env %s -c 'echo OK' 2> /dev/null";
foreach (array('bash', 'zsh', 'ksh', 'csh') as $sh) {
if ('OK' === rtrim(shell_exec(sprintf($test, $sh)))) {
self::$shell = $sh;
break;
}
}
}

return self::$shell;
}

private function hasSttyAvailable()
{
if (null !== self::$stty) {
return self::$stty;
}

exec('stty 2>&1', $output, $exitcode);

return self::$stty = $exitcode === 0;
}













private function validateAttempts($interviewer, OutputInterface $output, $validator, $attempts)
{
$error = null;
while (false === $attempts || $attempts--) {
if (null !== $error) {
$output->writeln($this->getHelperSet()->get('formatter')->formatBlock($error->getMessage(), 'error'));
}

try {
return call_user_func($validator, $interviewer());
} catch (\Exception $error) {
}
}

throw $error;
}
}
<?php










namespace Symfony\Component\Console\Helper;






abstract class Helper implements HelperInterface
{
protected $helperSet = null;






public function setHelperSet(HelperSet $helperSet = null)
{
$this->helperSet = $helperSet;
}






public function getHelperSet()
{
return $this->helperSet;
}








protected function strlen($string)
{
if (!function_exists('mb_strlen')) {
return strlen($string);
}

if (false === $encoding = mb_detect_encoding($string)) {
return strlen($string);
}

return mb_strlen($string, $encoding);
}
}
<?php










namespace Symfony\Component\Console\Helper;

use Symfony\Component\Console\Output\OutputInterface;







class ProgressHelper extends Helper
{
const FORMAT_QUIET = ' %percent%%';
const FORMAT_NORMAL = ' %current%/%max% [%bar%] %percent%%';
const FORMAT_VERBOSE = ' %current%/%max% [%bar%] %percent%% Elapsed: %elapsed%';
const FORMAT_QUIET_NOMAX = ' %current%';
const FORMAT_NORMAL_NOMAX = ' %current% [%bar%]';
const FORMAT_VERBOSE_NOMAX = ' %current% [%bar%] Elapsed: %elapsed%';


 private $barWidth = 28;
private $barChar = '=';
private $emptyBarChar = '-';
private $progressChar = '>';
private $format = null;
private $redrawFreq = 1;

private $lastMessagesLength;
private $barCharOriginal;




private $output;






private $current;






private $max;






private $startTime;






private $defaultFormatVars = array(
'current',
'max',
'bar',
'percent',
'elapsed',
);






private $formatVars;






private $widths = array(
'current' => 4,
'max' => 4,
'percent' => 3,
'elapsed' => 6,
);






private $timeFormats = array(
array(0, '???'),
array(2, '1 sec'),
array(59, 'secs', 1),
array(60, '1 min'),
array(3600, 'mins', 60),
array(5400, '1 hr'),
array(86400, 'hrs', 3600),
array(129600, '1 day'),
array(604800, 'days', 86400),
);






public function setBarWidth($size)
{
$this->barWidth = (int) $size;
}






public function setBarCharacter($char)
{
$this->barChar = $char;
}






public function setEmptyBarCharacter($char)
{
$this->emptyBarChar = $char;
}






public function setProgressCharacter($char)
{
$this->progressChar = $char;
}






public function setFormat($format)
{
$this->format = $format;
}






public function setRedrawFrequency($freq)
{
$this->redrawFreq = (int) $freq;
}







public function start(OutputInterface $output, $max = null)
{
$this->startTime = time();
$this->current = 0;
$this->max = (int) $max;
$this->output = $output;
$this->lastMessagesLength = 0;
$this->barCharOriginal = '';

if (null === $this->format) {
switch ($output->getVerbosity()) {
case OutputInterface::VERBOSITY_QUIET:
$this->format = self::FORMAT_QUIET_NOMAX;
if ($this->max > 0) {
$this->format = self::FORMAT_QUIET;
}
break;
case OutputInterface::VERBOSITY_VERBOSE:
case OutputInterface::VERBOSITY_VERY_VERBOSE:
case OutputInterface::VERBOSITY_DEBUG:
$this->format = self::FORMAT_VERBOSE_NOMAX;
if ($this->max > 0) {
$this->format = self::FORMAT_VERBOSE;
}
break;
default:
$this->format = self::FORMAT_NORMAL_NOMAX;
if ($this->max > 0) {
$this->format = self::FORMAT_NORMAL;
}
break;
}
}

$this->initialize();
}









public function advance($step = 1, $redraw = false)
{
if (null === $this->startTime) {
throw new \LogicException('You must start the progress bar before calling advance().');
}

if (0 === $this->current) {
$redraw = true;
}

$this->current += $step;
if ($redraw || 0 === $this->current % $this->redrawFreq) {
$this->display();
}
}









public function setCurrent($current, $redraw = false)
{
if (null === $this->startTime) {
throw new \LogicException('You must start the progress bar before calling setCurrent().');
}

$current = (int) $current;

if ($current < $this->current) {
throw new \LogicException('You can\'t regress the progress bar');
}

if (0 === $this->current) {
$redraw = true;
}

$this->current = $current;
if ($redraw || 0 === $this->current % $this->redrawFreq) {
$this->display();
}
}








public function display($finish = false)
{
if (null === $this->startTime) {
throw new \LogicException('You must start the progress bar before calling display().');
}

$message = $this->format;
foreach ($this->generate($finish) as $name => $value) {
$message = str_replace("%{$name}%", $value, $message);
}
$this->overwrite($this->output, $message);
}




public function finish()
{
if (null === $this->startTime) {
throw new \LogicException('You must start the progress bar before calling finish().');
}

if (null !== $this->startTime) {
if (!$this->max) {
$this->barChar = $this->barCharOriginal;
$this->display(true);
}
$this->startTime = null;
$this->output->writeln('');
$this->output = null;
}
}




private function initialize()
{
$this->formatVars = array();
foreach ($this->defaultFormatVars as $var) {
if (false !== strpos($this->format, "%{$var}%")) {
$this->formatVars[$var] = true;
}
}

if ($this->max > 0) {
$this->widths['max'] = $this->strlen($this->max);
$this->widths['current'] = $this->widths['max'];
} else {
$this->barCharOriginal = $this->barChar;
$this->barChar = $this->emptyBarChar;
}
}








private function generate($finish = false)
{
$vars = array();
$percent = 0;
if ($this->max > 0) {
$percent = (double) $this->current / $this->max;
}

if (isset($this->formatVars['bar'])) {
$completeBars = 0;

if ($this->max > 0) {
$completeBars = floor($percent * $this->barWidth);
} else {
if (!$finish) {
$completeBars = floor($this->current % $this->barWidth);
} else {
$completeBars = $this->barWidth;
}
}

$emptyBars = $this->barWidth - $completeBars - $this->strlen($this->progressChar);
$bar = str_repeat($this->barChar, $completeBars);
if ($completeBars < $this->barWidth) {
$bar .= $this->progressChar;
$bar .= str_repeat($this->emptyBarChar, $emptyBars);
}

$vars['bar'] = $bar;
}

if (isset($this->formatVars['elapsed'])) {
$elapsed = time() - $this->startTime;
$vars['elapsed'] = str_pad($this->humaneTime($elapsed), $this->widths['elapsed'], ' ', STR_PAD_LEFT);
}

if (isset($this->formatVars['current'])) {
$vars['current'] = str_pad($this->current, $this->widths['current'], ' ', STR_PAD_LEFT);
}

if (isset($this->formatVars['max'])) {
$vars['max'] = $this->max;
}

if (isset($this->formatVars['percent'])) {
$vars['percent'] = str_pad(floor($percent * 100), $this->widths['percent'], ' ', STR_PAD_LEFT);
}

return $vars;
}








private function humaneTime($secs)
{
$text = '';
foreach ($this->timeFormats as $format) {
if ($secs < $format[0]) {
if (count($format) == 2) {
$text = $format[1];
break;
} else {
$text = ceil($secs / $format[2]).' '.$format[1];
break;
}
}
}

return $text;
}







private function overwrite(OutputInterface $output, $message)
{
$length = $this->strlen($message);


 if (null !== $this->lastMessagesLength && $this->lastMessagesLength > $length) {
$message = str_pad($message, $this->lastMessagesLength, "\x20", STR_PAD_RIGHT);
}


 $output->write("\x0D");
$output->write($message);

$this->lastMessagesLength = $this->strlen($message);
}




public function getName()
{
return 'progress';
}
}
<?php










namespace Symfony\Component\Console\Event;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\EventDispatcher\Event;






class ConsoleEvent extends Event
{
protected $command;

private $input;
private $output;

public function __construct(Command $command, InputInterface $input, OutputInterface $output)
{
$this->command = $command;
$this->input = $input;
$this->output = $output;
}






public function getCommand()
{
return $this->command;
}






public function getInput()
{
return $this->input;
}






public function getOutput()
{
return $this->output;
}
}
<?php










namespace Symfony\Component\Console\Event;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;






class ConsoleTerminateEvent extends ConsoleEvent
{





private $exitCode;

public function __construct(Command $command, InputInterface $input, OutputInterface $output, $exitCode)
{
parent::__construct($command, $input, $output);

$this->setExitCode($exitCode);
}






public function setExitCode($exitCode)
{
$this->exitCode = $exitCode;
}






public function getExitCode()
{
return $this->exitCode;
}
}
<?php










namespace Symfony\Component\Console\Event;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;






class ConsoleExceptionEvent extends ConsoleEvent
{
private $exception;
private $exitCode;

public function __construct(Command $command, InputInterface $input, OutputInterface $output, \Exception $exception, $exitCode)
{
parent::__construct($command, $input, $output);

$this->setException($exception);
$this->exitCode = $exitCode;
}






public function getException()
{
return $this->exception;
}








public function setException(\Exception $exception)
{
$this->exception = $exception;
}






public function getExitCode()
{
return $this->exitCode;
}
}
<?php










namespace Symfony\Component\Console\Event;

use Symfony\Component\Console\Command\Command;






class ConsoleCommandEvent extends ConsoleEvent
{
}
<?php










namespace Symfony\Component\Console;






final class ConsoleEvents
{










const COMMAND = 'console.command';










const TERMINATE = 'console.terminate';











const EXCEPTION = 'console.exception';
}
<?php










namespace Symfony\Component\Finder;

use Symfony\Component\Finder\Adapter\AdapterInterface;
use Symfony\Component\Finder\Adapter\GnuFindAdapter;
use Symfony\Component\Finder\Adapter\BsdFindAdapter;
use Symfony\Component\Finder\Adapter\PhpAdapter;
use Symfony\Component\Finder\Exception\ExceptionInterface;
















class Finder implements \IteratorAggregate, \Countable
{
const IGNORE_VCS_FILES = 1;
const IGNORE_DOT_FILES = 2;

private $mode = 0;
private $names = array();
private $notNames = array();
private $exclude = array();
private $filters = array();
private $depths = array();
private $sizes = array();
private $followLinks = false;
private $sort = false;
private $ignore = 0;
private $dirs = array();
private $dates = array();
private $iterators = array();
private $contains = array();
private $notContains = array();
private $adapters = array();
private $paths = array();
private $notPaths = array();
private $ignoreUnreadableDirs = false;

private static $vcsPatterns = array('.svn', '_svn', 'CVS', '_darcs', '.arch-params', '.monotone', '.bzr', '.git', '.hg');




public function __construct()
{
$this->ignore = static::IGNORE_VCS_FILES | static::IGNORE_DOT_FILES;

$this
->addAdapter(new GnuFindAdapter())
->addAdapter(new BsdFindAdapter())
->addAdapter(new PhpAdapter(), -50)
->setAdapter('php')
;
}








public static function create()
{
return new static();
}









public function addAdapter(Adapter\AdapterInterface $adapter, $priority = 0)
{
$this->adapters[$adapter->getName()] = array(
'adapter' => $adapter,
'priority' => $priority,
'selected' => false,
);

return $this->sortAdapters();
}






public function useBestAdapter()
{
$this->resetAdapterSelection();

return $this->sortAdapters();
}










public function setAdapter($name)
{
if (!isset($this->adapters[$name])) {
throw new \InvalidArgumentException(sprintf('Adapter "%s" does not exist.', $name));
}

$this->resetAdapterSelection();
$this->adapters[$name]['selected'] = true;

return $this->sortAdapters();
}






public function removeAdapters()
{
$this->adapters = array();

return $this;
}






public function getAdapters()
{
return array_values(array_map(function(array $adapter) {
return $adapter['adapter'];
}, $this->adapters));
}








public function directories()
{
$this->mode = Iterator\FileTypeFilterIterator::ONLY_DIRECTORIES;

return $this;
}








public function files()
{
$this->mode = Iterator\FileTypeFilterIterator::ONLY_FILES;

return $this;
}


















public function depth($level)
{
$this->depths[] = new Comparator\NumberComparator($level);

return $this;
}





















public function date($date)
{
$this->dates[] = new Comparator\DateComparator($date);

return $this;
}


















public function name($pattern)
{
$this->names[] = $pattern;

return $this;
}












public function notName($pattern)
{
$this->notNames[] = $pattern;

return $this;
}















public function contains($pattern)
{
$this->contains[] = $pattern;

return $this;
}















public function notContains($pattern)
{
$this->notContains[] = $pattern;

return $this;
}

















public function path($pattern)
{
$this->paths[] = $pattern;

return $this;
}

















public function notPath($pattern)
{
$this->notPaths[] = $pattern;

return $this;
}

















public function size($size)
{
$this->sizes[] = new Comparator\NumberComparator($size);

return $this;
}












public function exclude($dirs)
{
$this->exclude = array_merge($this->exclude, (array) $dirs);

return $this;
}












public function ignoreDotFiles($ignoreDotFiles)
{
if ($ignoreDotFiles) {
$this->ignore = $this->ignore | static::IGNORE_DOT_FILES;
} else {
$this->ignore = $this->ignore & ~static::IGNORE_DOT_FILES;
}

return $this;
}












public function ignoreVCS($ignoreVCS)
{
if ($ignoreVCS) {
$this->ignore = $this->ignore | static::IGNORE_VCS_FILES;
} else {
$this->ignore = $this->ignore & ~static::IGNORE_VCS_FILES;
}

return $this;
}








public static function addVCSPattern($pattern)
{
foreach ((array) $pattern as $p) {
self::$vcsPatterns[] = $p;
}

self::$vcsPatterns = array_unique(self::$vcsPatterns);
}
















public function sort(\Closure $closure)
{
$this->sort = $closure;

return $this;
}












public function sortByName()
{
$this->sort = Iterator\SortableIterator::SORT_BY_NAME;

return $this;
}












public function sortByType()
{
$this->sort = Iterator\SortableIterator::SORT_BY_TYPE;

return $this;
}














public function sortByAccessedTime()
{
$this->sort = Iterator\SortableIterator::SORT_BY_ACCESSED_TIME;

return $this;
}
















public function sortByChangedTime()
{
$this->sort = Iterator\SortableIterator::SORT_BY_CHANGED_TIME;

return $this;
}














public function sortByModifiedTime()
{
$this->sort = Iterator\SortableIterator::SORT_BY_MODIFIED_TIME;

return $this;
}















public function filter(\Closure $closure)
{
$this->filters[] = $closure;

return $this;
}








public function followLinks()
{
$this->followLinks = true;

return $this;
}










public function ignoreUnreadableDirs($ignore = true)
{
$this->ignoreUnreadableDirs = (Boolean) $ignore;

return $this;
}












public function in($dirs)
{
$resolvedDirs = array();

foreach ((array) $dirs as $dir) {
if (is_dir($dir)) {
$resolvedDirs[] = $dir;
} elseif ($glob = glob($dir, GLOB_ONLYDIR)) {
$resolvedDirs = array_merge($resolvedDirs, $glob);
} else {
throw new \InvalidArgumentException(sprintf('The "%s" directory does not exist.', $dir));
}
}

$this->dirs = array_merge($this->dirs, $resolvedDirs);

return $this;
}










public function getIterator()
{
if (0 === count($this->dirs) && 0 === count($this->iterators)) {
throw new \LogicException('You must call one of in() or append() methods before iterating over a Finder.');
}

if (1 === count($this->dirs) && 0 === count($this->iterators)) {
return $this->searchInDirectory($this->dirs[0]);
}

$iterator = new \AppendIterator();
foreach ($this->dirs as $dir) {
$iterator->append($this->searchInDirectory($dir));
}

foreach ($this->iterators as $it) {
$iterator->append($it);
}

return $iterator;
}












public function append($iterator)
{
if ($iterator instanceof \IteratorAggregate) {
$this->iterators[] = $iterator->getIterator();
} elseif ($iterator instanceof \Iterator) {
$this->iterators[] = $iterator;
} elseif ($iterator instanceof \Traversable || is_array($iterator)) {
$it = new \ArrayIterator();
foreach ($iterator as $file) {
$it->append($file instanceof \SplFileInfo ? $file : new \SplFileInfo($file));
}
$this->iterators[] = $it;
} else {
throw new \InvalidArgumentException('Finder::append() method wrong argument type.');
}

return $this;
}






public function count()
{
return iterator_count($this->getIterator());
}




private function sortAdapters()
{
uasort($this->adapters, function (array $a, array $b) {
if ($a['selected'] || $b['selected']) {
return $a['selected'] ? -1 : 1;
}

return $a['priority'] > $b['priority'] ? -1 : 1;
});

return $this;
}








private function searchInDirectory($dir)
{
if (static::IGNORE_VCS_FILES === (static::IGNORE_VCS_FILES & $this->ignore)) {
$this->exclude = array_merge($this->exclude, self::$vcsPatterns);
}

if (static::IGNORE_DOT_FILES === (static::IGNORE_DOT_FILES & $this->ignore)) {
$this->notPaths[] = '#(^|/)\..+(/|$)#';
}

foreach ($this->adapters as $adapter) {
if ($adapter['adapter']->isSupported()) {
try {
return $this
->buildAdapter($adapter['adapter'])
->searchInDirectory($dir);
} catch (ExceptionInterface $e) {}
}
}

throw new \RuntimeException('No supported adapter found.');
}






private function buildAdapter(AdapterInterface $adapter)
{
return $adapter
->setFollowLinks($this->followLinks)
->setDepths($this->depths)
->setMode($this->mode)
->setExclude($this->exclude)
->setNames($this->names)
->setNotNames($this->notNames)
->setContains($this->contains)
->setNotContains($this->notContains)
->setSizes($this->sizes)
->setDates($this->dates)
->setFilters($this->filters)
->setSort($this->sort)
->setPath($this->paths)
->setNotPath($this->notPaths)
->ignoreUnreadableDirs($this->ignoreUnreadableDirs);
}




private function resetAdapterSelection()
{
$this->adapters = array_map(function (array $properties) {
$properties['selected'] = false;

return $properties;
}, $this->adapters);
}
}
<?php










namespace Symfony\Component\Finder\Shell;




class Command
{



private $parent;




private $bits;




private $labels;




private $errorHandler;






public function __construct(Command $parent = null)
{
$this->parent = $parent;
$this->bits = array();
$this->labels = array();
}






public function __toString()
{
return $this->join();
}








public static function create(Command $parent = null)
{
return new self($parent);
}








public static function escape($input)
{
return escapeshellcmd($input);
}








public static function quote($input)
{
return escapeshellarg($input);
}








public function add($bit)
{
$this->bits[] = $bit;

return $this;
}








public function top($bit)
{
array_unshift($this->bits, $bit);

foreach ($this->labels as $label => $index) {
$this->labels[$label] += 1;
}

return $this;
}








public function arg($arg)
{
$this->bits[] = self::quote($arg);

return $this;
}








public function cmd($esc)
{
$this->bits[] = self::escape($esc);

return $this;
}










public function ins($label)
{
if (isset($this->labels[$label])) {
throw new \RuntimeException(sprintf('Label "%s" already exists.', $label));
}

$this->bits[] = self::create($this);
$this->labels[$label] = count($this->bits)-1;

return $this->bits[$this->labels[$label]];
}










public function get($label)
{
if (!isset($this->labels[$label])) {
throw new \RuntimeException(sprintf('Label "%s" does not exists.', $label));
}

return $this->bits[$this->labels[$label]];
}








public function end()
{
if (null === $this->parent) {
throw new \RuntimeException('Calling end on root command doesn\'t make sense.');
}

return $this->parent;
}






public function length()
{
return count($this->bits);
}






public function setErrorHandler(\Closure $errorHandler)
{
$this->errorHandler = $errorHandler;

return $this;
}




public function getErrorHandler()
{
return $this->errorHandler;
}








public function execute()
{
if (null === $this->errorHandler) {
exec($this->join(), $output);
} else {
$process = proc_open($this->join(), array(0 => array('pipe', 'r'), 1 => array('pipe', 'w'), 2 => array('pipe', 'w')), $pipes);
$output = preg_split('~(\r\n|\r|\n)~', stream_get_contents($pipes[1]), -1, PREG_SPLIT_NO_EMPTY);

if ($error = stream_get_contents($pipes[2])) {
call_user_func($this->errorHandler, $error);
}

proc_close($process);
}

return $output ?: array();
}






public function join()
{
return implode(' ', array_filter(
array_map(function($bit) {
return $bit instanceof Command ? $bit->join() : ($bit ?: null);
}, $this->bits),
function($bit) { return null !== $bit; }
));
}









public function addAtIndex($bit, $index)
{
array_splice($this->bits, $index, 0, $bit);

return $this;
}
}
<?php










namespace Symfony\Component\Finder\Shell;




class Shell
{
const TYPE_UNIX = 1;
const TYPE_DARWIN = 2;
const TYPE_CYGWIN = 3;
const TYPE_WINDOWS = 4;
const TYPE_BSD = 5;




private $type;






public function getType()
{
if (null === $this->type) {
$this->type = $this->guessType();
}

return $this->type;
}








public function testCommand($command)
{
if (self::TYPE_WINDOWS === $this->type) {

 return false;
}

if (!function_exists('exec')) {
return false;
}


 exec('command -v '.$command, $output, $code);

return 0 === $code && count($output) > 0;
}






private function guessType()
{
$os = strtolower(PHP_OS);

if (false !== strpos($os, 'cygwin')) {
return self::TYPE_CYGWIN;
}

if (false !== strpos($os, 'darwin')) {
return self::TYPE_DARWIN;
}

if (false !== strpos($os, 'bsd')) {
return self::TYPE_BSD;
}

if (0 === strpos($os, 'win')) {
return self::TYPE_WINDOWS;
}

return self::TYPE_UNIX;
}
}
<?php










namespace Symfony\Component\Finder\Expression;




class Regex implements ValueInterface
{
const START_FLAG = '^';
const END_FLAG = '$';
const BOUNDARY = '~';
const JOKER = '.*';
const ESCAPING = '\\';




private $pattern;




private $options;




private $startFlag;




private $endFlag;




private $startJoker;




private $endJoker;








public static function create($expr)
{
if (preg_match('/^(.{3,}?)([imsxuADU]*)$/', $expr, $m)) {
$start = substr($m[1], 0, 1);
$end = substr($m[1], -1);

if (($start === $end && !preg_match('/[*?[:alnum:] \\\\]/', $start)) || ($start === '{' && $end === '}')) {
return new self(substr($m[1], 1, -1), $m[2], $end);
}
}

throw new \InvalidArgumentException('Given expression is not a regex.');
}






public function __construct($pattern, $options = '', $delimiter = null)
{
if (null !== $delimiter) {

 $pattern = str_replace('\\'.$delimiter, $delimiter, $pattern);
}

$this->parsePattern($pattern);
$this->options = $options;
}




public function __toString()
{
return $this->render();
}




public function render()
{
return self::BOUNDARY
.$this->renderPattern()
.self::BOUNDARY
.$this->options;
}




public function renderPattern()
{
return ($this->startFlag ? self::START_FLAG : '')
.($this->startJoker ? self::JOKER : '')
.str_replace(self::BOUNDARY, '\\'.self::BOUNDARY, $this->pattern)
.($this->endJoker ? self::JOKER : '')
.($this->endFlag ? self::END_FLAG : '');
}




public function isCaseSensitive()
{
return !$this->hasOption('i');
}




public function getType()
{
return Expression::TYPE_REGEX;
}




public function prepend($expr)
{
$this->pattern = $expr.$this->pattern;

return $this;
}




public function append($expr)
{
$this->pattern .= $expr;

return $this;
}






public function hasOption($option)
{
return false !== strpos($this->options, $option);
}






public function addOption($option)
{
if (!$this->hasOption($option)) {
$this->options.= $option;
}

return $this;
}






public function removeOption($option)
{
$this->options = str_replace($option, '', $this->options);

return $this;
}






public function setStartFlag($startFlag)
{
$this->startFlag = $startFlag;

return $this;
}




public function hasStartFlag()
{
return $this->startFlag;
}






public function setEndFlag($endFlag)
{
$this->endFlag = (bool) $endFlag;

return $this;
}




public function hasEndFlag()
{
return $this->endFlag;
}






public function setStartJoker($startJoker)
{
$this->startJoker = $startJoker;

return $this;
}




public function hasStartJoker()
{
return $this->startJoker;
}






public function setEndJoker($endJoker)
{
$this->endJoker = (bool) $endJoker;

return $this;
}




public function hasEndJoker()
{
return $this->endJoker;
}






public function replaceJokers($replacement)
{
$replace = function ($subject) use ($replacement) {
$subject = $subject[0];
$replace = 0 === substr_count($subject, '\\') % 2;

return $replace ? str_replace('.', $replacement, $subject) : $subject;
};

$this->pattern = preg_replace_callback('~[\\\\]*\\.~', $replace, $this->pattern);

return $this;
}




private function parsePattern($pattern)
{
if ($this->startFlag = self::START_FLAG === substr($pattern, 0, 1)) {
$pattern = substr($pattern, 1);
}

if ($this->startJoker = self::JOKER === substr($pattern, 0, 2)) {
$pattern = substr($pattern, 2);
}

if ($this->endFlag = (self::END_FLAG === substr($pattern, -1) && self::ESCAPING !== substr($pattern, -2, -1))) {
$pattern = substr($pattern, 0, -1);
}

if ($this->endJoker = (self::JOKER === substr($pattern, -2) && self::ESCAPING !== substr($pattern, -3, -2))) {
$pattern = substr($pattern, 0, -2);
}

$this->pattern = $pattern;
}
}
<?php










namespace Symfony\Component\Finder\Expression;




class Glob implements ValueInterface
{



private $pattern;




public function __construct($pattern)
{
$this->pattern = $pattern;
}




public function render()
{
return $this->pattern;
}




public function renderPattern()
{
return $this->pattern;
}




public function getType()
{
return Expression::TYPE_GLOB;
}




public function isCaseSensitive()
{
return true;
}




public function prepend($expr)
{
$this->pattern = $expr.$this->pattern;

return $this;
}




public function append($expr)
{
$this->pattern .= $expr;

return $this;
}






public function isExpandable()
{
return false !== strpos($this->pattern, '{')
&& false !== strpos($this->pattern, '}');
}







public function toRegex($strictLeadingDot = true, $strictWildcardSlash = true)
{
$firstByte = true;
$escaping = false;
$inCurlies = 0;
$regex = '';
$sizeGlob = strlen($this->pattern);
for ($i = 0; $i < $sizeGlob; $i++) {
$car = $this->pattern[$i];
if ($firstByte) {
if ($strictLeadingDot && '.' !== $car) {
$regex .= '(?=[^\.])';
}

$firstByte = false;
}

if ('/' === $car) {
$firstByte = true;
}

if ('.' === $car || '(' === $car || ')' === $car || '|' === $car || '+' === $car || '^' === $car || '$' === $car) {
$regex .= "\\$car";
} elseif ('*' === $car) {
$regex .= $escaping ? '\\*' : ($strictWildcardSlash ? '[^/]*' : '.*');
} elseif ('?' === $car) {
$regex .= $escaping ? '\\?' : ($strictWildcardSlash ? '[^/]' : '.');
} elseif ('{' === $car) {
$regex .= $escaping ? '\\{' : '(';
if (!$escaping) {
++$inCurlies;
}
} elseif ('}' === $car && $inCurlies) {
$regex .= $escaping ? '}' : ')';
if (!$escaping) {
--$inCurlies;
}
} elseif (',' === $car && $inCurlies) {
$regex .= $escaping ? ',' : '|';
} elseif ('\\' === $car) {
if ($escaping) {
$regex .= '\\\\';
$escaping = false;
} else {
$escaping = true;
}

continue;
} else {
$regex .= $car;
}
$escaping = false;
}

return new Regex('^'.$regex.'$');
}
}
<?php










namespace Symfony\Component\Finder\Expression;




class Expression implements ValueInterface
{
const TYPE_REGEX = 1;
const TYPE_GLOB = 2;




private $value;






public static function create($expr)
{
return new self($expr);
}




public function __construct($expr)
{
try {
$this->value = Regex::create($expr);
} catch (\InvalidArgumentException $e) {
$this->value = new Glob($expr);
}
}




public function __toString()
{
return $this->render();
}




public function render()
{
return $this->value->render();
}




public function renderPattern()
{
return $this->value->renderPattern();
}




public function isCaseSensitive()
{
return $this->value->isCaseSensitive();
}




public function getType()
{
return $this->value->getType();
}




public function prepend($expr)
{
$this->value->prepend($expr);

return $this;
}




public function append($expr)
{
$this->value->append($expr);

return $this;
}




public function isRegex()
{
return self::TYPE_REGEX === $this->value->getType();
}




public function isGlob()
{
return self::TYPE_GLOB === $this->value->getType();
}






public function getGlob()
{
if (self::TYPE_GLOB !== $this->value->getType()) {
throw new \LogicException('Regex cant be transformed to glob.');
}

return $this->value;
}




public function getRegex()
{
return self::TYPE_REGEX === $this->value->getType() ? $this->value : $this->value->toRegex();
}
}
<?php










namespace Symfony\Component\Finder\Expression;




interface ValueInterface
{





public function render();






public function renderPattern();






public function isCaseSensitive();






public function getType();






public function prepend($expr);






public function append($expr);
}
<?php










namespace Symfony\Component\Finder\Adapter;




interface AdapterInterface
{





public function setFollowLinks($followLinks);






public function setMode($mode);






public function setExclude(array $exclude);






public function setDepths(array $depths);






public function setNames(array $names);






public function setNotNames(array $notNames);






public function setContains(array $contains);






public function setNotContains(array $notContains);






public function setSizes(array $sizes);






public function setDates(array $dates);






public function setFilters(array $filters);






public function setSort($sort);






public function setPath(array $paths);






public function setNotPath(array $notPaths);






public function ignoreUnreadableDirs($ignore = true);






public function searchInDirectory($dir);






public function isSupported();






public function getName();
}
<?php










namespace Symfony\Component\Finder\Adapter;

use Symfony\Component\Finder\Shell\Shell;
use Symfony\Component\Finder\Shell\Command;
use Symfony\Component\Finder\Iterator\SortableIterator;
use Symfony\Component\Finder\Expression\Expression;






class BsdFindAdapter extends AbstractFindAdapter
{



public function getName()
{
return 'bsd_find';
}




protected function canBeUsed()
{
return in_array($this->shell->getType(), array(Shell::TYPE_BSD, Shell::TYPE_DARWIN)) && parent::canBeUsed();
}




protected function buildFormatSorting(Command $command, $sort)
{
switch ($sort) {
case SortableIterator::SORT_BY_NAME:
$command->ins('sort')->add('| sort');

return;
case SortableIterator::SORT_BY_TYPE:
$format = '%HT';
break;
case SortableIterator::SORT_BY_ACCESSED_TIME:
$format = '%a';
break;
case SortableIterator::SORT_BY_CHANGED_TIME:
$format = '%c';
break;
case SortableIterator::SORT_BY_MODIFIED_TIME:
$format = '%m';
break;
default:
throw new \InvalidArgumentException(sprintf('Unknown sort options: %s.', $sort));
}

$command
->add('-print0 | xargs -0 stat -f')
->arg($format.'%t%N')
->add('| sort | cut -f 2');
}




protected function buildFindCommand(Command $command, $dir)
{
parent::buildFindCommand($command, $dir)->addAtIndex('-E', 1);

return $command;
}




protected function buildContentFiltering(Command $command, array $contains, $not = false)
{
foreach ($contains as $contain) {
$expr = Expression::create($contain);


 $command
->add('| grep -v \'^$\'')
->add('| xargs -I{} grep -I')
->add($expr->isCaseSensitive() ? null : '-i')
->add($not ? '-L' : '-l')
->add('-Ee')->arg($expr->renderPattern())
->add('{}')
;
}
}
}
<?php










namespace Symfony\Component\Finder\Adapter;

use Symfony\Component\Finder\Shell\Shell;
use Symfony\Component\Finder\Shell\Command;
use Symfony\Component\Finder\Iterator\SortableIterator;
use Symfony\Component\Finder\Expression\Expression;






class GnuFindAdapter extends AbstractFindAdapter
{



public function getName()
{
return 'gnu_find';
}




protected function buildFormatSorting(Command $command, $sort)
{
switch ($sort) {
case SortableIterator::SORT_BY_NAME:
$command->ins('sort')->add('| sort');

return;
case SortableIterator::SORT_BY_TYPE:
$format = '%y';
break;
case SortableIterator::SORT_BY_ACCESSED_TIME:
$format = '%A@';
break;
case SortableIterator::SORT_BY_CHANGED_TIME:
$format = '%C@';
break;
case SortableIterator::SORT_BY_MODIFIED_TIME:
$format = '%T@';
break;
default:
throw new \InvalidArgumentException(sprintf('Unknown sort options: %s.', $sort));
}

$command
->get('find')
->add('-printf')
->arg($format.' %h/%f\\n')
->add('| sort | cut')
->arg('-d ')
->arg('-f2-')
;
}




protected function canBeUsed()
{
return $this->shell->getType() === Shell::TYPE_UNIX && parent::canBeUsed();
}




protected function buildFindCommand(Command $command, $dir)
{
return parent::buildFindCommand($command, $dir)->add('-regextype posix-extended');
}




protected function buildContentFiltering(Command $command, array $contains, $not = false)
{
foreach ($contains as $contain) {
$expr = Expression::create($contain);


 $command
->add('| xargs -I{} -r grep -I')
->add($expr->isCaseSensitive() ? null : '-i')
->add($not ? '-L' : '-l')
->add('-Ee')->arg($expr->renderPattern())
->add('{}')
;
}
}
}
<?php










namespace Symfony\Component\Finder\Adapter;






abstract class AbstractAdapter implements AdapterInterface
{
protected $followLinks = false;
protected $mode = 0;
protected $minDepth = 0;
protected $maxDepth = PHP_INT_MAX;
protected $exclude = array();
protected $names = array();
protected $notNames = array();
protected $contains = array();
protected $notContains = array();
protected $sizes = array();
protected $dates = array();
protected $filters = array();
protected $sort = false;
protected $paths = array();
protected $notPaths = array();
protected $ignoreUnreadableDirs = false;

private static $areSupported = array();




public function isSupported()
{
$name = $this->getName();

if (!array_key_exists($name, self::$areSupported)) {
self::$areSupported[$name] = $this->canBeUsed();
}

return self::$areSupported[$name];
}




public function setFollowLinks($followLinks)
{
$this->followLinks = $followLinks;

return $this;
}




public function setMode($mode)
{
$this->mode = $mode;

return $this;
}




public function setDepths(array $depths)
{
$this->minDepth = 0;
$this->maxDepth = PHP_INT_MAX;

foreach ($depths as $comparator) {
switch ($comparator->getOperator()) {
case '>':
$this->minDepth = $comparator->getTarget() + 1;
break;
case '>=':
$this->minDepth = $comparator->getTarget();
break;
case '<':
$this->maxDepth = $comparator->getTarget() - 1;
break;
case '<=':
$this->maxDepth = $comparator->getTarget();
break;
default:
$this->minDepth = $this->maxDepth = $comparator->getTarget();
}
}

return $this;
}




public function setExclude(array $exclude)
{
$this->exclude = $exclude;

return $this;
}




public function setNames(array $names)
{
$this->names = $names;

return $this;
}




public function setNotNames(array $notNames)
{
$this->notNames = $notNames;

return $this;
}




public function setContains(array $contains)
{
$this->contains = $contains;

return $this;
}




public function setNotContains(array $notContains)
{
$this->notContains = $notContains;

return $this;
}




public function setSizes(array $sizes)
{
$this->sizes = $sizes;

return $this;
}




public function setDates(array $dates)
{
$this->dates = $dates;

return $this;
}




public function setFilters(array $filters)
{
$this->filters = $filters;

return $this;
}




public function setSort($sort)
{
$this->sort = $sort;

return $this;
}




public function setPath(array $paths)
{
$this->paths = $paths;

return $this;
}




public function setNotPath(array $notPaths)
{
$this->notPaths = $notPaths;

return $this;
}




public function ignoreUnreadableDirs($ignore = true)
{
$this->ignoreUnreadableDirs = (Boolean) $ignore;

return $this;
}












abstract protected function canBeUsed();
}
<?php










namespace Symfony\Component\Finder\Adapter;

use Symfony\Component\Finder\Exception\AccessDeniedException;
use Symfony\Component\Finder\Iterator;
use Symfony\Component\Finder\Shell\Shell;
use Symfony\Component\Finder\Expression\Expression;
use Symfony\Component\Finder\Shell\Command;
use Symfony\Component\Finder\Iterator\SortableIterator;
use Symfony\Component\Finder\Comparator\NumberComparator;
use Symfony\Component\Finder\Comparator\DateComparator;






abstract class AbstractFindAdapter extends AbstractAdapter
{



protected $shell;




public function __construct()
{
$this->shell = new Shell();
}




public function searchInDirectory($dir)
{

 $dir = realpath($dir);


 if (Iterator\FileTypeFilterIterator::ONLY_DIRECTORIES === $this->mode && ($this->contains || $this->notContains)) {
return new Iterator\FilePathsIterator(array(), $dir);
}

$command = Command::create();
$find = $this->buildFindCommand($command, $dir);

if ($this->followLinks) {
$find->add('-follow');
}

$find->add('-mindepth')->add($this->minDepth + 1);

if (PHP_INT_MAX !== $this->maxDepth) {
$find->add('-maxdepth')->add($this->maxDepth + 1);
}

if (Iterator\FileTypeFilterIterator::ONLY_DIRECTORIES === $this->mode) {
$find->add('-type d');
} elseif (Iterator\FileTypeFilterIterator::ONLY_FILES === $this->mode) {
$find->add('-type f');
}

$this->buildNamesFiltering($find, $this->names);
$this->buildNamesFiltering($find, $this->notNames, true);
$this->buildPathsFiltering($find, $dir, $this->paths);
$this->buildPathsFiltering($find, $dir, $this->notPaths, true);
$this->buildSizesFiltering($find, $this->sizes);
$this->buildDatesFiltering($find, $this->dates);

$useGrep = $this->shell->testCommand('grep') && $this->shell->testCommand('xargs');
$useSort = is_int($this->sort) && $this->shell->testCommand('sort') && $this->shell->testCommand('cut');

if ($useGrep && ($this->contains || $this->notContains)) {
$grep = $command->ins('grep');
$this->buildContentFiltering($grep, $this->contains);
$this->buildContentFiltering($grep, $this->notContains, true);
}

if ($useSort) {
$this->buildSorting($command, $this->sort);
}

$command->setErrorHandler(
$this->ignoreUnreadableDirs

 ? function ($stderr) { return; }
: function ($stderr) { throw new AccessDeniedException($stderr); }
);

$paths = $this->shell->testCommand('uniq') ? $command->add('| uniq')->execute() : array_unique($command->execute());
$iterator = new Iterator\FilePathsIterator($paths, $dir);

if ($this->exclude) {
$iterator = new Iterator\ExcludeDirectoryFilterIterator($iterator, $this->exclude);
}

if (!$useGrep && ($this->contains || $this->notContains)) {
$iterator = new Iterator\FilecontentFilterIterator($iterator, $this->contains, $this->notContains);
}

if ($this->filters) {
$iterator = new Iterator\CustomFilterIterator($iterator, $this->filters);
}

if (!$useSort && $this->sort) {
$iteratorAggregate = new Iterator\SortableIterator($iterator, $this->sort);
$iterator = $iteratorAggregate->getIterator();
}

return $iterator;
}




protected function canBeUsed()
{
return $this->shell->testCommand('find');
}







protected function buildFindCommand(Command $command, $dir)
{
return $command
->ins('find')
->add('find ')
->arg($dir)
->add('-noleaf'); 
 }






private function buildNamesFiltering(Command $command, array $names, $not = false)
{
if (0 === count($names)) {
return;
}

$command->add($not ? '-not' : null)->cmd('(');

foreach ($names as $i => $name) {
$expr = Expression::create($name);


 if ($expr->isGlob() && $expr->getGlob()->isExpandable()) {
$expr = Expression::create($expr->getGlob()->toRegex(false));
}


 
 
 if ($expr->isRegex()) {
$regex = $expr->getRegex();
$regex->prepend($regex->hasStartFlag() ? '/' : '/[^/]*')
->setStartFlag(false)
->setStartJoker(true)
->replaceJokers('[^/]');
if (!$regex->hasEndFlag() || $regex->hasEndJoker()) {
$regex->setEndJoker(false)->append('[^/]*');
}
}

$command
->add($i > 0 ? '-or' : null)
->add($expr->isRegex()
? ($expr->isCaseSensitive() ? '-regex' : '-iregex')
: ($expr->isCaseSensitive() ? '-name' : '-iname')
)
->arg($expr->renderPattern());
}

$command->cmd(')');
}







private function buildPathsFiltering(Command $command, $dir, array $paths, $not = false)
{
if (0 === count($paths)) {
return;
}

$command->add($not ? '-not' : null)->cmd('(');

foreach ($paths as $i => $path) {
$expr = Expression::create($path);


 if ($expr->isGlob() && $expr->getGlob()->isExpandable()) {
$expr = Expression::create($expr->getGlob()->toRegex(false));
}


 if ($expr->isRegex()) {
$regex = $expr->getRegex();
$regex->prepend($regex->hasStartFlag() ? $dir.DIRECTORY_SEPARATOR : '.*')->setEndJoker(!$regex->hasEndFlag());
} else {
$expr->prepend('*')->append('*');
}

$command
->add($i > 0 ? '-or' : null)
->add($expr->isRegex()
? ($expr->isCaseSensitive() ? '-regex' : '-iregex')
: ($expr->isCaseSensitive() ? '-path' : '-ipath')
)
->arg($expr->renderPattern());
}

$command->cmd(')');
}





private function buildSizesFiltering(Command $command, array $sizes)
{
foreach ($sizes as $i => $size) {
$command->add($i > 0 ? '-and' : null);

switch ($size->getOperator()) {
case '<=':
$command->add('-size -'.($size->getTarget() + 1).'c');
break;
case '>=':
$command->add('-size +'. ($size->getTarget() - 1).'c');
break;
case '>':
$command->add('-size +'.$size->getTarget().'c');
break;
case '!=':
$command->add('-size -'.$size->getTarget().'c');
$command->add('-size +'.$size->getTarget().'c');
case '<':
default:
$command->add('-size -'.$size->getTarget().'c');
}
}
}





private function buildDatesFiltering(Command $command, array $dates)
{
foreach ($dates as $i => $date) {
$command->add($i > 0 ? '-and' : null);

$mins = (int) round((time()-$date->getTarget()) / 60);

if (0 > $mins) {

 $command->add(' -mmin -0');

 return;
}

switch ($date->getOperator()) {
case '<=':
$command->add('-mmin +'.($mins - 1));
break;
case '>=':
$command->add('-mmin -'.($mins + 1));
break;
case '>':
$command->add('-mmin -'.$mins);
break;
case '!=':
$command->add('-mmin +'.$mins.' -or -mmin -'.$mins);
break;
case '<':
default:
$command->add('-mmin +'.$mins);
}
}
}







private function buildSorting(Command $command, $sort)
{
$this->buildFormatSorting($command, $sort);
}





abstract protected function buildFormatSorting(Command $command, $sort);






abstract protected function buildContentFiltering(Command $command, array $contains, $not = false);
}
<?php










namespace Symfony\Component\Finder\Adapter;

use Symfony\Component\Finder\Iterator;






class PhpAdapter extends AbstractAdapter
{



public function searchInDirectory($dir)
{
$flags = \RecursiveDirectoryIterator::SKIP_DOTS;

if ($this->followLinks) {
$flags |= \RecursiveDirectoryIterator::FOLLOW_SYMLINKS;
}

$iterator = new \RecursiveIteratorIterator(
new Iterator\RecursiveDirectoryIterator($dir, $flags, $this->ignoreUnreadableDirs),
\RecursiveIteratorIterator::SELF_FIRST
);

if ($this->minDepth > 0 || $this->maxDepth < PHP_INT_MAX) {
$iterator = new Iterator\DepthRangeFilterIterator($iterator, $this->minDepth, $this->maxDepth);
}

if ($this->mode) {
$iterator = new Iterator\FileTypeFilterIterator($iterator, $this->mode);
}

if ($this->exclude) {
$iterator = new Iterator\ExcludeDirectoryFilterIterator($iterator, $this->exclude);
}

if ($this->names || $this->notNames) {
$iterator = new Iterator\FilenameFilterIterator($iterator, $this->names, $this->notNames);
}

if ($this->contains || $this->notContains) {
$iterator = new Iterator\FilecontentFilterIterator($iterator, $this->contains, $this->notContains);
}

if ($this->sizes) {
$iterator = new Iterator\SizeRangeFilterIterator($iterator, $this->sizes);
}

if ($this->dates) {
$iterator = new Iterator\DateRangeFilterIterator($iterator, $this->dates);
}

if ($this->filters) {
$iterator = new Iterator\CustomFilterIterator($iterator, $this->filters);
}

if ($this->sort) {
$iteratorAggregate = new Iterator\SortableIterator($iterator, $this->sort);
$iterator = $iteratorAggregate->getIterator();
}

if ($this->paths || $this->notPaths) {
$iterator = new Iterator\PathFilterIterator($iterator, $this->paths, $this->notPaths);
}

return $iterator;
}




public function getName()
{
return 'php';
}




protected function canBeUsed()
{
return true;
}
}
<?php










namespace Symfony\Component\Finder;























class Glob
{









public static function toRegex($glob, $strictLeadingDot = true, $strictWildcardSlash = true)
{
$firstByte = true;
$escaping = false;
$inCurlies = 0;
$regex = '';
$sizeGlob = strlen($glob);
for ($i = 0; $i < $sizeGlob; $i++) {
$car = $glob[$i];
if ($firstByte) {
if ($strictLeadingDot && '.' !== $car) {
$regex .= '(?=[^\.])';
}

$firstByte = false;
}

if ('/' === $car) {
$firstByte = true;
}

if ('.' === $car || '(' === $car || ')' === $car || '|' === $car || '+' === $car || '^' === $car || '$' === $car) {
$regex .= "\\$car";
} elseif ('*' === $car) {
$regex .= $escaping ? '\\*' : ($strictWildcardSlash ? '[^/]*' : '.*');
} elseif ('?' === $car) {
$regex .= $escaping ? '\\?' : ($strictWildcardSlash ? '[^/]' : '.');
} elseif ('{' === $car) {
$regex .= $escaping ? '\\{' : '(';
if (!$escaping) {
++$inCurlies;
}
} elseif ('}' === $car && $inCurlies) {
$regex .= $escaping ? '}' : ')';
if (!$escaping) {
--$inCurlies;
}
} elseif (',' === $car && $inCurlies) {
$regex .= $escaping ? ',' : '|';
} elseif ('\\' === $car) {
if ($escaping) {
$regex .= '\\\\';
$escaping = false;
} else {
$escaping = true;
}

continue;
} else {
$regex .= $car;
}
$escaping = false;
}

return '#^'.$regex.'$#';
}
}
<?php










namespace Symfony\Component\Finder\Iterator;






class DepthRangeFilterIterator extends FilterIterator
{
private $minDepth = 0;








public function __construct(\RecursiveIteratorIterator $iterator, $minDepth = 0, $maxDepth = PHP_INT_MAX)
{
$this->minDepth = $minDepth;
$iterator->setMaxDepth(PHP_INT_MAX === $maxDepth ? -1 : $maxDepth);

parent::__construct($iterator);
}






public function accept()
{
return $this->getInnerIterator()->getDepth() >= $this->minDepth;
}
}
<?php










namespace Symfony\Component\Finder\Iterator;






class SortableIterator implements \IteratorAggregate
{
const SORT_BY_NAME = 1;
const SORT_BY_TYPE = 2;
const SORT_BY_ACCESSED_TIME = 3;
const SORT_BY_CHANGED_TIME = 4;
const SORT_BY_MODIFIED_TIME = 5;

private $iterator;
private $sort;









public function __construct(\Traversable $iterator, $sort)
{
$this->iterator = $iterator;

if (self::SORT_BY_NAME === $sort) {
$this->sort = function ($a, $b) {
return strcmp($a->getRealpath(), $b->getRealpath());
};
} elseif (self::SORT_BY_TYPE === $sort) {
$this->sort = function ($a, $b) {
if ($a->isDir() && $b->isFile()) {
return -1;
} elseif ($a->isFile() && $b->isDir()) {
return 1;
}

return strcmp($a->getRealpath(), $b->getRealpath());
};
} elseif (self::SORT_BY_ACCESSED_TIME === $sort) {
$this->sort = function ($a, $b) {
return ($a->getATime() > $b->getATime());
};
} elseif (self::SORT_BY_CHANGED_TIME === $sort) {
$this->sort = function ($a, $b) {
return ($a->getCTime() > $b->getCTime());
};
} elseif (self::SORT_BY_MODIFIED_TIME === $sort) {
$this->sort = function ($a, $b) {
return ($a->getMTime() > $b->getMTime());
};
} elseif (is_callable($sort)) {
$this->sort = $sort;
} else {
throw new \InvalidArgumentException('The SortableIterator takes a PHP callback or a valid built-in sort algorithm as an argument.');
}
}

public function getIterator()
{
$array = iterator_to_array($this->iterator, true);
uasort($array, $this->sort);

return new \ArrayIterator($array);
}
}
<?php










namespace Symfony\Component\Finder\Iterator;







class FilecontentFilterIterator extends MultiplePcreFilterIterator
{





public function accept()
{
if (!$this->matchRegexps && !$this->noMatchRegexps) {
return true;
}

$fileinfo = $this->current();

if ($fileinfo->isDir() || !$fileinfo->isReadable()) {
return false;
}

$content = $fileinfo->getContents();
if (!$content) {
return false;
}


 foreach ($this->noMatchRegexps as $regex) {
if (preg_match($regex, $content)) {
return false;
}
}


 $match = true;
if ($this->matchRegexps) {
$match = false;
foreach ($this->matchRegexps as $regex) {
if (preg_match($regex, $content)) {
return true;
}
}
}

return $match;
}








protected function toRegex($str)
{
return $this->isRegex($str) ? $str : '/'.preg_quote($str, '/').'/';
}
}
<?php










namespace Symfony\Component\Finder\Iterator;

use Symfony\Component\Finder\SplFileInfo;






class FilePathsIterator extends \ArrayIterator
{



private $baseDir;




private $baseDirLength;




private $subPath;




private $subPathname;




private $current;





public function __construct(array $paths, $baseDir)
{
$this->baseDir = $baseDir;
$this->baseDirLength = strlen($baseDir);

parent::__construct($paths);
}







public function __call($name, array $arguments)
{
return call_user_func_array(array($this->current(), $name), $arguments);
}






public function current()
{
return $this->current;
}




public function key()
{
return $this->current->getPathname();
}

public function next()
{
parent::next();
$this->buildProperties();
}

public function rewind()
{
parent::rewind();
$this->buildProperties();
}




public function getSubPath()
{
return $this->subPath;
}




public function getSubPathname()
{
return $this->subPathname;
}

private function buildProperties()
{
$absolutePath = parent::current();

if ($this->baseDir === substr($absolutePath, 0, $this->baseDirLength)) {
$this->subPathname = ltrim(substr($absolutePath, $this->baseDirLength), '/\\');
$dir = dirname($this->subPathname);
$this->subPath = '.' === $dir ? '' : $dir;
} else {
$this->subPath = $this->subPathname = '';
}

$this->current = new SplFileInfo(parent::current(), $this->subPath, $this->subPathname);
}
}
<?php










namespace Symfony\Component\Finder\Iterator;

use Symfony\Component\Finder\Comparator\NumberComparator;






class SizeRangeFilterIterator extends FilterIterator
{
private $comparators = array();







public function __construct(\Iterator $iterator, array $comparators)
{
$this->comparators = $comparators;

parent::__construct($iterator);
}






public function accept()
{
$fileinfo = $this->current();
if (!$fileinfo->isFile()) {
return true;
}

$filesize = $fileinfo->getSize();
foreach ($this->comparators as $compare) {
if (!$compare->test($filesize)) {
return false;
}
}

return true;
}
}
<?php










namespace Symfony\Component\Finder\Iterator;






class ExcludeDirectoryFilterIterator extends FilterIterator
{
private $patterns;







public function __construct(\Iterator $iterator, array $directories)
{
$this->patterns = array();
foreach ($directories as $directory) {
$this->patterns[] = '#(^|/)'.preg_quote($directory, '#').'(/|$)#';
}

parent::__construct($iterator);
}






public function accept()
{
$path = $this->isDir() ? $this->current()->getRelativePathname() : $this->current()->getRelativePath();
$path = strtr($path, '\\', '/');
foreach ($this->patterns as $pattern) {
if (preg_match($pattern, $path)) {
return false;
}
}

return true;
}
}
<?php










namespace Symfony\Component\Finder\Iterator;








abstract class FilterIterator extends \FilterIterator
{






public function rewind()
{
$iterator = $this;
while ($iterator instanceof \OuterIterator) {
$innerIterator = $iterator->getInnerIterator();

if ($innerIterator instanceof RecursiveDirectoryIterator) {
if ($innerIterator->isRewindable()) {
$innerIterator->next();
$innerIterator->rewind();
}
} elseif ($iterator->getInnerIterator() instanceof \FilesystemIterator) {
$iterator->getInnerIterator()->next();
$iterator->getInnerIterator()->rewind();
}
$iterator = $iterator->getInnerIterator();
}

parent::rewind();
}
}
<?php










namespace Symfony\Component\Finder\Iterator;

use Symfony\Component\Finder\Expression\Expression;






abstract class MultiplePcreFilterIterator extends FilterIterator
{
protected $matchRegexps;
protected $noMatchRegexps;








public function __construct(\Iterator $iterator, array $matchPatterns, array $noMatchPatterns)
{
$this->matchRegexps = array();
foreach ($matchPatterns as $pattern) {
$this->matchRegexps[] = $this->toRegex($pattern);
}

$this->noMatchRegexps = array();
foreach ($noMatchPatterns as $pattern) {
$this->noMatchRegexps[] = $this->toRegex($pattern);
}

parent::__construct($iterator);
}








protected function isRegex($str)
{
return Expression::create($str)->isRegex();
}








abstract protected function toRegex($str);
}
<?php










namespace Symfony\Component\Finder\Iterator;









class CustomFilterIterator extends FilterIterator
{
private $filters = array();









public function __construct(\Iterator $iterator, array $filters)
{
foreach ($filters as $filter) {
if (!is_callable($filter)) {
throw new \InvalidArgumentException('Invalid PHP callback.');
}
}
$this->filters = $filters;

parent::__construct($iterator);
}






public function accept()
{
$fileinfo = $this->current();

foreach ($this->filters as $filter) {
if (false === call_user_func($filter, $fileinfo)) {
return false;
}
}

return true;
}
}
<?php










namespace Symfony\Component\Finder\Iterator;

use Symfony\Component\Finder\Expression\Expression;






class FilenameFilterIterator extends MultiplePcreFilterIterator
{






public function accept()
{
$filename = $this->current()->getFilename();


 foreach ($this->noMatchRegexps as $regex) {
if (preg_match($regex, $filename)) {
return false;
}
}


 $match = true;
if ($this->matchRegexps) {
$match = false;
foreach ($this->matchRegexps as $regex) {
if (preg_match($regex, $filename)) {
return true;
}
}
}

return $match;
}











protected function toRegex($str)
{
return Expression::create($str)->getRegex()->render();
}
}
<?php










namespace Symfony\Component\Finder\Iterator;

use Symfony\Component\Finder\Comparator\DateComparator;






class DateRangeFilterIterator extends FilterIterator
{
private $comparators = array();







public function __construct(\Iterator $iterator, array $comparators)
{
$this->comparators = $comparators;

parent::__construct($iterator);
}






public function accept()
{
$fileinfo = $this->current();

if (!$fileinfo->isFile()) {
return true;
}

$filedate = $fileinfo->getMTime();
foreach ($this->comparators as $compare) {
if (!$compare->test($filedate)) {
return false;
}
}

return true;
}
}
<?php










namespace Symfony\Component\Finder\Iterator;






class FileTypeFilterIterator extends FilterIterator
{
const ONLY_FILES = 1;
const ONLY_DIRECTORIES = 2;

private $mode;







public function __construct(\Iterator $iterator, $mode)
{
$this->mode = $mode;

parent::__construct($iterator);
}






public function accept()
{
$fileinfo = $this->current();
if (self::ONLY_DIRECTORIES === (self::ONLY_DIRECTORIES & $this->mode) && $fileinfo->isFile()) {
return false;
} elseif (self::ONLY_FILES === (self::ONLY_FILES & $this->mode) && $fileinfo->isDir()) {
return false;
}

return true;
}
}
<?php










namespace Symfony\Component\Finder\Iterator;

use Symfony\Component\Finder\Exception\AccessDeniedException;
use Symfony\Component\Finder\SplFileInfo;






class RecursiveDirectoryIterator extends \RecursiveDirectoryIterator
{



private $ignoreUnreadableDirs;




private $rewindable;










public function __construct($path, $flags, $ignoreUnreadableDirs = false)
{
if ($flags & (self::CURRENT_AS_PATHNAME | self::CURRENT_AS_SELF)) {
throw new \RuntimeException('This iterator only support returning current as fileinfo.');
}

parent::__construct($path, $flags);
$this->ignoreUnreadableDirs = $ignoreUnreadableDirs;
}






public function current()
{
return new SplFileInfo(parent::current()->getPathname(), $this->getSubPath(), $this->getSubPathname());
}






public function getChildren()
{
try {
return parent::getChildren();
} catch (\UnexpectedValueException $e) {
if ($this->ignoreUnreadableDirs) {

 return new \RecursiveArrayIterator(array());
} else {
throw new AccessDeniedException($e->getMessage(), $e->getCode(), $e);
}
}
}




public function rewind()
{
if (false === $this->isRewindable()) {
return;
}


 parent::next();

parent::rewind();
}






public function isRewindable()
{
if (null !== $this->rewindable) {
return $this->rewindable;
}

if (false !== $stream = @opendir($this->getPath())) {
$infos = stream_get_meta_data($stream);
closedir($stream);

if ($infos['seekable']) {
return $this->rewindable = true;
}
}

return $this->rewindable = false;
}
}
<?php










namespace Symfony\Component\Finder\Iterator;







class PathFilterIterator extends MultiplePcreFilterIterator
{






public function accept()
{
$filename = $this->current()->getRelativePathname();

if (defined('PHP_WINDOWS_VERSION_MAJOR')) {
$filename = strtr($filename, '\\', '/');
}


 foreach ($this->noMatchRegexps as $regex) {
if (preg_match($regex, $filename)) {
return false;
}
}


 $match = true;
if ($this->matchRegexps) {
$match = false;
foreach ($this->matchRegexps as $regex) {
if (preg_match($regex, $filename)) {
return true;
}
}
}

return $match;
}















protected function toRegex($str)
{
return $this->isRegex($str) ? $str : '/'.preg_quote($str, '/').'/';
}
}
<?php










namespace Symfony\Component\Finder\Comparator;






class DateComparator extends Comparator
{








public function __construct($test)
{
if (!preg_match('#^\s*(==|!=|[<>]=?|after|since|before|until)?\s*(.+?)\s*$#i', $test, $matches)) {
throw new \InvalidArgumentException(sprintf('Don\'t understand "%s" as a date test.', $test));
}

try {
$date = new \DateTime($matches[2]);
$target = $date->format('U');
} catch (\Exception $e) {
throw new \InvalidArgumentException(sprintf('"%s" is not a valid date.', $matches[2]));
}

$operator = isset($matches[1]) ? $matches[1] : '==';
if ('since' === $operator || 'after' === $operator) {
$operator = '>';
}

if ('until' === $operator || 'before' === $operator) {
$operator = '<';
}

$this->setOperator($operator);
$this->setTarget($target);
}
}
<?php










namespace Symfony\Component\Finder\Comparator;























class NumberComparator extends Comparator
{







public function __construct($test)
{
if (!preg_match('#^\s*(==|!=|[<>]=?)?\s*([0-9\.]+)\s*([kmg]i?)?\s*$#i', $test, $matches)) {
throw new \InvalidArgumentException(sprintf('Don\'t understand "%s" as a number test.', $test));
}

$target = $matches[2];
if (!is_numeric($target)) {
throw new \InvalidArgumentException(sprintf('Invalid number "%s".', $target));
}
if (isset($matches[3])) {

 switch (strtolower($matches[3])) {
case 'k':
$target *= 1000;
break;
case 'ki':
$target *= 1024;
break;
case 'm':
$target *= 1000000;
break;
case 'mi':
$target *= 1024*1024;
break;
case 'g':
$target *= 1000000000;
break;
case 'gi':
$target *= 1024*1024*1024;
break;
}
}

$this->setTarget($target);
$this->setOperator(isset($matches[1]) ? $matches[1] : '==');
}
}
<?php










namespace Symfony\Component\Finder\Comparator;






class Comparator
{
private $target;
private $operator = '==';






public function getTarget()
{
return $this->target;
}






public function setTarget($target)
{
$this->target = $target;
}






public function getOperator()
{
return $this->operator;
}








public function setOperator($operator)
{
if (!$operator) {
$operator = '==';
}

if (!in_array($operator, array('>', '<', '>=', '<=', '==', '!='))) {
throw new \InvalidArgumentException(sprintf('Invalid operator "%s".', $operator));
}

$this->operator = $operator;
}








public function test($test)
{
switch ($this->operator) {
case '>':
return $test > $this->target;
case '>=':
return $test >= $this->target;
case '<':
return $test < $this->target;
case '<=':
return $test <= $this->target;
case '!=':
return $test != $this->target;
}

return $test == $this->target;
}
}
<?php










namespace Symfony\Component\Finder\Exception;




class AccessDeniedException extends \UnexpectedValueException
{
}
<?php










namespace Symfony\Component\Finder\Exception;




interface ExceptionInterface
{



public function getAdapter();
}
<?php










namespace Symfony\Component\Finder\Exception;




class OperationNotPermitedException extends AdapterFailureException
{
}
<?php










namespace Symfony\Component\Finder\Exception;

use Symfony\Component\Finder\Adapter\AdapterInterface;






class AdapterFailureException extends \RuntimeException implements ExceptionInterface
{



private $adapter;






public function __construct(AdapterInterface $adapter, $message = null, \Exception $previous = null)
{
$this->adapter = $adapter;
parent::__construct($message ?: 'Search failed with "'.$adapter->getName().'" adapter.', $previous);
}




public function getAdapter()
{
return $this->adapter;
}
}
<?php










namespace Symfony\Component\Finder\Exception;

use Symfony\Component\Finder\Adapter\AdapterInterface;
use Symfony\Component\Finder\Shell\Command;




class ShellCommandFailureException extends AdapterFailureException
{



private $command;






public function __construct(AdapterInterface $adapter, Command $command, \Exception $previous = null)
{
$this->command = $command;
parent::__construct($adapter, 'Shell command failed: "'.$command->join().'".', $previous);
}




public function getCommand()
{
return $this->command;
}
}
<?php










namespace Symfony\Component\Finder;






class SplFileInfo extends \SplFileInfo
{
private $relativePath;
private $relativePathname;








public function __construct($file, $relativePath, $relativePathname)
{
parent::__construct($file);
$this->relativePath = $relativePath;
$this->relativePathname = $relativePathname;
}






public function getRelativePath()
{
return $this->relativePath;
}






public function getRelativePathname()
{
return $this->relativePathname;
}








public function getContents()
{
$level = error_reporting(0);
$content = file_get_contents($this->getPathname());
error_reporting($level);
if (false === $content) {
$error = error_get_last();
throw new \RuntimeException($error['message']);
}

return $content;
}
}
<?php










namespace Seld\JsonLint;

class Undefined
{
}
<?php










namespace Seld\JsonLint;

use stdClass;














class JsonParser
{
const DETECT_KEY_CONFLICTS = 1;
const ALLOW_DUPLICATE_KEYS = 2;

private $flags;
private $stack;
private $vstack; 
 private $lstack; 

private $yy;
private $symbols = array(
'error' => 2,
'JSONString' => 3,
'STRING' => 4,
'JSONNumber' => 5,
'NUMBER' => 6,
'JSONNullLiteral' => 7,
'NULL' => 8,
'JSONBooleanLiteral' => 9,
'TRUE' => 10,
'FALSE' => 11,
'JSONText' => 12,
'JSONValue' => 13,
'EOF' => 14,
'JSONObject' => 15,
'JSONArray' => 16,
'{' => 17,
'}' => 18,
'JSONMemberList' => 19,
'JSONMember' => 20,
':' => 21,
',' => 22,
'[' => 23,
']' => 24,
'JSONElementList' => 25,
'$accept' => 0,
'$end' => 1,
);

private $terminals_ = array(
2 => "error",
4 => "STRING",
6 => "NUMBER",
8 => "NULL",
10 => "TRUE",
11 => "FALSE",
14 => "EOF",
17 => "{",
18 => "}",
21 => ":",
22 => ",",
23 => "[",
24 => "]",
);

private $productions_ = array(
0,
array(3, 1),
array(5, 1),
array(7, 1),
array(9, 1),
array(9, 1),
array(12, 2),
array(13, 1),
array(13, 1),
array(13, 1),
array(13, 1),
array(13, 1),
array(13, 1),
array(15, 2),
array(15, 3),
array(20, 3),
array(19, 1),
array(19, 3),
array(16, 2),
array(16, 3),
array(25, 1),
array(25, 3)
);

private $table = array(array(3 => 5, 4 => array(1,12), 5 => 6, 6 => array(1,13), 7 => 3, 8 => array(1,9), 9 => 4, 10 => array(1,10), 11 => array(1,11), 12 => 1, 13 => 2, 15 => 7, 16 => 8, 17 => array(1,14), 23 => array(1,15)), array( 1 => array(3)), array( 14 => array(1,16)), array( 14 => array(2,7), 18 => array(2,7), 22 => array(2,7), 24 => array(2,7)), array( 14 => array(2,8), 18 => array(2,8), 22 => array(2,8), 24 => array(2,8)), array( 14 => array(2,9), 18 => array(2,9), 22 => array(2,9), 24 => array(2,9)), array( 14 => array(2,10), 18 => array(2,10), 22 => array(2,10), 24 => array(2,10)), array( 14 => array(2,11), 18 => array(2,11), 22 => array(2,11), 24 => array(2,11)), array( 14 => array(2,12), 18 => array(2,12), 22 => array(2,12), 24 => array(2,12)), array( 14 => array(2,3), 18 => array(2,3), 22 => array(2,3), 24 => array(2,3)), array( 14 => array(2,4), 18 => array(2,4), 22 => array(2,4), 24 => array(2,4)), array( 14 => array(2,5), 18 => array(2,5), 22 => array(2,5), 24 => array(2,5)), array( 14 => array(2,1), 18 => array(2,1), 21 => array(2,1), 22 => array(2,1), 24 => array(2,1)), array( 14 => array(2,2), 18 => array(2,2), 22 => array(2,2), 24 => array(2,2)), array( 3 => 20, 4 => array(1,12), 18 => array(1,17), 19 => 18, 20 => 19 ), array( 3 => 5, 4 => array(1,12), 5 => 6, 6 => array(1,13), 7 => 3, 8 => array(1,9), 9 => 4, 10 => array(1,10), 11 => array(1,11), 13 => 23, 15 => 7, 16 => 8, 17 => array(1,14), 23 => array(1,15), 24 => array(1,21), 25 => 22 ), array( 1 => array(2,6)), array( 14 => array(2,13), 18 => array(2,13), 22 => array(2,13), 24 => array(2,13)), array( 18 => array(1,24), 22 => array(1,25)), array( 18 => array(2,16), 22 => array(2,16)), array( 21 => array(1,26)), array( 14 => array(2,18), 18 => array(2,18), 22 => array(2,18), 24 => array(2,18)), array( 22 => array(1,28), 24 => array(1,27)), array( 22 => array(2,20), 24 => array(2,20)), array( 14 => array(2,14), 18 => array(2,14), 22 => array(2,14), 24 => array(2,14)), array( 3 => 20, 4 => array(1,12), 20 => 29 ), array( 3 => 5, 4 => array(1,12), 5 => 6, 6 => array(1,13), 7 => 3, 8 => array(1,9), 9 => 4, 10 => array(1,10), 11 => array(1,11), 13 => 30, 15 => 7, 16 => 8, 17 => array(1,14), 23 => array(1,15)), array( 14 => array(2,19), 18 => array(2,19), 22 => array(2,19), 24 => array(2,19)), array( 3 => 5, 4 => array(1,12), 5 => 6, 6 => array(1,13), 7 => 3, 8 => array(1,9), 9 => 4, 10 => array(1,10), 11 => array(1,11), 13 => 31, 15 => 7, 16 => 8, 17 => array(1,14), 23 => array(1,15)), array( 18 => array(2,17), 22 => array(2,17)), array( 18 => array(2,15), 22 => array(2,15)), array( 22 => array(2,21), 24 => array(2,21)),
);

private $defaultActions = array(
16 => array(2, 6)
);





public function lint($input)
{
try {
$this->parse($input);
} catch (ParsingException $e) {
return $e;
}
}






public function parse($input, $flags = 0)
{
$this->flags = $flags;

$this->stack = array(0);
$this->vstack = array(null);
$this->lstack = array();

$yytext = '';
$yylineno = 0;
$yyleng = 0;
$recovering = 0;
$TERROR = 2;
$EOF = 1;

$this->lexer = new Lexer();
$this->lexer->setInput($input);

$yyloc = $this->lexer->yylloc;
$this->lstack[] = $yyloc;

$symbol = null;
$preErrorSymbol = null;
$state = null;
$action = null;
$a = null;
$r = null;
$yyval = new stdClass;
$p = null;
$len = null;
$newState = null;
$expected = null;
$errStr = null;

while (true) {

 $state = $this->stack[count($this->stack)-1];


 if (isset($this->defaultActions[$state])) {
$action = $this->defaultActions[$state];
} else {
if ($symbol == null) {
$symbol = $this->lex();
}

 $action = isset($this->table[$state][$symbol]) ? $this->table[$state][$symbol] : false;
}


 if (!$action || !$action[0]) {
if (!$recovering) {

 $expected = array();
foreach ($this->table[$state] as $p => $ignore) {
if (isset($this->terminals_[$p]) && $p > 2) {
$expected[] = "'" . $this->terminals_[$p] . "'";
}
}

$message = null;
if (in_array("'STRING'", $expected) && in_array(substr($this->lexer->match, 0, 1), array('"', "'"))) {
$message = "Invalid string";
if ("'" === substr($this->lexer->match, 0, 1)) {
$message .= ", it appears you used single quotes instead of double quotes";
} elseif (preg_match('{".+?(\\\\[^"bfnrt/\\\\u])}', $this->lexer->getUpcomingInput(), $match)) {
$message .= ", it appears you have an unescaped backslash at: ".$match[1];
} elseif (preg_match('{"(?:[^"]+|\\\\")*$}m', $this->lexer->getUpcomingInput())) {
$message .= ", it appears you forgot to terminated the string, or attempted to write a multiline string which is invalid";
}
}

$errStr = 'Parse error on line ' . ($yylineno+1) . ":\n";
$errStr .= $this->lexer->showPosition() . "\n";
if ($message) {
$errStr .= $message;
} else {
$errStr .= (count($expected) > 1) ? "Expected one of: " : "Expected: ";
$errStr .= implode(', ', $expected);
}

if (',' === substr(trim($this->lexer->getPastInput()), -1)) {
$errStr .= " - It appears you have an extra trailing comma";
}

$this->parseError($errStr, array(
'text' => $this->lexer->match,
'token' => !empty($this->terminals_[$symbol]) ? $this->terminals_[$symbol] : $symbol,
'line' => $this->lexer->yylineno,
'loc' => $yyloc,
'expected' => $expected,
));
}


 if ($recovering == 3) {
if ($symbol == $EOF) {
throw new ParsingException($errStr ?: 'Parsing halted.');
}


 $yyleng = $this->lexer->yyleng;
$yytext = $this->lexer->yytext;
$yylineno = $this->lexer->yylineno;
$yyloc = $this->lexer->yylloc;
$symbol = $this->lex();
}


 while (true) {

 if (array_key_exists($TERROR, $this->table[$state])) {
break;
}
if ($state == 0) {
throw new ParsingException($errStr ?: 'Parsing halted.');
}
$this->popStack(1);
$state = $this->stack[count($this->stack)-1];
}

$preErrorSymbol = $symbol; 
 $symbol = $TERROR; 
 $state = $this->stack[count($this->stack)-1];
$action = isset($this->table[$state][$TERROR]) ? $this->table[$state][$TERROR] : false;
$recovering = 3; 
 }


 if (is_array($action[0]) && count($action) > 1) {
throw new ParsingException('Parse Error: multiple actions possible at state: ' . $state . ', token: ' . $symbol);
}

switch ($action[0]) {
case 1: 
 $this->stack[] = $symbol;
$this->vstack[] = $this->lexer->yytext;
$this->lstack[] = $this->lexer->yylloc;
$this->stack[] = $action[1]; 
 $symbol = null;
if (!$preErrorSymbol) { 
 $yyleng = $this->lexer->yyleng;
$yytext = $this->lexer->yytext;
$yylineno = $this->lexer->yylineno;
$yyloc = $this->lexer->yylloc;
if ($recovering > 0) {
$recovering--;
}
} else { 
 $symbol = $preErrorSymbol;
$preErrorSymbol = null;
}
break;

case 2: 
 $len = $this->productions_[$action[1]][1];


 $yyval->token = $this->vstack[count($this->vstack) - $len]; 
 
 $yyval->store = array( 
 'first_line' => $this->lstack[count($this->lstack) - ($len ?: 1)]['first_line'],
'last_line' => $this->lstack[count($this->lstack) - 1]['last_line'],
'first_column' => $this->lstack[count($this->lstack) - ($len ?: 1)]['first_column'],
'last_column' => $this->lstack[count($this->lstack) - 1]['last_column'],
);
$r = $this->performAction($yyval, $yytext, $yyleng, $yylineno, $action[1], $this->vstack, $this->lstack);

if (!$r instanceof Undefined) {
return $r;
}

if ($len) {
$this->popStack($len);
}

$this->stack[] = $this->productions_[$action[1]][0]; 
 $this->vstack[] = $yyval->token;
$this->lstack[] = $yyval->store;
$newState = $this->table[$this->stack[count($this->stack)-2]][$this->stack[count($this->stack)-1]];
$this->stack[] = $newState;
break;

case 3: 

return true;
}
}

return true;
}

protected function parseError($str, $hash)
{
throw new ParsingException($str, $hash);
}


 
 
 private function performAction(stdClass $yyval, $yytext, $yyleng, $yylineno, $yystate, &$tokens)
{

 $len = count($tokens) - 1;
switch ($yystate) {
case 1:
$yytext = preg_replace_callback('{(?:\\\\["bfnrt/\\\\]|\\\\u[a-fA-F0-9]{4})}', array($this, 'stringInterpolation'), $yytext);
$yyval->token = $yytext;
break;
case 2:
if (strpos($yytext, 'e') !== false || strpos($yytext, 'E') !== false) {
$yyval->token = floatval($yytext);
} else {
$yyval->token = strpos($yytext, '.') === false ? intval($yytext) : floatval($yytext);
}
break;
case 3:
$yyval->token = null;
break;
case 4:
$yyval->token = true;
break;
case 5:
$yyval->token = false;
break;
case 6:
return $yyval->token = $tokens[$len-1];
case 13:
$yyval->token = new stdClass;
break;
case 14:
$yyval->token = $tokens[$len-1];
break;
case 15:
$yyval->token = array($tokens[$len-2], $tokens[$len]);
break;
case 16:
$yyval->token = new stdClass;
$property = $tokens[$len][0] === '' ? '_empty_' : $tokens[$len][0];
$yyval->token->$property = $tokens[$len][1];
break;
case 17:
$yyval->token = $tokens[$len-2];
$key = $tokens[$len][0] === '' ? '_empty_' : $tokens[$len][0];
if (($this->flags & self::DETECT_KEY_CONFLICTS) && isset($tokens[$len-2]->{$key})) {
$errStr = 'Parse error on line ' . ($yylineno+1) . ":\n";
$errStr .= $this->lexer->showPosition() . "\n";
$errStr .= "Duplicate key: ".$tokens[$len][0];
throw new ParsingException($errStr);
} elseif (($this->flags & self::ALLOW_DUPLICATE_KEYS) && isset($tokens[$len-2]->{$key})) {
$duplicateCount = 1;
do {
$duplicateKey = $key . '.' . $duplicateCount++;
} while (isset($tokens[$len-2]->$duplicateKey));
$key = $duplicateKey;
}
$tokens[$len-2]->$key = $tokens[$len][1];
break;
case 18:
$yyval->token = array();
break;
case 19:
$yyval->token = $tokens[$len-1];
break;
case 20:
$yyval->token = array($tokens[$len]);
break;
case 21:
$tokens[$len-2][] = $tokens[$len];
$yyval->token = $tokens[$len-2];
break;
}

return new Undefined();
}

private function stringInterpolation($match)
{
switch ($match[0]) {
case '\\\\':
return '\\';
case '\"':
return '"';
case '\b':
return chr(8);
case '\f':
return chr(12);
case '\n':
return "\n";
case '\r':
return "\r";
case '\t':
return "\t";
case '\/':
return "/";
default:
return html_entity_decode('&#x'.ltrim(substr($match[0], 2), '0').';', 0, 'UTF-8');
}
}

private function popStack($n)
{
$this->stack = array_slice($this->stack, 0, - (2 * $n));
$this->vstack = array_slice($this->vstack, 0, - $n);
$this->lstack = array_slice($this->lstack, 0, - $n);
}

private function lex()
{
$token = $this->lexer->lex() ?: 1; 
 
 if (!is_numeric($token)) {
$token = isset($this->symbols[$token]) ? $this->symbols[$token] : $token;
}

return $token;
}
}
<?php










namespace Seld\JsonLint;






class Lexer
{
private $EOF = 1;
private $rules = array(
0 => '/^\s+/',
1 => '/^-?([0-9]|[1-9][0-9]+)(\.[0-9]+)?([eE][+-]?[0-9]+)?\b/',
2 => '{^"(\\\\["bfnrt/\\\\]|\\\\u[a-fA-F0-9]{4}|[^\0-\x09\x0a-\x1f\\\\"])*"}',
3 => '/^\{/',
4 => '/^\}/',
5 => '/^\[/',
6 => '/^\]/',
7 => '/^,/',
8 => '/^:/',
9 => '/^true\b/',
10 => '/^false\b/',
11 => '/^null\b/',
12 => '/^$/',
13 => '/^./',
);

private $conditions = array(
"INITIAL" => array(
"rules" => array(0,1,2,3,4,5,6,7,8,9,10,11,12,13),
"inclusive" => true,
),
);

private $conditionStack;
private $input;
private $more;
private $done;
private $matched;

public $match;
public $yylineno;
public $yyleng;
public $yytext;
public $yylloc;

public function lex()
{
$r = $this->next();
if (!$r instanceof Undefined) {
return $r;
}

return $this->lex();
}

public function setInput($input)
{
$this->input = $input;
$this->more = false;
$this->done = false;
$this->yylineno = $this->yyleng = 0;
$this->yytext = $this->matched = $this->match = '';
$this->conditionStack = array('INITIAL');
$this->yylloc = array('first_line' => 1, 'first_column' => 0, 'last_line' => 1, 'last_column' => 0);

return $this;
}

public function showPosition()
{
$pre = str_replace("\n", '', $this->getPastInput());
$c = str_repeat('-', strlen($pre)); 

return $pre . str_replace("\n", '', $this->getUpcomingInput()) . "\n" . $c . "^";
}

public function getPastInput()
{
$past = substr($this->matched, 0, strlen($this->matched) - strlen($this->match));

return (strlen($past) > 20 ? '...' : '') . substr($past, -20);
}

public function getUpcomingInput()
{
$next = $this->match;
if (strlen($next) < 20) {
$next .= substr($this->input, 0, 20 - strlen($next));
}

return substr($next, 0, 20) . (strlen($next) > 20 ? '...' : '');
}

protected function parseError($str, $hash)
{
throw new \Exception($str);
}

private function next()
{
if ($this->done) {
return $this->EOF;
}
if (!$this->input) {
$this->done = true;
}

$token = null;
$match = null;
$col = null;
$lines = null;

if (!$this->more) {
$this->yytext = '';
$this->match = '';
}

$rules = $this->getCurrentRules();
$rulesLen = count($rules);

for ($i=0; $i < $rulesLen; $i++) {
if (preg_match($this->rules[$rules[$i]], $this->input, $match)) {
preg_match_all('/\n.*/', $match[0], $lines);
$lines = $lines[0];
if ($lines) {
$this->yylineno += count($lines);
}

$this->yylloc = array(
'first_line' => $this->yylloc['last_line'],
'last_line' => $this->yylineno+1,
'first_column' => $this->yylloc['last_column'],
'last_column' => $lines ? strlen($lines[count($lines) - 1]) - 1 : $this->yylloc['last_column'] + strlen($match[0]),
);
$this->yytext .= $match[0];
$this->match .= $match[0];
$this->matches = $match;
$this->yyleng = strlen($this->yytext);
$this->more = false;
$this->input = substr($this->input, strlen($match[0]));
$this->matched .= $match[0];
$token = $this->performAction($rules[$i], $this->conditionStack[count($this->conditionStack)-1]);
if ($token) {
return $token;
}

return new Undefined();
}
}

if ($this->input === "") {
return $this->EOF;
}

$this->parseError(
'Lexical error on line ' . ($this->yylineno+1) . ". Unrecognized text.\n" . $this->showPosition(),
array(
'text' => "",
'token' => null,
'line' => $this->yylineno,
)
);
}

private function begin($condition)
{
$this->conditionStack[] = $condition;
}

private function popState()
{
return array_pop($this->conditionStack);
}

private function getCurrentRules()
{
return $this->conditions[$this->conditionStack[count($this->conditionStack)-1]]['rules'];
}

private function performAction($avoiding_name_collisions, $YY_START)
{
$YYSTATE = $YY_START;
switch ($avoiding_name_collisions) {
case 0:
break;
case 1:
return 6;
break;
case 2:
$this->yytext = substr($this->yytext, 1, $this->yyleng-2);

return 4;
case 3:
return 17;
case 4:
return 18;
case 5:
return 23;
case 6:
return 24;
case 7:
return 22;
case 8:
return 21;
case 9:
return 10;
case 10:
return 11;
case 11:
return 8;
case 12:
return 14;
case 13:
return 'INVALID';
}
}
}
<?php










namespace Seld\JsonLint;

class ParsingException extends \Exception
{
protected $details;

public function __construct($message, $details = array())
{
$this->details = $details;
parent::__construct($message);
}

public function getDetails()
{
return $this->details;
}
}
<?php

namespace JsonSchema\Constraints;







class Undefined extends Constraint
{



function check($value, $schema = null, $path = null, $i = null)
{
if (!is_object($schema)) {
return;
}

$path = $this->incrementPath($path, $i);


 $this->validateCommonProperties($value, $schema, $path);


 $this->validateTypes($value, $schema, $path, $i);


}









public function validateTypes($value, $schema = null, $path = null, $i = null)
{

 if (is_array($value)) {
$this->checkArray($value, $schema, $path, $i);
}


 if (is_object($value) && isset($schema->properties)) {
$this->checkObject($value, $schema->properties, $path, isset($schema->additionalProperties) ? $schema->additionalProperties : null);
}


 if (is_string($value)) {
$this->checkString($value, $schema, $path, $i);
}


 if (is_numeric($value)) {
$this->checkNumber($value, $schema, $path, $i);
}


 if (isset($schema->enum)) {
$this->checkEnum($value, $schema, $path, $i);
}
}









protected function validateCommonProperties($value, $schema = null, $path = null, $i = null)
{

 if (isset($schema->extends)) {
$this->checkUndefined($value, $schema->extends, $path, $i);
}


 if (is_object($value) && $value instanceOf Undefined) {
if (isset($schema->required) && $schema->required) {
$this->addError($path, "is missing and it is required");
}
} else {
$this->checkType($value, $schema, $path);
}


 if (isset($schema->disallow)) {
$initErrors = $this->getErrors();

$this->checkUndefined($value, $schema->disallow, $path);


 if (count($this->getErrors()) == count($initErrors)) {
$this->addError($path, " disallowed value was matched");
} else {
$this->errors = $initErrors;
}
}
}
}<?php

namespace JsonSchema\Constraints;







class Type extends Constraint
{



function check($value = null, $schema = null, $path = null, $i = null)
{
$type = isset($schema->type) ? $schema->type : null;
$isValid = true;

if (is_array($type)) {

 $validatedOneType = false;
$errors = array();
foreach ($type as $tp) {
$validator = new Type($this->checkMode);
$subSchema = new \stdClass();
$subSchema->type = $tp;
$validator->check($value, $subSchema, $path, null);
$error = $validator->getErrors();

if (!count($error)) {
$validatedOneType = true;
break;
} else {
$errors = $error;
}
}
if (!$validatedOneType) {
return $this->addErrors($errors);
}
} elseif (is_object($type)) {
$this->checkUndefined($value, $type, $path);
} else {
$isValid = $this->validateType($value, $type);
}

if ($isValid === false) {
$this->addError($path, gettype($value) . " value found, but a " . $type . " is required");
}
}









protected function validateType($value, $type)
{

 if (!$type) {
return true;
}

switch ($type) {
case 'integer' :
return (integer)$value == $value ? true : is_int($value);
case 'number' :
return is_numeric($value);
case 'boolean' :
return is_bool($value);
case 'object' :
return is_object($value);

 case 'array' :
return is_array($value);
case 'string' :
return is_string($value);
case 'null' :
return is_null($value);
case 'any' :
return true;
default:
throw new \InvalidArgumentException((is_object($value) ? 'object' : $value) . ' is a invalid type for ' . $type);
}
}
}<?php

namespace JsonSchema\Constraints;







class Schema extends Constraint
{



public function check($element, $schema = null, $path = null, $i = null)
{
if ($schema !== null) {

 $this->checkUndefined($element, $schema, '', '');
} elseif (isset($element->{$this->inlineSchemaProperty})) {

 $this->checkUndefined($element, $element->{$this->inlineSchemaProperty}, '', '');
} else {
throw new \InvalidArgumentException('no schema found to verify against');
}
}
}<?php

namespace JsonSchema\Constraints;







class Number extends Constraint
{



public function check($element, $schema = null, $path = null, $i = null)
{

 if (isset($schema->minimum) && $element < $schema->minimum) {
$this->addError($path, "must have a minimum value of " . $schema->minimum);
}


 if (isset($schema->maximum) && $element > $schema->maximum) {
$this->addError($path, "must have a maximum value of " . $schema->maximum);
}


 if (isset($schema->divisibleBy) && $element % $schema->divisibleBy != 0) {
$this->addError($path, "is not divisible by " . $schema->divisibleBy);
}
}
}<?php

namespace JsonSchema\Constraints;







class Object extends Constraint
{



function check($element, $definition = null, $path = null, $additionalProp = null)
{

 $this->validateDefinition($element, $definition, $path);


 $this->validateElement($element, $definition, $path, $additionalProp);
}









public function validateElement($element, $objectDefinition = null, $path = null, $additionalProp = null)
{
foreach ($element as $i => $value) {

$property = $this->getProperty($element, $i, new Undefined());
$definition = $this->getProperty($objectDefinition, $i);


 if ($this->getProperty($definition, 'required') && !$property) {
$this->addError($path, "the property " . $i . " is required");
}


 if ($additionalProp === false && $this->inlineSchemaProperty !== $i && !$definition) {
$this->addError($path, "The property " . $i . " is not defined and the definition does not allow additional properties");
}


 if ($additionalProp && !$definition) {
$this->checkUndefined($value, $additionalProp, $path, $i);
}


 $require = $this->getProperty($definition, 'requires');
if ($require && !$this->getProperty($element, $require)) {
$this->addError($path, "the presence of the property " . $i . " requires that " . $require . " also be present");
}


 $this->checkUndefined($value, $definition ? : new \stdClass(), $path, $i);
}
}








public function validateDefinition($element, $objectDefinition = null, $path = null)
{
foreach ($objectDefinition as $i => $value) {
$property = $this->getProperty($element, $i, new Undefined());
$definition = $this->getProperty($objectDefinition, $i);
$this->checkUndefined($property, $definition, $path, $i);
}
}









protected function getProperty($element, $property, $fallback = null)
{
if (is_array($element) ) {
return array_key_exists($property, $element) ? $element[$property] : $fallback;
} else {
return isset($element->$property) ? $element->$property : $fallback;
}
}
}<?php

namespace JsonSchema\Constraints;






interface ConstraintInterface
{





function getErrors();






function addErrors(array $errors);







function addError($path, $message);






function isValid();










function check($value, $schema = null, $path = null, $i = null);
}<?php

namespace JsonSchema\Constraints;







abstract class Constraint implements ConstraintInterface
{
protected $checkMode = self::CHECK_MODE_NORMAL;
protected $errors = array();
protected $inlineSchemaProperty = '$schema';

const CHECK_MODE_NORMAL = 1;
const CHECK_MODE_TYPE_CAST = 2;




public function __construct($checkMode = self::CHECK_MODE_NORMAL)
{
$this->checkMode = $checkMode;
}




public function addError($path, $message)
{
$this->errors[] = array(
'property' => $path,
'message' => $message
);
}




public function addErrors(array $errors)
{
$this->errors = array_merge($this->errors, $errors);
}




public function getErrors()
{
return array_unique($this->errors, SORT_REGULAR);
}








protected function incrementPath($path, $i)
{
if ($path !== '') {
if (is_int($i)) {
$path .= '[' . $i . ']';
} else if ($i == '') {
$path .= '';
} else {
$path .= '.' . $i;
}
} else {
$path = $i;
}

return $path;
}









protected function checkArray($value, $schema = null, $path = null, $i = null)
{
$validator = new Collection($this->checkMode);
$validator->check($value, $schema, $path, $i);

$this->addErrors($validator->getErrors());
}









protected function checkObject($value, $schema = null, $path = null, $i = null)
{
$validator = new Object($this->checkMode);
$validator->check($value, $schema, $path, $i);

$this->addErrors($validator->getErrors());
}









protected function checkType($value, $schema = null, $path = null, $i = null)
{
$validator = new Type($this->checkMode);
$validator->check($value, $schema, $path, $i);

$this->addErrors($validator->getErrors());
}









protected function checkUndefined($value, $schema = null, $path = null, $i = null)
{
$validator = new Undefined($this->checkMode);
$validator->check($value, $schema, $path, $i);

$this->addErrors($validator->getErrors());
}









protected function checkString($value, $schema = null, $path = null, $i = null)
{
$validator = new String($this->checkMode);
$validator->check($value, $schema, $path, $i);

$this->addErrors($validator->getErrors());
}









protected function checkNumber($value, $schema = null, $path = null, $i = null)
{
$validator = new Number($this->checkMode);
$validator->check($value, $schema, $path, $i);

$this->addErrors($validator->getErrors());
}









protected function checkEnum($value, $schema = null, $path = null, $i = null)
{
$validator = new Enum($this->checkMode);
$validator->check($value, $schema, $path, $i);

$this->addErrors($validator->getErrors());
}




public function isValid()
{
return !$this->getErrors();
}
}<?php

namespace JsonSchema\Constraints;







class Collection extends Constraint
{



public function check($value, $schema = null, $path = null, $i = null)
{

 if (isset($schema->minItems) && count($value) < $schema->minItems) {
$this->addError($path, "There must be a minimum of " . $schema->minItems . " in the array");
}

 if (isset($schema->maxItems) && count($value) > $schema->maxItems) {
$this->addError($path, "There must be a maximum of " . $schema->maxItems . " in the array");
}

 
 if (isset($schema->uniqueItems) && array_unique($value) != $value) {
$this->addError($path, "There are no duplicates allowed in the array");
}


 if (isset($schema->items)) {
$this->validateItems($value, $schema, $path, $i);
}
}









protected function validateItems($value, $schema = null, $path = null, $i = null)
{
if (!is_array($schema->items)) {

 foreach ($value as $k => $v) {
$initErrors = $this->getErrors();


 if (!isset($schema->additionalItems) || $schema->additionalItems === false) {
$this->checkUndefined($v, $schema->items, $path, $k);
}


 if (count($initErrors) < count($this->getErrors()) && (isset($schema->additionalItems) && $schema->additionalItems !== false)) {
$secondErrors = $this->getErrors();
$this->checkUndefined($v, $schema->additionalItems, $path, $k);
}


 if (isset($secondErrors) && count($secondErrors) < $this->getErrors()) {
$this->errors = $secondErrors;
} elseif (isset($secondErrors) && count($secondErrors) == count($this->getErrors())) {
$this->errors = $initErrors;
}
}
} else {

 foreach ($value as $k => $v) {
if (array_key_exists($k, $schema->items)) {
$this->checkUndefined($v, $schema->items[$k], $path, $k);
} else {

 if (array_key_exists('additionalItems', $schema) && $schema->additionalItems !== false) {
$this->checkUndefined($v, $schema->additionalItems, $path, $k);
} else {
$this->addError(
$path,
'The item ' . $i . '[' . $k . '] is not defined in the objTypeDef and the objTypeDef does not allow additional properties'
);
}
}
}


 for ($k = count($value); $k < count($schema->items); $k++) {
$this->checkUndefined(new Undefined(), $schema->items[$k], $path, $k);
}
}
}
}<?php

namespace JsonSchema\Constraints;







class Enum extends Constraint
{



public function check($element, $schema = null, $path = null, $i = null)
{
foreach ($schema->enum as $possibleValue) {
if ($possibleValue == $element) {
$found = true;
break;
}
}

if (!isset($found)) {
$this->addError($path, "does not have a value in the enumeration " . implode(', ', $schema->enum));
}
}
}<?php

namespace JsonSchema\Constraints;







class String extends Constraint
{



public function check($element, $schema = null, $path = null, $i = null)
{

 if (isset($schema->maxLength) && strlen($element) > $schema->maxLength) {
$this->addError($path, "must be at most " . $schema->maxLength . " characters long");
}


 if (isset($schema->minLength) && strlen($element) < $schema->minLength) {
$this->addError($path, "must be at least " . $schema->minLength . " characters long");
}


 if (isset($schema->pattern) && !preg_match('/' . $schema->pattern . '/', $element)) {
$this->addError($path, "does not match the regex pattern " . $schema->pattern);
}
}
}<?php

namespace JsonSchema;

use JsonSchema\Constraints\Schema;
use JsonSchema\Constraints\Constraint;








class Validator extends Constraint
{







function check($value, $schema = null, $path = null, $i = null)
{
$validator = new Schema($this->checkMode);
$validator->check($value, $schema);
$this->addErrors($validator->getErrors());
}
}<?php



require_once __DIR__ . '/composer' . '/autoload_real.php';

return ComposerAutoloaderInitd9afb8ce29d74b76b6753dd5c3bf695e::getLoader();
<?php



$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
'Symfony\\Component\\Yaml\\' => array($vendorDir . '/symfony/yaml'),
'Symfony\\Component\\Process\\' => array($vendorDir . '/symfony/process'),
'Symfony\\Component\\Finder\\' => array($vendorDir . '/symfony/finder'),
'Symfony\\Component\\Console\\' => array($vendorDir . '/symfony/console'),
'Seld\\JsonLint' => array($vendorDir . '/seld/jsonlint/src'),
'JsonSchema' => array($vendorDir . '/justinrainbow/json-schema/src'),
'Composer' => array($baseDir . '/src'),
);
<?php



$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
'File_Iterator' => $vendorDir . '/phpunit/php-file-iterator/File/Iterator.php',
'File_Iterator_Facade' => $vendorDir . '/phpunit/php-file-iterator/File/Iterator/Facade.php',
'File_Iterator_Factory' => $vendorDir . '/phpunit/php-file-iterator/File/Iterator/Factory.php',
'PHPUnit_Extensions_GroupTestSuite' => $vendorDir . '/phpunit/phpunit/PHPUnit/Extensions/GroupTestSuite.php',
'PHPUnit_Extensions_PhptTestCase' => $vendorDir . '/phpunit/phpunit/PHPUnit/Extensions/PhptTestCase.php',
'PHPUnit_Extensions_PhptTestCase_Logger' => $vendorDir . '/phpunit/phpunit/PHPUnit/Extensions/PhptTestCase/Logger.php',
'PHPUnit_Extensions_PhptTestSuite' => $vendorDir . '/phpunit/phpunit/PHPUnit/Extensions/PhptTestSuite.php',
'PHPUnit_Extensions_RepeatedTest' => $vendorDir . '/phpunit/phpunit/PHPUnit/Extensions/RepeatedTest.php',
'PHPUnit_Extensions_TestDecorator' => $vendorDir . '/phpunit/phpunit/PHPUnit/Extensions/TestDecorator.php',
'PHPUnit_Extensions_TicketListener' => $vendorDir . '/phpunit/phpunit/PHPUnit/Extensions/TicketListener.php',
'PHPUnit_Framework_Assert' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Assert.php',
'PHPUnit_Framework_AssertionFailedError' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/AssertionFailedError.php',
'PHPUnit_Framework_Comparator' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Comparator.php',
'PHPUnit_Framework_ComparatorFactory' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/ComparatorFactory.php',
'PHPUnit_Framework_Comparator_Array' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Comparator/Array.php',
'PHPUnit_Framework_Comparator_DOMDocument' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Comparator/DOMDocument.php',
'PHPUnit_Framework_Comparator_Double' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Comparator/Double.php',
'PHPUnit_Framework_Comparator_Exception' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Comparator/Exception.php',
'PHPUnit_Framework_Comparator_MockObject' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Comparator/MockObject.php',
'PHPUnit_Framework_Comparator_Numeric' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Comparator/Numeric.php',
'PHPUnit_Framework_Comparator_Object' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Comparator/Object.php',
'PHPUnit_Framework_Comparator_Resource' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Comparator/Resource.php',
'PHPUnit_Framework_Comparator_Scalar' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Comparator/Scalar.php',
'PHPUnit_Framework_Comparator_SplObjectStorage' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Comparator/SplObjectStorage.php',
'PHPUnit_Framework_Comparator_Type' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Comparator/Type.php',
'PHPUnit_Framework_ComparisonFailure' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/ComparisonFailure.php',
'PHPUnit_Framework_Constraint' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint.php',
'PHPUnit_Framework_Constraint_And' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/And.php',
'PHPUnit_Framework_Constraint_ArrayHasKey' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/ArrayHasKey.php',
'PHPUnit_Framework_Constraint_Attribute' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/Attribute.php',
'PHPUnit_Framework_Constraint_Callback' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/Callback.php',
'PHPUnit_Framework_Constraint_ClassHasAttribute' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/ClassHasAttribute.php',
'PHPUnit_Framework_Constraint_ClassHasStaticAttribute' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/ClassHasStaticAttribute.php',
'PHPUnit_Framework_Constraint_Composite' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/Composite.php',
'PHPUnit_Framework_Constraint_Count' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/Count.php',
'PHPUnit_Framework_Constraint_Exception' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/Exception.php',
'PHPUnit_Framework_Constraint_ExceptionCode' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/ExceptionCode.php',
'PHPUnit_Framework_Constraint_ExceptionMessage' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/ExceptionMessage.php',
'PHPUnit_Framework_Constraint_FileExists' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/FileExists.php',
'PHPUnit_Framework_Constraint_GreaterThan' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/GreaterThan.php',
'PHPUnit_Framework_Constraint_IsAnything' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/IsAnything.php',
'PHPUnit_Framework_Constraint_IsEmpty' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/IsEmpty.php',
'PHPUnit_Framework_Constraint_IsEqual' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/IsEqual.php',
'PHPUnit_Framework_Constraint_IsFalse' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/IsFalse.php',
'PHPUnit_Framework_Constraint_IsIdentical' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/IsIdentical.php',
'PHPUnit_Framework_Constraint_IsInstanceOf' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/IsInstanceOf.php',
'PHPUnit_Framework_Constraint_IsJson' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/IsJson.php',
'PHPUnit_Framework_Constraint_IsNull' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/IsNull.php',
'PHPUnit_Framework_Constraint_IsTrue' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/IsTrue.php',
'PHPUnit_Framework_Constraint_IsType' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/IsType.php',
'PHPUnit_Framework_Constraint_JsonMatches' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/JsonMatches.php',
'PHPUnit_Framework_Constraint_JsonMatches_ErrorMessageProvider' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/JsonMatches/ErrorMessageProvider.php',
'PHPUnit_Framework_Constraint_LessThan' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/LessThan.php',
'PHPUnit_Framework_Constraint_Not' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/Not.php',
'PHPUnit_Framework_Constraint_ObjectHasAttribute' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/ObjectHasAttribute.php',
'PHPUnit_Framework_Constraint_Or' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/Or.php',
'PHPUnit_Framework_Constraint_PCREMatch' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/PCREMatch.php',
'PHPUnit_Framework_Constraint_SameSize' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/SameSize.php',
'PHPUnit_Framework_Constraint_StringContains' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/StringContains.php',
'PHPUnit_Framework_Constraint_StringEndsWith' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/StringEndsWith.php',
'PHPUnit_Framework_Constraint_StringMatches' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/StringMatches.php',
'PHPUnit_Framework_Constraint_StringStartsWith' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/StringStartsWith.php',
'PHPUnit_Framework_Constraint_TraversableContains' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/TraversableContains.php',
'PHPUnit_Framework_Constraint_TraversableContainsOnly' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/TraversableContainsOnly.php',
'PHPUnit_Framework_Constraint_Xor' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Constraint/Xor.php',
'PHPUnit_Framework_Error' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Error.php',
'PHPUnit_Framework_Error_Deprecated' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Error/Deprecated.php',
'PHPUnit_Framework_Error_Notice' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Error/Notice.php',
'PHPUnit_Framework_Error_Warning' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Error/Warning.php',
'PHPUnit_Framework_Exception' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Exception.php',
'PHPUnit_Framework_ExpectationFailedException' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/ExpectationFailedException.php',
'PHPUnit_Framework_IncompleteTest' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/IncompleteTest.php',
'PHPUnit_Framework_IncompleteTestError' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/IncompleteTestError.php',
'PHPUnit_Framework_MockObject_Builder_Identity' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/Builder/Identity.php',
'PHPUnit_Framework_MockObject_Builder_InvocationMocker' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/Builder/InvocationMocker.php',
'PHPUnit_Framework_MockObject_Builder_Match' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/Builder/Match.php',
'PHPUnit_Framework_MockObject_Builder_MethodNameMatch' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/Builder/MethodNameMatch.php',
'PHPUnit_Framework_MockObject_Builder_Namespace' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/Builder/Namespace.php',
'PHPUnit_Framework_MockObject_Builder_ParametersMatch' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/Builder/ParametersMatch.php',
'PHPUnit_Framework_MockObject_Builder_Stub' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/Builder/Stub.php',
'PHPUnit_Framework_MockObject_Generator' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/Generator.php',
'PHPUnit_Framework_MockObject_Invocation' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/Invocation.php',
'PHPUnit_Framework_MockObject_InvocationMocker' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/InvocationMocker.php',
'PHPUnit_Framework_MockObject_Invocation_Object' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/Invocation/Object.php',
'PHPUnit_Framework_MockObject_Invocation_Static' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/Invocation/Static.php',
'PHPUnit_Framework_MockObject_Invokable' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/Invokable.php',
'PHPUnit_Framework_MockObject_Matcher' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/Matcher.php',
'PHPUnit_Framework_MockObject_Matcher_AnyInvokedCount' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/Matcher/AnyInvokedCount.php',
'PHPUnit_Framework_MockObject_Matcher_AnyParameters' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/Matcher/AnyParameters.php',
'PHPUnit_Framework_MockObject_Matcher_Invocation' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/Matcher/Invocation.php',
'PHPUnit_Framework_MockObject_Matcher_InvokedAtIndex' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/Matcher/InvokedAtIndex.php',
'PHPUnit_Framework_MockObject_Matcher_InvokedAtLeastOnce' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/Matcher/InvokedAtLeastOnce.php',
'PHPUnit_Framework_MockObject_Matcher_InvokedCount' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/Matcher/InvokedCount.php',
'PHPUnit_Framework_MockObject_Matcher_InvokedRecorder' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/Matcher/InvokedRecorder.php',
'PHPUnit_Framework_MockObject_Matcher_MethodName' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/Matcher/MethodName.php',
'PHPUnit_Framework_MockObject_Matcher_Parameters' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/Matcher/Parameters.php',
'PHPUnit_Framework_MockObject_Matcher_StatelessInvocation' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/Matcher/StatelessInvocation.php',
'PHPUnit_Framework_MockObject_MockBuilder' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/MockBuilder.php',
'PHPUnit_Framework_MockObject_MockObject' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/MockObject.php',
'PHPUnit_Framework_MockObject_Stub' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/Stub.php',
'PHPUnit_Framework_MockObject_Stub_ConsecutiveCalls' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/Stub/ConsecutiveCalls.php',
'PHPUnit_Framework_MockObject_Stub_Exception' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/Stub/Exception.php',
'PHPUnit_Framework_MockObject_Stub_MatcherCollection' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/Stub/MatcherCollection.php',
'PHPUnit_Framework_MockObject_Stub_Return' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/Stub/Return.php',
'PHPUnit_Framework_MockObject_Stub_ReturnArgument' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/Stub/ReturnArgument.php',
'PHPUnit_Framework_MockObject_Stub_ReturnCallback' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/Stub/ReturnCallback.php',
'PHPUnit_Framework_MockObject_Stub_ReturnSelf' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/Stub/ReturnSelf.php',
'PHPUnit_Framework_MockObject_Stub_ReturnValueMap' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/Stub/ReturnValueMap.php',
'PHPUnit_Framework_MockObject_Verifiable' => $vendorDir . '/phpunit/phpunit-mock-objects/PHPUnit/Framework/MockObject/Verifiable.php',
'PHPUnit_Framework_OutputError' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/OutputError.php',
'PHPUnit_Framework_SelfDescribing' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/SelfDescribing.php',
'PHPUnit_Framework_SkippedTest' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/SkippedTest.php',
'PHPUnit_Framework_SkippedTestError' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/SkippedTestError.php',
'PHPUnit_Framework_SkippedTestSuiteError' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/SkippedTestSuiteError.php',
'PHPUnit_Framework_SyntheticError' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/SyntheticError.php',
'PHPUnit_Framework_Test' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Test.php',
'PHPUnit_Framework_TestCase' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/TestCase.php',
'PHPUnit_Framework_TestFailure' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/TestFailure.php',
'PHPUnit_Framework_TestListener' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/TestListener.php',
'PHPUnit_Framework_TestResult' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/TestResult.php',
'PHPUnit_Framework_TestSuite' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/TestSuite.php',
'PHPUnit_Framework_TestSuite_DataProvider' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/TestSuite/DataProvider.php',
'PHPUnit_Framework_Warning' => $vendorDir . '/phpunit/phpunit/PHPUnit/Framework/Warning.php',
'PHPUnit_Runner_BaseTestRunner' => $vendorDir . '/phpunit/phpunit/PHPUnit/Runner/BaseTestRunner.php',
'PHPUnit_Runner_StandardTestSuiteLoader' => $vendorDir . '/phpunit/phpunit/PHPUnit/Runner/StandardTestSuiteLoader.php',
'PHPUnit_Runner_TestSuiteLoader' => $vendorDir . '/phpunit/phpunit/PHPUnit/Runner/TestSuiteLoader.php',
'PHPUnit_Runner_Version' => $vendorDir . '/phpunit/phpunit/PHPUnit/Runner/Version.php',
'PHPUnit_TextUI_Command' => $vendorDir . '/phpunit/phpunit/PHPUnit/TextUI/Command.php',
'PHPUnit_TextUI_ResultPrinter' => $vendorDir . '/phpunit/phpunit/PHPUnit/TextUI/ResultPrinter.php',
'PHPUnit_TextUI_TestRunner' => $vendorDir . '/phpunit/phpunit/PHPUnit/TextUI/TestRunner.php',
'PHPUnit_Util_Class' => $vendorDir . '/phpunit/phpunit/PHPUnit/Util/Class.php',
'PHPUnit_Util_Configuration' => $vendorDir . '/phpunit/phpunit/PHPUnit/Util/Configuration.php',
'PHPUnit_Util_DeprecatedFeature' => $vendorDir . '/phpunit/phpunit/PHPUnit/Util/DeprecatedFeature.php',
'PHPUnit_Util_DeprecatedFeature_Logger' => $vendorDir . '/phpunit/phpunit/PHPUnit/Util/DeprecatedFeature/Logger.php',
'PHPUnit_Util_Diff' => $vendorDir . '/phpunit/phpunit/PHPUnit/Util/Diff.php',
'PHPUnit_Util_ErrorHandler' => $vendorDir . '/phpunit/phpunit/PHPUnit/Util/ErrorHandler.php',
'PHPUnit_Util_Fileloader' => $vendorDir . '/phpunit/phpunit/PHPUnit/Util/Fileloader.php',
'PHPUnit_Util_Filesystem' => $vendorDir . '/phpunit/phpunit/PHPUnit/Util/Filesystem.php',
'PHPUnit_Util_Filter' => $vendorDir . '/phpunit/phpunit/PHPUnit/Util/Filter.php',
'PHPUnit_Util_Getopt' => $vendorDir . '/phpunit/phpunit/PHPUnit/Util/Getopt.php',
'PHPUnit_Util_GlobalState' => $vendorDir . '/phpunit/phpunit/PHPUnit/Util/GlobalState.php',
'PHPUnit_Util_InvalidArgumentHelper' => $vendorDir . '/phpunit/phpunit/PHPUnit/Util/InvalidArgumentHelper.php',
'PHPUnit_Util_Log_JSON' => $vendorDir . '/phpunit/phpunit/PHPUnit/Util/Log/JSON.php',
'PHPUnit_Util_Log_JUnit' => $vendorDir . '/phpunit/phpunit/PHPUnit/Util/Log/JUnit.php',
'PHPUnit_Util_Log_TAP' => $vendorDir . '/phpunit/phpunit/PHPUnit/Util/Log/TAP.php',
'PHPUnit_Util_PHP' => $vendorDir . '/phpunit/phpunit/PHPUnit/Util/PHP.php',
'PHPUnit_Util_PHP_Default' => $vendorDir . '/phpunit/phpunit/PHPUnit/Util/PHP/Default.php',
'PHPUnit_Util_PHP_Windows' => $vendorDir . '/phpunit/phpunit/PHPUnit/Util/PHP/Windows.php',
'PHPUnit_Util_Printer' => $vendorDir . '/phpunit/phpunit/PHPUnit/Util/Printer.php',
'PHPUnit_Util_String' => $vendorDir . '/phpunit/phpunit/PHPUnit/Util/String.php',
'PHPUnit_Util_Test' => $vendorDir . '/phpunit/phpunit/PHPUnit/Util/Test.php',
'PHPUnit_Util_TestDox_NamePrettifier' => $vendorDir . '/phpunit/phpunit/PHPUnit/Util/TestDox/NamePrettifier.php',
'PHPUnit_Util_TestDox_ResultPrinter' => $vendorDir . '/phpunit/phpunit/PHPUnit/Util/TestDox/ResultPrinter.php',
'PHPUnit_Util_TestDox_ResultPrinter_HTML' => $vendorDir . '/phpunit/phpunit/PHPUnit/Util/TestDox/ResultPrinter/HTML.php',
'PHPUnit_Util_TestDox_ResultPrinter_Text' => $vendorDir . '/phpunit/phpunit/PHPUnit/Util/TestDox/ResultPrinter/Text.php',
'PHPUnit_Util_TestSuiteIterator' => $vendorDir . '/phpunit/phpunit/PHPUnit/Util/TestSuiteIterator.php',
'PHPUnit_Util_Type' => $vendorDir . '/phpunit/phpunit/PHPUnit/Util/Type.php',
'PHPUnit_Util_XML' => $vendorDir . '/phpunit/phpunit/PHPUnit/Util/XML.php',
'PHP_CodeCoverage' => $vendorDir . '/phpunit/php-code-coverage/PHP/CodeCoverage.php',
'PHP_CodeCoverage_Driver' => $vendorDir . '/phpunit/php-code-coverage/PHP/CodeCoverage/Driver.php',
'PHP_CodeCoverage_Driver_Xdebug' => $vendorDir . '/phpunit/php-code-coverage/PHP/CodeCoverage/Driver/Xdebug.php',
'PHP_CodeCoverage_Exception' => $vendorDir . '/phpunit/php-code-coverage/PHP/CodeCoverage/Exception.php',
'PHP_CodeCoverage_Filter' => $vendorDir . '/phpunit/php-code-coverage/PHP/CodeCoverage/Filter.php',
'PHP_CodeCoverage_Report_Clover' => $vendorDir . '/phpunit/php-code-coverage/PHP/CodeCoverage/Report/Clover.php',
'PHP_CodeCoverage_Report_Factory' => $vendorDir . '/phpunit/php-code-coverage/PHP/CodeCoverage/Report/Factory.php',
'PHP_CodeCoverage_Report_HTML' => $vendorDir . '/phpunit/php-code-coverage/PHP/CodeCoverage/Report/HTML.php',
'PHP_CodeCoverage_Report_HTML_Renderer' => $vendorDir . '/phpunit/php-code-coverage/PHP/CodeCoverage/Report/HTML/Renderer.php',
'PHP_CodeCoverage_Report_HTML_Renderer_Dashboard' => $vendorDir . '/phpunit/php-code-coverage/PHP/CodeCoverage/Report/HTML/Renderer/Dashboard.php',
'PHP_CodeCoverage_Report_HTML_Renderer_Directory' => $vendorDir . '/phpunit/php-code-coverage/PHP/CodeCoverage/Report/HTML/Renderer/Directory.php',
'PHP_CodeCoverage_Report_HTML_Renderer_File' => $vendorDir . '/phpunit/php-code-coverage/PHP/CodeCoverage/Report/HTML/Renderer/File.php',
'PHP_CodeCoverage_Report_Node' => $vendorDir . '/phpunit/php-code-coverage/PHP/CodeCoverage/Report/Node.php',
'PHP_CodeCoverage_Report_Node_Directory' => $vendorDir . '/phpunit/php-code-coverage/PHP/CodeCoverage/Report/Node/Directory.php',
'PHP_CodeCoverage_Report_Node_File' => $vendorDir . '/phpunit/php-code-coverage/PHP/CodeCoverage/Report/Node/File.php',
'PHP_CodeCoverage_Report_Node_Iterator' => $vendorDir . '/phpunit/php-code-coverage/PHP/CodeCoverage/Report/Node/Iterator.php',
'PHP_CodeCoverage_Report_PHP' => $vendorDir . '/phpunit/php-code-coverage/PHP/CodeCoverage/Report/PHP.php',
'PHP_CodeCoverage_Report_Text' => $vendorDir . '/phpunit/php-code-coverage/PHP/CodeCoverage/Report/Text.php',
'PHP_CodeCoverage_Util' => $vendorDir . '/phpunit/php-code-coverage/PHP/CodeCoverage/Util.php',
'PHP_CodeCoverage_Util_InvalidArgumentHelper' => $vendorDir . '/phpunit/php-code-coverage/PHP/CodeCoverage/Util/InvalidArgumentHelper.php',
'PHP_CodeCoverage_Version' => $vendorDir . '/phpunit/php-code-coverage/PHP/CodeCoverage/Version.php',
'PHP_Timer' => $vendorDir . '/phpunit/php-timer/PHP/Timer.php',
'PHP_Token' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_TokenWithScope' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_TokenWithScopeAndVisibility' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_ABSTRACT' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_AMPERSAND' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_AND_EQUAL' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_ARRAY' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_ARRAY_CAST' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_AS' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_AT' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_BACKTICK' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_BAD_CHARACTER' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_BOOLEAN_AND' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_BOOLEAN_OR' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_BOOL_CAST' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_BREAK' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_CALLABLE' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_CARET' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_CASE' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_CATCH' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_CHARACTER' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_CLASS' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_CLASS_C' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_CLONE' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_CLOSE_BRACKET' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_CLOSE_CURLY' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_CLOSE_SQUARE' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_CLOSE_TAG' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_COLON' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_COMMA' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_COMMENT' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_CONCAT_EQUAL' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_CONST' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_CONSTANT_ENCAPSED_STRING' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_CONTINUE' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_CURLY_OPEN' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_DEC' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_DECLARE' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_DEFAULT' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_DIR' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_DIV' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_DIV_EQUAL' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_DNUMBER' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_DO' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_DOC_COMMENT' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_DOLLAR' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_DOLLAR_OPEN_CURLY_BRACES' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_DOT' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_DOUBLE_ARROW' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_DOUBLE_CAST' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_DOUBLE_COLON' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_DOUBLE_QUOTES' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_ECHO' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_ELSE' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_ELSEIF' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_EMPTY' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_ENCAPSED_AND_WHITESPACE' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_ENDDECLARE' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_ENDFOR' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_ENDFOREACH' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_ENDIF' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_ENDSWITCH' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_ENDWHILE' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_END_HEREDOC' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_EQUAL' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_EVAL' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_EXCLAMATION_MARK' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_EXIT' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_EXTENDS' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_FILE' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_FINAL' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_FINALLY' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_FOR' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_FOREACH' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_FUNCTION' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_FUNC_C' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_GLOBAL' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_GOTO' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_GT' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_HALT_COMPILER' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_IF' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_IMPLEMENTS' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_INC' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_INCLUDE' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_INCLUDE_ONCE' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_INLINE_HTML' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_INSTANCEOF' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_INSTEADOF' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_INTERFACE' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_INT_CAST' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_ISSET' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_IS_EQUAL' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_IS_GREATER_OR_EQUAL' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_IS_IDENTICAL' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_IS_NOT_EQUAL' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_IS_NOT_IDENTICAL' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_IS_SMALLER_OR_EQUAL' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_Includes' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_LINE' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_LIST' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_LNUMBER' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_LOGICAL_AND' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_LOGICAL_OR' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_LOGICAL_XOR' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_LT' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_METHOD_C' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_MINUS' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_MINUS_EQUAL' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_MOD_EQUAL' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_MULT' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_MUL_EQUAL' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_NAMESPACE' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_NEW' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_NS_C' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_NS_SEPARATOR' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_NUM_STRING' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_OBJECT_CAST' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_OBJECT_OPERATOR' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_OPEN_BRACKET' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_OPEN_CURLY' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_OPEN_SQUARE' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_OPEN_TAG' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_OPEN_TAG_WITH_ECHO' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_OR_EQUAL' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_PAAMAYIM_NEKUDOTAYIM' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_PERCENT' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_PIPE' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_PLUS' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_PLUS_EQUAL' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_PRINT' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_PRIVATE' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_PROTECTED' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_PUBLIC' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_QUESTION_MARK' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_REQUIRE' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_REQUIRE_ONCE' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_RETURN' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_SEMICOLON' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_SL' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_SL_EQUAL' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_SR' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_SR_EQUAL' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_START_HEREDOC' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_STATIC' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_STRING' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_STRING_CAST' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_STRING_VARNAME' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_SWITCH' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_Stream' => $vendorDir . '/phpunit/php-token-stream/PHP/Token/Stream.php',
'PHP_Token_Stream_CachingFactory' => $vendorDir . '/phpunit/php-token-stream/PHP/Token/Stream/CachingFactory.php',
'PHP_Token_THROW' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_TILDE' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_TRAIT' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_TRAIT_C' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_TRY' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_UNSET' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_UNSET_CAST' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_USE' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_VAR' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_VARIABLE' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_WHILE' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_WHITESPACE' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_XOR_EQUAL' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'PHP_Token_YIELD' => $vendorDir . '/phpunit/php-token-stream/PHP/Token.php',
'Text_Template' => $vendorDir . '/phpunit/php-text-template/Text/Template.php',
);
<?php



class ComposerAutoloaderInitd9afb8ce29d74b76b6753dd5c3bf695e
{
private static $loader;

public static function loadClassLoader($class)
{
if ('Composer\Autoload\ClassLoader' === $class) {
require __DIR__ . '/ClassLoader.php';
}
}

public static function getLoader()
{
if (null !== self::$loader) {
return self::$loader;
}

spl_autoload_register(array('ComposerAutoloaderInitd9afb8ce29d74b76b6753dd5c3bf695e', 'loadClassLoader'), true, true);
self::$loader = $loader = new \Composer\Autoload\ClassLoader();
spl_autoload_unregister(array('ComposerAutoloaderInitd9afb8ce29d74b76b6753dd5c3bf695e', 'loadClassLoader'));

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

$includePaths = require __DIR__ . '/include_paths.php';
array_push($includePaths, get_include_path());
set_include_path(join(PATH_SEPARATOR, $includePaths));

$map = require __DIR__ . '/autoload_namespaces.php';
foreach ($map as $namespace => $path) {
$loader->set($namespace, $path);
}

$classMap = require __DIR__ . '/autoload_classmap.php';
if ($classMap) {
$loader->addClassMap($classMap);
}

$loader->register(true);

return $loader;
}
}
<?php



$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
$vendorDir . '/phpunit/php-text-template',
$vendorDir . '/phpunit/phpunit-mock-objects',
$vendorDir . '/phpunit/php-file-iterator',
$vendorDir . '/phpunit/php-token-stream',
$vendorDir . '/phpunit/php-timer',
$vendorDir . '/phpunit/php-code-coverage',
$vendorDir . '/phpunit/phpunit',
$vendorDir . '/symfony/yaml',
);
<?php











namespace Composer\Autoload;





























class ClassLoader
{
private $prefixes = array();
private $fallbackDirs = array();
private $useIncludePath = false;
private $classMap = array();

public function getPrefixes()
{
return call_user_func_array('array_merge', $this->prefixes);
}

public function getFallbackDirs()
{
return $this->fallbackDirs;
}

public function getClassMap()
{
return $this->classMap;
}




public function addClassMap(array $classMap)
{
if ($this->classMap) {
$this->classMap = array_merge($this->classMap, $classMap);
} else {
$this->classMap = $classMap;
}
}








public function add($prefix, $paths, $prepend = false)
{
if (!$prefix) {
if ($prepend) {
$this->fallbackDirs = array_merge(
(array) $paths,
$this->fallbackDirs
);
} else {
$this->fallbackDirs = array_merge(
$this->fallbackDirs,
(array) $paths
);
}

return;
}

$first = $prefix[0];
if (!isset($this->prefixes[$first][$prefix])) {
$this->prefixes[$first][$prefix] = (array) $paths;

return;
}
if ($prepend) {
$this->prefixes[$first][$prefix] = array_merge(
(array) $paths,
$this->prefixes[$first][$prefix]
);
} else {
$this->prefixes[$first][$prefix] = array_merge(
$this->prefixes[$first][$prefix],
(array) $paths
);
}
}







public function set($prefix, $paths)
{
if (!$prefix) {
$this->fallbackDirs = (array) $paths;

return;
}
$this->prefixes[substr($prefix, 0, 1)][$prefix] = (array) $paths;
}






public function setUseIncludePath($useIncludePath)
{
$this->useIncludePath = $useIncludePath;
}







public function getUseIncludePath()
{
return $this->useIncludePath;
}






public function register($prepend = false)
{
spl_autoload_register(array($this, 'loadClass'), true, $prepend);
}




public function unregister()
{
spl_autoload_unregister(array($this, 'loadClass'));
}







public function loadClass($class)
{
if ($file = $this->findFile($class)) {
include $file;

return true;
}
}








public function findFile($class)
{

 if ('\\' == $class[0]) {
$class = substr($class, 1);
}

if (isset($this->classMap[$class])) {
return $this->classMap[$class];
}

if (false !== $pos = strrpos($class, '\\')) {

 $classPath = strtr(substr($class, 0, $pos), '\\', DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;
$className = substr($class, $pos + 1);
} else {

 $classPath = null;
$className = $class;
}

$classPath .= strtr($className, '_', DIRECTORY_SEPARATOR) . '.php';

$first = $class[0];
if (isset($this->prefixes[$first])) {
foreach ($this->prefixes[$first] as $prefix => $dirs) {
if (0 === strpos($class, $prefix)) {
foreach ($dirs as $dir) {
if (file_exists($dir . DIRECTORY_SEPARATOR . $classPath)) {
return $dir . DIRECTORY_SEPARATOR . $classPath;
}
}
}
}
}

foreach ($this->fallbackDirs as $dir) {
if (file_exists($dir . DIRECTORY_SEPARATOR . $classPath)) {
return $dir . DIRECTORY_SEPARATOR . $classPath;
}
}

if ($this->useIncludePath && $file = stream_resolve_include_path($classPath)) {
return $file;
}

return $this->classMap[$class] = false;
}
}
<?php

if (PHP_SAPI !== 'cli') {
    echo 'Warning: Composer should be invoked via the CLI version of PHP, not the '.PHP_SAPI.' SAPI'.PHP_EOL;
}

require __DIR__.'/../src/bootstrap.php';

use Composer\Console\Application;

error_reporting(-1);

if (function_exists('ini_set')) {
    @ini_set('display_errors', 1);

    $memoryInBytes = function ($value) {
        $unit = strtolower(substr($value, -1, 1));
        $value = (int) $value;
        switch($unit) {
            case 'g':
                $value *= 1024;
                // no break (cumulative multiplier)
            case 'm':
                $value *= 1024;
                // no break (cumulative multiplier)
            case 'k':
                $value *= 1024;
        }

        return $value;
    };

    $memoryLimit = trim(ini_get('memory_limit'));
    // Increase memory_limit if it is lower than 512M
    if ($memoryLimit != -1 && $memoryInBytes($memoryLimit) < 512 * 1024 * 1024) {
        @ini_set('memory_limit', '512M');
    }
    unset($memoryInBytes, $memoryLimit);
}

// run the command application
$application = new Application();
$application->run();

Copyright (c) 2011 Nils Adermann, Jordi Boggiano

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is furnished
to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.

���&��ҩϰp�ɸ��   GBMB