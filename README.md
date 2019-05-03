# cashpp

This extension adds two payment processor types for recording Cash and Cheques (Checks).
The intended use is with administrative webforms where staff want to record cash and cheques received.

The extension is licensed under [AGPL-3.0](LICENSE.txt).

## Requirements

* PHP v5.6+
* CiviCRM 5.13+

## Installation (Web UI)

This extension has not yet been published for installation via the web UI.

## Installation (CLI, Zip)

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl cashpp@https://github.com/ayduns/cashpp/archive/master.zip
```

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/ayduns/cashpp.git
cv en cashpp
```

## Usage

1. Install as above and enable
2. Go to Administer > CiviContribute > Payment Processors
3. Add Payment Processor
   - Payment Processor Type = Cash, Payment Method = Cash, Username/Password is not used but required so enter dummy values
   - Payment Processor Type = Check, Payment Method = Check, Username/Password is not used but required so enter dummy values
4. On a Contribution Page used with webforms, enable Cash and/or Check processor

## Warning!

Don't enable these on normal contribution pages: these processors will allow users to record a cash/cheque contribution
(donation, membership, event etc) without paying you!  Continue to use 'Pay Later' for most situations involving cash/checks.

## Known Issues

Enable translsation so us Brits can deal with Cheques not Checks!

## Technical detail

This just exposes the existing Manual payment processor in core.
