Changelog
=========

## 4.0.0-rc.32

Released: 2020-07-22

### 🐛 Bug fixes

- Fix Errorcontroller adding Exception when it shouldn't. (bobdenotter, [#1643](https://github.com/bolt/core/pull/1643))
- Make sure user default user status is set when instantiating entities from code (I-Valchev, [#1641](https://github.com/bolt/core/pull/1641))
-  We were a bit overzealous in removing the compilerpass. Turns out we _do_ need `packages/bolt.yaml` (bobdenotter, [#1639](https://github.com/bolt/core/pull/1639))
- Saving an edited file should keep input as-is (bobdenotter, [#1637](https://github.com/bolt/core/pull/1637))
- Shuffle paginated records (I-Valchev, [#1633](https://github.com/bolt/core/pull/1633))
- Fix `setcontent` random directive to override anything else set by the OrderDirective (I-Valchev, [#1630](https://github.com/bolt/core/pull/1630))
- Make empty `multiselect` tag invisible (I-Valchev, [#1629](https://github.com/bolt/core/pull/1629))

### 📦 Additions and new features

- Add support for "403 Forbidden" pages (bobdenotter, [#1635](https://github.com/bolt/core/pull/1635))

### 🛠️ Miscellaneous

- Copy extension services and routes into Bolt (bobdenotter, [#1634](https://github.com/bolt/core/pull/1634))
- Richer content format option (I-Valchev, [#1628](https://github.com/bolt/core/pull/1628))
- Users extension prep (I-Valchev, [#1618](https://github.com/bolt/core/pull/1618))

### ⚙️ Code Quality / Developer Experience

- Fix ECS and update config with sets (TomasVotruba, [#1636](https://github.com/bolt/core/pull/1636))

## 4.0.0-rc.30 and 4.0.0-rc.31

Scrapped, due to [#1639](https://github.com/bolt/core/pull/1639)) and followup shenanigans.

## 4.0.0-rc.29

Released: 2020-07-11

### 🐛 Bug fixes

- Allow optional space in `QueryParameterParser` between operand and keyword (bobdenotter, [#1621](https://github.com/bolt/core/pull/1621))
- Allow order by `number` field correctly  (I-Valchev, [#1616](https://github.com/bolt/core/pull/1616))
- Put `localedatetime` with previous format and deprecated notice. Use `localdate` with new format (I-Valchev, [#1612](https://github.com/bolt/core/pull/1612))

### 📦 Additions and new features

- Add `getuser` with alias `user` Twig function (I-Valchev, [#1611](https://github.com/bolt/core/pull/1611))
- Add `random` directive to `setcontent` tag (I-Valchev, [#1606](https://github.com/bolt/core/pull/1606))

### 🛠️ Miscellaneous

- Make the user-friendly notifications a bit more robust (bobdenotter, [#1613](https://github.com/bolt/core/pull/1613))
- Optimize queries for taxonomies, following #1541 (JTNMW, [#1619](https://github.com/bolt/core/pull/1619))

## 4.0.0-rc.28

Released: 2020-07-04

### 🐛 Bug fixes

- `setcontent` returns single for contenttype/id (I-Valchev, [#1595](https://github.com/bolt/core/pull/1595))
- Make sure form validation works with `data-patience` buttons (I-Valchev, [#1594](https://github.com/bolt/core/pull/1594))
- Use humanized taxonomy name when creating new taxonomies (I-Valchev, [#1591](https://github.com/bolt/core/pull/1591))
- Don't break line on date field with valueonly (I-Valchev, [#1582](https://github.com/bolt/core/pull/1582))

### 📦 Additions and new features

- Allow "focus" parameter for excerpts of plain strings (bobdenotter, [#1602](https://github.com/bolt/core/pull/1602))
- Relation factory (I-Valchev, [#1597](https://github.com/bolt/core/pull/1597))
- Allow configurable `date_format` in config.yaml (I-Valchev, [#1593](https://github.com/bolt/core/pull/1593))
- Paginate users listing (I-Valchev, [#1580](https://github.com/bolt/core/pull/1580))

### 🛠️ Miscellaneous

- Refactor `setcontent` handles and directives (I-Valchev, [#1599](https://github.com/bolt/core/pull/1599))
- Use `taxonomy|link` filter to get taxonomy links (I-Valchev, [#1592](https://github.com/bolt/core/pull/1592))

### ⚙️ Code Quality / Developer Experience

- Chore: Updating NPM dependencies (bobdenotter, [#1601](https://github.com/bolt/core/pull/1601))
- Sorry GitHub Actions 😢 you are breaking too often (I-Valchev, [#1598](https://github.com/bolt/core/pull/1598))
- Display Symfony version in "About" and `bolt:info` screens (bobdenotter, [#1586](https://github.com/bolt/core/pull/1586))
- Allow both Symfony 4.4 and 5.1 for now (bobdenotter, [#1579](https://github.com/bolt/core/pull/1579))

## 4.0.0-rc.27

Released: 2020-06-29

### 🐛 Bug fixes

- Slug regenerates on duplicate (I-Valchev, [#1574](https://github.com/bolt/core/pull/1574))
- Include proper css for file uploader (I-Valchev, [#1572](https://github.com/bolt/core/pull/1572))
- Ensure fields inside sets and collections have their correct definition (I-Valchev, [#1571](https://github.com/bolt/core/pull/1571))
- Cache clear does not loop in Config (I-Valchev, [#1570](https://github.com/bolt/core/pull/1570))
- Add defaultlocale to duplicate action twig (I-Valchev, [#1569](https://github.com/bolt/core/pull/1569))
- Singletons return single Content result with `{% setcontent %}` (bobdenotter, [#1565](https://github.com/bolt/core/pull/1565))
- Fix issue with undefined index 0 for a select field inside a a set (I-Valchev, [#1562](https://github.com/bolt/core/pull/1562))
- Allow "Homepage" to be in viewless ContentType (bobdenotter, [#1549](https://github.com/bolt/core/pull/1549))
- Make sure contenttypes routes are updated after changes to contenttypes.yaml (I-Valchev, [#1548](https://github.com/bolt/core/pull/1548))
- After adding `symfony/proxy-manager-bridge`, table prefix went missing (bobdenotter, [#1545](https://github.com/bolt/core/pull/1545))
- Ensure `$this->fields` is initialised (For Fields that haven't been accessed before) (bobdenotter, [#1544](https://github.com/bolt/core/pull/1544))
- Slugs follow `localize` setting (I-Valchev, [#1543](https://github.com/bolt/core/pull/1543))
- Re-set `setSingleFetchMode` to ensure returning a pager, if needed (bobdenotter, [#1576](https://github.com/bolt/core/pull/1576))

### 📦 Additions and new features

- Save content on <kbd>ctrl+s</kbd> and <kbd>cmd+s</kbd> (I-Valchev, [#1573](https://github.com/bolt/core/pull/1573))
- Update to Symfony 5.1 🎉🎊 (bobdenotter, [#1546](https://github.com/bolt/core/pull/1546))

### 🛠️ Miscellaneous

- Better UI for dragging in multiselect (I-Valchev, [#1550](https://github.com/bolt/core/pull/1550))
- Prepare release 4.0.0-rc.26 (bobdenotter, [#1539](https://github.com/bolt/core/pull/1539))

### 🤖 Tests

- GitHub Actions workflow (I-Valchev, [#1575](https://github.com/bolt/core/pull/1575))

### ⚙️ Code Quality / Developer Experience

- Better feedback on bolt:setup errors (I-Valchev, [#1551](https://github.com/bolt/core/pull/1551))
- Allow both Symfony 4.4 and 5.1 for now (bobdenotter, [#1578](https://github.com/bolt/core/pull/1578))

## 4.0.0-rc.26

Released: 2020-06-22

### 🐛 Bug fixes

- Use currently rendered locale in OrderDirective (I-Valchev, [#1529](https://github.com/bolt/core/pull/1529))
- Ensure `$boltConfig` is set for Controllers in extensions (bobdenotter, [#1527](https://github.com/bolt/core/pull/1527))
- Don't "warm up" cache on `composer update`, to save time and prevent dreaded `ProcessTimedOutException` after 10 seconds.. (bobdenotter, [#1526](https://github.com/bolt/core/pull/1526))
- Datefield uses global `app` to access user locale (I-Valchev, [#1521](https://github.com/bolt/core/pull/1521))
- Make sure sets inside collections are instantiated with actual values (I-Valchev, [#1520](https://github.com/bolt/core/pull/1520))

### 🛠️ Miscellaneous

- User edit actions require valid csrf tokens (I-Valchev, [#1532](https://github.com/bolt/core/pull/1532))
- Warn editors about file upload errors (I-Valchev, [#1531](https://github.com/bolt/core/pull/1531))
- Make sure `currentlocale` on edit is always set (I-Valchev, [#1530](https://github.com/bolt/core/pull/1530))
- Make canonical record URL consistent across routes (I-Valchev, [#1511](https://github.com/bolt/core/pull/1511))

### 🤖 Tests

- Localization tests for saved changes in different locales (I-Valchev, [#1516](https://github.com/bolt/core/pull/1516))
- More integration tests for localized content (I-Valchev, [#1509](https://github.com/bolt/core/pull/1509))

## 4.0.0-rc.25

Released: 2020-06-18

### 📦 Additions and new features

- Add Global search to backend (bobdenotter, [#1498](https://github.com/bolt/core/pull/1498))
- Add ability to override routing with record_route (I-Valchev, [#1484](https://github.com/bolt/core/pull/1484))
- Sort multiselect fields with drag and drop (I-Valchev, [#1481](https://github.com/bolt/core/pull/1481))

### 🐛 Bug fixes

- Fix current locale to be correct (I-Valchev, [#1499](https://github.com/bolt/core/pull/1499))
- Fix: Don't show spinners on invalid form submissions (bobdenotter, [#1497](https://github.com/bolt/core/pull/1497))
- Better check for maximum filesize (bobdenotter, [#1495](https://github.com/bolt/core/pull/1495))
- Fix Imagelist alt 'true' issue. Clean up Vue components (I-Valchev, [#1494](https://github.com/bolt/core/pull/1494))
- Include homepage record in Twig globals (I-Valchev, [#1491](https://github.com/bolt/core/pull/1491))
- Don't break on missing Collection Fields (bobdenotter, [#1490](https://github.com/bolt/core/pull/1490))
- Make Collection Field properly Iterable (bobdenotter, [#1485](https://github.com/bolt/core/pull/1485))
- Fix capitalisation in groups (bobdenotter, [#1479](https://github.com/bolt/core/pull/1479))
- Display the Set field correctly in the Editor when new field is added after saving record (I-Valchev, [#1471](https://github.com/bolt/core/pull/1471))
- Fix excerpt length (bobdenotter, [#1469](https://github.com/bolt/core/pull/1469))
- Update `getContentTypeName()`, add `getContentTypeSingularName()` (bobdenotter, [#1468](https://github.com/bolt/core/pull/1468))
- Placeholder in Image Field is not clickable if empty (bobdenotter, [#1505](https://github.com/bolt/core/pull/1505))

### 🛠️ Miscellaneous

- Hide one of two groups of record action buttons on mobile (I-Valchev, [#1501](https://github.com/bolt/core/pull/1501))
- Fixing some more deprecations (bobdenotter, [#1478](https://github.com/bolt/core/pull/1478))
- Use new Symfony Error Controller, instead of Twig's old one. (bobdenotter, [#1477](https://github.com/bolt/core/pull/1477))
- Fixing some deprecations (bobdenotter, [#1475](https://github.com/bolt/core/pull/1475))
- Two more deprecations fixed! (bobdenotter, [#1480](https://github.com/bolt/core/pull/1480))

### 🤖 Tests

- Tests/twig (I-Valchev, [#1502](https://github.com/bolt/core/pull/1502))

## 4.0.0-rc.24

Released: 2020-06-10

### 📦 Additions and new features

- Add `babdev/pagerfanta-bundle`,  `squirrelphp/twig-php-syntax` (bobdenotter, [#1466](https://github.com/bolt/core/pull/1466))

### 🐛 Bug fixes

- Fix setting of `is_writable` when submitted Yaml syntax is incorrect (bobdenotter, [#1465](https://github.com/bolt/core/pull/1465))
- Intersect child fields with parent definition (I-Valchev, [#1464](https://github.com/bolt/core/pull/1464))
- Correct `type: checkbox` Field fixtures (I-Valchev, [#1463](https://github.com/bolt/core/pull/1463))
- (Real) fix for `htmllang()` default locale (I-Valchev, [#1462](https://github.com/bolt/core/pull/1462))
- Make sure list field `|length` filter works as expected (I-Valchev, [#1455](https://github.com/bolt/core/pull/1455))
- Better check for `isSpecialPage` if `homepage:` is set to a contenttype (listing) (bobdenotter, [#1451](https://github.com/bolt/core/pull/1451))

### ⚙️ Code Quality / Developer Experience

- Fix `ObjectManager` namespace for fixtures (phpstan complaining) (I-Valchev, [#1456](https://github.com/bolt/core/pull/1456))
- Bump `websocket-extensions` from `0.1.3` to `0.1.4` (dependabot[bot], [#1450](https://github.com/bolt/core/pull/1450))

---

## 4.0.0-rc.23

Released: 2020-06-06

### 🐛 Bug fixes

- Make sure editing text fields triggers slugify (bobdenotter, [#1440](https://github.com/bolt/core/pull/1440))
- Fix `htmllang()` when no locales defined (I-Valchev, [#1439](https://github.com/bolt/core/pull/1439))
- Fix for windows not handling `%k` in timestamp strings properly (bobdenotter, [#1448](https://github.com/bolt/core/pull/1448))

### ⚙️ Code Quality / Developer Experience

- Remove locale setting from bolt config (legacy) (I-Valchev, [#1441](https://github.com/bolt/core/pull/1441))
- Remove old field types (I-Valchev, [#1433](https://github.com/bolt/core/pull/1433))

---

## 4.0.0-rc.22

Released: 2020-06-02

### 🐛 Bug fixes

- Fix collections visibility (I-Valchev, [#1429](https://github.com/bolt/core/pull/1429))
- Localize collections with easier contenttype config (I-Valchev, [#1434](https://github.com/bolt/core/pull/1434))
- Allow comparison for scalar fields (bobdenotter, [#1428](https://github.com/bolt/core/pull/1428))

---

## 4.0.0-rc.21

Released: 2020-05-31

### 🐛 Bug fixes

- Don't show Fields that were removed from the ContentType definition (bobdenotter, [#1426](https://github.com/bolt/core/pull/1426))
- Unescape Vue input fields (bobdenotter, [#1425](https://github.com/bolt/core/pull/1425))
- Save non-localizable in correct default locale (I-Valchev, [#1424](https://github.com/bolt/core/pull/1424))
- Forbid templateselect inside collection. Fix forbidden fields check. (I-Valchev, [#1423](https://github.com/bolt/core/pull/1423))
- Pretty `record|link` when localization is enabled (I-Valchev, [#1421](https://github.com/bolt/core/pull/1421))
- Allow for parsed dates like "Today" or "in 3 weeks" (bobdenotter, [#1418](https://github.com/bolt/core/pull/1418))
- Update file listing screen: Lazy loading, paginator, other improvements (bobdenotter, [#1413](https://github.com/bolt/core/pull/1413))
- Make sure you can iterate over collection with one field (I-Valchev, [#1412](https://github.com/bolt/core/pull/1412))
- Allow `x` as well as `×` in thumbail URLs (bobdenotter, [#1411](https://github.com/bolt/core/pull/1411))

### 📦 Additions and new features

- Image and File fields support twig `is empty` test (I-Valchev, [#1419](https://github.com/bolt/core/pull/1419))

### 🛠️ Miscellaneous

- Adding spinners and disabling buttons to indicate the user might have to wait a few seconds (bobdenotter, [#1414](https://github.com/bolt/core/pull/1414))
- Add `ListServices()` method to ServiceTrait (bobdenotter, [#1406](https://github.com/bolt/core/pull/1406))

### ⚙️ Code Quality / Developer Experience

- Add `composer/package-versions-deprecated` (bobdenotter, [#1416](https://github.com/bolt/core/pull/1416))

---

## 4.0.0-rc.20

Released: 2020-05-24

### 🐛 Bug fixes

- View saved version in current edit locale (I-Valchev, [#1388](https://github.com/bolt/core/pull/1388))
- Break slightly less when adding new contenttypes (bobdenotter, [#1386](https://github.com/bolt/core/pull/1386))
- Format title works without breaking on new content. Sorting content by title uses format_title. (I-Valchev, [#1385](https://github.com/bolt/core/pull/1385))
- Persist non-translatable field with correct default locale (I-Valchev, [#1384](https://github.com/bolt/core/pull/1384))

### 📦 Additions and new features

- Add Configuration Notices extension (bobdenotter, [#1391](https://github.com/bolt/core/pull/1391))

### 🛠️ Miscellaneous

- Display upload limits and better feedback on failure (bobdenotter, [#1404](https://github.com/bolt/core/pull/1404))
- View content type button on hover (I-Valchev, [#1400](https://github.com/bolt/core/pull/1400))
- Get taxonomy by slug (I-Valchev, [#1397](https://github.com/bolt/core/pull/1397))
- Wrap list fields with 1 element in array (I-Valchev, [#1396](https://github.com/bolt/core/pull/1396))
- Minor CSS changes, update Symfony Encore (bobdenotter, [#1392](https://github.com/bolt/core/pull/1392))
- Users page uses abbr relative date (I-Valchev, [#1382](https://github.com/bolt/core/pull/1382))

### ⚙️ Code Quality / Developer Experience

- Add todo to stop selenium server process (I-Valchev, [#1393](https://github.com/bolt/core/pull/1393))
- Use selenium and chromedriver as composer dev dependencies (I-Valchev, [#1387](https://github.com/bolt/core/pull/1387))

### 🎨 Design / User Interface

- Updates for skeleton theme (bobdenotter, [#1403](https://github.com/bolt/core/pull/1403))
- Working on Skeleton Theme (New.css instead of Sakura) (bobdenotter, [#1401](https://github.com/bolt/core/pull/1401))


## 4.0.0-rc.19

Released: 2020-05-17

### 🐛 Bug fixes

- Feature/set default (I-Valchev, [#1362](https://github.com/bolt/core/pull/1362))
- Bugfix/collections default fix (I-Valchev, [#1353](https://github.com/bolt/core/pull/1353))

### 📦 Additions and new features

-  Improve `title_format` and add `excerpt_format` attribute in ContentTypes (bobdenotter, [#1352](https://github.com/bolt/core/pull/1352))
- Add length attribute for `|title` filter (bobdenotter, [#1349](https://github.com/bolt/core/pull/1349))

### 🛠️ Miscellaneous

- Refactor required attribute to be bool, not int (I-Valchev, [#1368](https://github.com/bolt/core/pull/1368))
- Return correct exit status for cache:thumbs, bolt:reset-secret and bolt:info (I-Valchev, [#1366](https://github.com/bolt/core/pull/1366))

### 🤖 Tests

- Files extras tests (I-Valchev, [#1367](https://github.com/bolt/core/pull/1367))

### 📖 Documentation

- Update README - Note about `var/data/bolt.sqlite` (bobdenotter, [#1364](https://github.com/bolt/core/pull/1364))

### ⚙️ Code Quality / Developer Experience

- Composer dep updates (bobdenotter, [#1380](https://github.com/bolt/core/pull/1380))
- Don't fail on 'Textarea' when it exists (I-Valchev, [#1377](https://github.com/bolt/core/pull/1377))
- NPM Updates, fixing tests (bobdenotter, [#1376](https://github.com/bolt/core/pull/1376))
- Updating some Easy Coding Standards settings (bobdenotter, [#1350](https://github.com/bolt/core/pull/1350))
- Adding the new Changelog!  (bobdenotter, [#1348](https://github.com/bolt/core/pull/1348))
- Update tests readme with up-to-date instructions (I-Valchev, [#1346](https://github.com/bolt/core/pull/1346))
- Release 4.0.0-RC.18 (bobdenotter, [#1344](https://github.com/bolt/core/pull/1344))

### 🎨 Design / User Interface

- Tweaking a bunch of small things: Margins, paddings, minor UX thingies (I-Valchev, [#1369](https://github.com/bolt/core/pull/1369))

## 4.0.0-rc.18

Released: 2020-05-01

### 🐛 Bug fixes

 - Fix flawed logic in Setcontent test page (bobdenotter) [#1342](https://github.com/bolt/core/pull/1342)
 - Sidebar priority fixed on mobile too (I-Valchev) [#1341](https://github.com/bolt/core/pull/1341)
 - API works if no viewless CTs exist (I-Valchev) [#1338](https://github.com/bolt/core/pull/1338)
 - Update content updated successfully message (I-Valchev) [#1331](https://github.com/bolt/core/pull/1331)
 - Invalidate localized menu cache (I-Valchev) [#1326](https://github.com/bolt/core/pull/1326)
 - Update `Field.php`: foreign key constraint issue affecting Collections and Sets (JTNMW) [#1325](https://github.com/bolt/core/pull/1325)
 - Record link filter persists current locale (I-Valchev) [#1316](https://github.com/bolt/core/pull/1316)
 - Record canonical URLs are unique for `record` and `record_locale` routes (I-Valchev) [#1315](https://github.com/bolt/core/pull/1315)
 - Backend menu caches localized (I-Valchev) [#1314](https://github.com/bolt/core/pull/1314)
 - Admin can duplicate a file (I-Valchev) [#1313](https://github.com/bolt/core/pull/1313)

### 📦 Additions and new features

 - Require confirmation to delete collection item in editor (I-Valchev) [#1343](https://github.com/bolt/core/pull/1343)
 - Better `isHomepage` detection for singletons (bobdenotter) [#1337](https://github.com/bolt/core/pull/1337)
 - Make it so `homepage:` accepts a singleton, or a contentType listing (bobdenotter) [#1336](https://github.com/bolt/core/pull/1336)

### ⚙️ Code Quality / Developer Experience

 - Fix phpstan failing on parser::create (I-Valchev) [#1339](https://github.com/bolt/core/pull/1339)
 - Working on NPM bitrot - attempt 2 (bobdenotter) [#1335](https://github.com/bolt/core/pull/1335)
 - Tidy up Twig RelatedExtension (I-Valchev) [#1328](https://github.com/bolt/core/pull/1328)
 - Remove unused Bolt\Entity\Field import (I-Valchev) [#1327](https://github.com/bolt/core/pull/1327)

## 4.0.0-rc.17

Released: 2020-04-19

### 🐛 Bug fixes

 - Fix flawed logic in Setcontent test page (bobdenotter) [#1342](https://github.com/bolt/core/pull/1342)
 - Sidebar priority fixed on mobile too (I-Valchev) [#1341](https://github.com/bolt/core/pull/1341)
 - API works if no viewless CTs exist (I-Valchev) [#1338](https://github.com/bolt/core/pull/1338)
 - Update content updated successfully message (I-Valchev) [#1331](https://github.com/bolt/core/pull/1331)
 - Invalidate localized menu cache (I-Valchev) [#1326](https://github.com/bolt/core/pull/1326)
 - Update `Field.php`: foreign key constraint issue affecting Collections and Sets (JTNMW) [#1325](https://github.com/bolt/core/pull/1325)
 - Record link filter persists current locale (I-Valchev) [#1316](https://github.com/bolt/core/pull/1316)
 - Record canonical URLs are unique for `record` and `record_locale` routes (I-Valchev) [#1315](https://github.com/bolt/core/pull/1315)
 - Backend menu caches localized (I-Valchev) [#1314](https://github.com/bolt/core/pull/1314)
 - Admin can duplicate a file (I-Valchev) [#1313](https://github.com/bolt/core/pull/1313)

### 📦 Additions and new features

 - Require confirmation to delete collection item in editor (I-Valchev) [#1343](https://github.com/bolt/core/pull/1343)
 - Better `isHomepage` detection for singletons (bobdenotter) [#1337](https://github.com/bolt/core/pull/1337)
 - Make it so `homepage:` accepts a singleton, or a contentType listing (bobdenotter) [#1336](https://github.com/bolt/core/pull/1336)

### ⚙️ Code Quality / Developer Experience

 - Fix phpstan failing on parser::create (I-Valchev) [#1339](https://github.com/bolt/core/pull/1339)
 - Working on NPM bitrot - attempt 2 (bobdenotter) [#1335](https://github.com/bolt/core/pull/1335)
 - Tidy up Twig RelatedExtension (I-Valchev) [#1328](https://github.com/bolt/core/pull/1328)
 - Remove unused Bolt\Entity\Field import (I-Valchev) [#1327](https://github.com/bolt/core/pull/1327)
 - Preparing release 4.0.0-rc.17 (bobdenotter) [#1312](https://github.com/bolt/core/pull/1312)


## 4.0.0-rc.16

Released: 2020-04-13

### 🛠️ Miscellaneous

 - Feature/badges for special pages (bobdenotter) [#1311](https://github.com/bolt/core/pull/1311)
 - Add Labels for statuses (bobdenotter) [#1310](https://github.com/bolt/core/pull/1310)
 - Api filter updates (technicallyerik) [#1309](https://github.com/bolt/core/pull/1309)
 - API shows published and viewless: false content only (I-Valchev) [#1305](https://github.com/bolt/core/pull/1305)
 - Mass delete on last page does not break. Content listing redirects to last page if requested page exceeds max (I-Valchev) [#1304](https://github.com/bolt/core/pull/1304)
 - New "Create new..." link has correct href (I-Valchev) [#1303](https://github.com/bolt/core/pull/1303)
 - Add missing labels to bulk actions (I-Valchev) [#1302](https://github.com/bolt/core/pull/1302)
 - Field::getValue() returns defaultLocale value (if current locale value is empty empty) for non-localizable fields (I-Valchev) [#1300](https://github.com/bolt/core/pull/1300)
 - Get correct field value depending on localization settings (I-Valchev) [#1299](https://github.com/bolt/core/pull/1299)
